<?php

/**
 * This is the model class for table "tbl_ta".
 *
 * The followings are the available columns in table 'tbl_ta':
 * @property integer $idTa
 * @property string $ta
 *
 * The followings are the available model relations:
 * @property Dosen[] $dosens
 */
class Ta extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public $tawal;
	public $takhir;
	public function tableName()
	{
		return 'tbl_ta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ta', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idTa, ta, tawal, takhir', 'safe', 'on'=>'search'),
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
			'dosens' => array(self::HAS_MANY, 'Dosen', 'idTA'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idTa' => 'Tahun Ajaran',
			'ta' => 'Ta',
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

		$criteria->compare('idTa',$this->idTa);
		$criteria->compare('ta',$this->ta,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function tahunaktif()
	{
		$hasil = $this->findBySql('select * from tbl_ta where status=1');
		return $hasil;
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
