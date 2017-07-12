<?php

/**
 * This is the model class for table "tbl_kinerja".
 *
 * The followings are the available columns in table 'tbl_kinerja':
 * @property integer $idKinerja
 * @property integer $idBidang
 * @property string $jenisKegiatan
 * @property string $buktiPenugasan
 * @property string $sksPenugasan
 * @property string $masaPenugasan
 * @property string $buktiDokumen
 * @property string $sksDokumen
 * @property integer $idRekomendasi
 * @property string $tahun
 * @property integer $idDosen 
 * @property integer $idasesor1
 * The followings are the available model relations:
 * @property BidangKinerja $idBidang0
 * @property Dosen $idDosen0
 */
class Kinerja extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_kinerja';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idBidang, idRekomendasi, idDosen, idasesor1, idasesor2, idSemester', 'numerical', 'integerOnly'=>true),
			array('jenisKegiatan, buktiPenugasan, masaPenugasan, buktiDokumen', 'length', 'max'=>200),
			array('sksPenugasan, sksDokumen', 'length', 'max'=>5),
			array('tahun', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idKinerja, idBidang, jenisKegiatan, buktiPenugasan, idasesor1, idasesor2, idSemester, sksPenugasan, masaPenugasan, buktiDokumen, sksDokumen, idRekomendasi, tahun, idDosen', 'safe', 'on'=>'search'),
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
			'idBidang0' => array(self::BELONGS_TO, 'BidangKinerja', 'idBidang'),
			'idDosen0' => array(self::BELONGS_TO, 'Dosen', 'idDosen'),
			'idRekomendasi0' => array(self::BELONGS_TO, 'Rekomendasi', 'idRekomendasi'),
			'tahun0' => array(self::BELONGS_TO, 'Ta', 'tahun'),
                        'idSemester0' => array(self::BELONGS_TO, 'Semester', 'idSemester'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idKinerja' => 'Kinerja',
			'idBidang' => 'Bidang',
			'jenisKegiatan' => 'Kegiatan',
			'buktiPenugasan' => 'Bukti Penugasan',
			'sksPenugasan' => 'SKS',
			'masaPenugasan' => 'Masa Penugasan',
			'buktiDokumen' => 'Bukti Dokumen',
			'sksDokumen' => 'SKS Dokumen',
			'idRekomendasi' => 'Rekomendasi',
			'tahun' => 'Tahun',
			'idDosen' => 'Dosen',
                        'idasesor1' => 'Asesor 1',
			'idasesor2' => 'Asesor 2',
			'idSemester' => 'Semester',
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

		$criteria->compare('idKinerja',$this->idKinerja);
		$criteria->compare('idBidang',$this->idBidang);
		$criteria->compare('jenisKegiatan',$this->jenisKegiatan,true);
		$criteria->compare('buktiPenugasan',$this->buktiPenugasan,true);
		$criteria->compare('sksPenugasan',$this->sksPenugasan,true);
		$criteria->compare('masaPenugasan',$this->masaPenugasan,true);
		$criteria->compare('buktiDokumen',$this->buktiDokumen,true);
		$criteria->compare('sksDokumen',$this->sksDokumen,true);
		$criteria->compare('idRekomendasi',$this->idRekomendasi);
		$criteria->compare('tahun',$this->tahun,true);
		$criteria->compare('idDosen',$this->idDosen);
                $criteria->compare('idasesor1',$this->idasesor1);
                $criteria->compare('idasesor2',$this->idasesor2);
                $criteria->compare('idSemester',$this->idSemester);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kinerja the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
