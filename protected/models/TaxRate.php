<?php

/**
 * This is the model class for table "tax_rate".
 *
 * The followings are the available columns in table 'tax_rate':
 * @property integer $tax_rate_id
 * @property integer $geo_zone_id
 * @property string $name
 * @property string $rate
 * @property string $type
 * @property string $date_added
 * @property string $date_modified
 */
class TaxRate extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tax_rate';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, type', 'required'),
			array('geo_zone_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>32),
			array('rate', 'length', 'max'=>15),
			array('type', 'length', 'max'=>1),
			array('date_added, date_modified', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('tax_rate_id, geo_zone_id, name, rate, type, date_added, date_modified', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'tax_rate_id' => 'Tax Rate',
			'geo_zone_id' => 'Geo Zone',
			'name' => 'Name',
			'rate' => 'Rate',
			'type' => 'Type',
			'date_added' => 'Date Added',
			'date_modified' => 'Date Modified',
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

		$criteria->compare('tax_rate_id',$this->tax_rate_id);
		$criteria->compare('geo_zone_id',$this->geo_zone_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('rate',$this->rate,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('date_added',$this->date_added,true);
		$criteria->compare('date_modified',$this->date_modified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TaxRate the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
