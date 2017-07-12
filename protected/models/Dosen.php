<?php

/**
 * This is the model class for table "tbl_dosen".
 *
 * The followings are the available columns in table 'tbl_dosen':
 * @property integer $idDosen
 * @property integer $noSertifikat
 * @property integer $nidn
 * @property string $namaDosen
 * @property integer $idPT
 * @property integer $idProdi
 * @property integer $idJabfung
 * @property integer $idGol
 * @property string $tglLahir
 * @property string $tempatLahir
 * @property integer $idJenisDosen
 * @property integer $idIlmu
 * @property integer $idTA
 * @property integer $idasesor1
 * @property integer $idasesor2
 * @property string $email
 * @property integer $idSemester
 * @property integer $s1
 * @property integer $s2
 * @property integer $s3
 * @property integer $nip
 * @property string $hp
 *
 * The followings are the available model relations:
 * @property Golongan $idGol0
 * @property Semester $idSemester0
 * @property Pt $s10
 * @property Pt $s20
 * @property Pt $s30
 * @property Pt $idPT0
 * @property Prodi $idProdi0
 * @property Jabfung $idJabfung0
 * @property JenisDosen $idJenisDosen0
 * @property Keilmuan $idIlmu0
 * @property Ta $idTA0
 * @property Asesor $idasesor10
 * @property Asesor $idasesor20
 * @property Kinerja[] $kinerjas
 */
class Dosen extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_dosen';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nip,nidn,hp','required'),
			array('noSertifikat, nidn, idPT, idProdi, idJabfung, idGol, idJenisDosen, idIlmu, idTA, s1, s2, s3', 'numerical', 'integerOnly'=>true),
			array('namaDosen', 'length', 'max'=>250),
			array('tempatLahir, email', 'length', 'max'=>200),
			array('tglLahir', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idDosen, nidn, namaDosen, idPT, idProdi, idJabfung, idGol, tglLahir, tempatLahir, idJenisDosen, idIlmu, idTA, email, s1, s2, s3', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idGol0' => array(self::BELONGS_TO, 'Golongan', 'idGol'),
			'idSemester0' => array(self::BELONGS_TO, 'Semester', 'idSemester'),
			's10' => array(self::BELONGS_TO, 'Pt', 's1'),
			's20' => array(self::BELONGS_TO, 'Pt', 's2'),
			's30' => array(self::BELONGS_TO, 'Pt', 's3'),
			'idPT0' => array(self::BELONGS_TO, 'Pt', 'idPT'),
			'idProdi0' => array(self::BELONGS_TO, 'Prodi', 'idProdi'),
			'idJabfung0' => array(self::BELONGS_TO, 'Jabfung', 'idJabfung'),
			'idJenisDosen0' => array(self::BELONGS_TO, 'JenisDosen', 'idJenisDosen'),
			'idIlmu0' => array(self::BELONGS_TO, 'Keilmuan', 'idIlmu'),
			'idTA0' => array(self::BELONGS_TO, 'Ta', 'idTA'),
			'idasesor10' => array(self::BELONGS_TO, 'Asesor', 'idasesor1'),
			'idasesor20' => array(self::BELONGS_TO, 'Asesor', 'idasesor2'),
			'kinerjas' => array(self::HAS_MANY, 'Kinerja', 'idDosen'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idDosen' => 'Dosen',
			'noSertifikat' => 'No Sertifikat',
			'nidn' => 'NIDN',
			'namaDosen' => 'Nama Dosen',
			'idPT' => 'Perguruan Tinggi',
			'idProdi' => 'Prodi',
			'idJabfung' => 'Jabatan Fungsional',
			'idGol' => 'Golongan',
			'tglLahir' => 'Tgl Lahir',
			'tempatLahir' => 'Tempat Lahir',
			'idJenisDosen' => 'Jenis Dosen',
			'idIlmu' => 'Keilmuan',
			'idTA' => 'Tahun Ajaran',
			
                        'email' => 'Email',
			's1' => 'Program S1',
			's2' => 'Program S2',
			's3' => 'Program S3',
			'nip' => 'NIP',
			'hp' => 'Handphone',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;
		$criteria->compare('idDosen',$this->idDosen);
		$criteria->compare('noSertifikat',$this->noSertifikat);
		$criteria->compare('nidn',$this->nidn);
		$criteria->compare('namaDosen',$this->namaDosen,true);
		$criteria->compare('idPT',$this->idPT);
		$criteria->compare('idProdi',$this->idProdi);
		$criteria->compare('idJabfung',$this->idJabfung);
		$criteria->compare('idGol',$this->idGol);
		$criteria->compare('tglLahir',$this->tglLahir,true);
		$criteria->compare('tempatLahir',$this->tempatLahir,true);
		$criteria->compare('idJenisDosen',$this->idJenisDosen);
		$criteria->compare('idIlmu',$this->idIlmu);
		$criteria->compare('idTA',$this->idTA);
		$criteria->compare('idasesor1',$this->idasesor1);
		$criteria->compare('idasesor2',$this->idasesor2);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('idSemester',$this->idSemester);
		$criteria->compare('s1',$this->s1);
		$criteria->compare('s2',$this->s2);
		$criteria->compare('s3',$this->s3);
		$criteria->compare('nip',$this->nip);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Dosen the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
