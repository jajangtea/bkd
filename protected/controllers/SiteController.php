<?php

class SiteController extends Controller {

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionTampil() {

        $modelKinerja = new Ta('search');
        $modelKinerja->unsetAttributes();  // clear any default values

        if (isset($_POST['Ta'])) {
            $modelKinerja->attributes = $_POST['Ta'];
            if ($modelKinerja->tawal == '') {

                $this->redirect(array("site/index"));
            } else {
                $koneksiDB = Yii::app()->db;
                $sql0 = "SELECT t.idta,t.ta,
				(SELECT COUNT(idBidang) AS a FROM tbl_kinerja k INNER JOIN tbl_ta t ON t.idTa=k.tahun WHERE idBidang=1 AND t.idta=$modelKinerja->tawal) AS Pendidikan ,
				(SELECT COUNT(idBidang) AS b FROM tbl_kinerja k INNER JOIN tbl_ta t ON t.idTa=k.tahun WHERE idBidang=2 AND t.idta=$modelKinerja->tawal) AS Penelitian ,
				(SELECT COUNT(idBidang) AS c FROM tbl_kinerja k INNER JOIN tbl_ta t ON t.idTa=k.tahun WHERE idBidang=3 AND t.idta=$modelKinerja->tawal) AS Pengabdian
				FROM tbl_kinerja k 
				INNER JOIN tbl_bidang_kinerja b  ON k.idBidang=b.idBidang 
				INNER JOIN tbl_ta t ON t.idTa=k.tahun GROUP BY t.ta  HAVING t.idta=$modelKinerja->tawal";
                $cari = Ta::model()->findBySql('select * from tbl_ta where idTa="' . $modelKinerja->tawal . '"', array());
                $sql = $koneksiDB->createCommand($sql0);
                $bacadata = $sql->queryAll();
                $dataProvider = new CArrayDataProvider($bacadata, array('keyField' => 'idKinerja'));
                $this->render('index', array('dataProvider' => $dataProvider, 'modelKinerja' => $modelKinerja, 'cari' => $cari));
            }
        }
    }

    public function actionIndex() {
        $modelKinerja = new Ta('searchGraph');
        $modelKinerja->unsetAttributes();  // clear any default values
        if (isset($_GET['Ta']))
            $modelKinerja->attributes = $_GET['Ta'];
        $koneksiDB = Yii::app()->db;
        $sql0 = "SELECT t.ta,(SELECT COUNT(idBidang) AS a FROM tbl_kinerja k INNER JOIN tbl_ta t ON t.idTa=k.tahun WHERE idBidang=1 AND t.status=1) AS Pendidikan ,
		(SELECT COUNT(idBidang) AS b FROM tbl_kinerja k INNER JOIN tbl_ta t ON t.idTa=k.tahun WHERE idBidang=2 AND t.status=1) AS Penelitian ,
		(SELECT COUNT(idBidang) AS c FROM tbl_kinerja k INNER JOIN tbl_ta t ON t.idTa=k.tahun WHERE idBidang=3 AND t.status=1) AS Pengabdian
		FROM tbl_kinerja k 
		INNER JOIN tbl_bidang_kinerja b  ON k.idBidang=b.idBidang 
		INNER JOIN tbl_ta t ON t.idTa=k.tahun GROUP BY t.status HAVING t.status=1";
        $aktif = Ta::model()->tahunaktif();
        $sql = $koneksiDB->createCommand($sql0);
        $bacadata = $sql->queryAll();
        $dataProvider = new CArrayDataProvider($bacadata, array('keyField' => 'idKinerja'));
        $this->render('index', array('dataProvider' => $dataProvider, 'modelKinerja' => $modelKinerja, 'aktif' => $aktif));
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact() {
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
                $subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
                $headers = "From: $name <{$model->email}>\r\n" .
                        "Reply-To: {$model->email}\r\n" .
                        "MIME-Version: 1.0\r\n" .
                        "Content-Type: text/plain; charset=UTF-8";

                mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);
                Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }

    /**
     * Displays the login page
     */
    public function actionLogin() {
        if (!Yii::app()->user->isGuest) {
            $this->redirect(array("site/index"));
        }

        $model = new LoginForm;

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login()) {
                Yii::app()->user->setFlash('login', 'Login success');
                $this->redirect(array("site/index"));
            } else {
                Yii::app()->user->setFlash('login', 'Login failed');
            }
        }
        // display the login form
        $this->render('login', array('model' => $model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

}
