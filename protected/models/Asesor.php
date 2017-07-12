<?php

/**
 * This is the model class for table "tbl_asesor".
 *
 * The followings are the available columns in table 'tbl_asesor':
 * @property integer $idAsesor
 * @property integer $idPT
 * @property integer $ilmu
 * @property string $nama
 *
 * The followings are the available model relations:
 * @property Dosen[] $dosens
 * @property Dosen[] $dosens1
 */
class Asesor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_asesor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idPT, nip', 'required'),
			array('idPT, ilmu', 'numerical', 'integerOnly'=>true),
			array('nama', 'length', 'max'=>250),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idAsesor, idPT, ilmu, nama', 'safe', 'on'=>'search'),
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
			'dosens' => array(self::HAS_MANY, 'Dosen', 'idasesor1'),
			'dosens1' => array(self::HAS_MANY, 'Dosen', 'idasesor2'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idAsesor' => 'Id Asesor',
			'idPT' => 'Id Pt',
			'ilmu' => 'Ilmu',
			'nama' => 'Nama',
			'nip' => 'NIP',
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

		$criteria->compare('idAsesor',$this->idAsesor);
		$criteria->compare('idPT',$this->idPT);
		$criteria->compare('ilmu',$this->ilmu);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('nip',$this->nip,true);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Asesor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
