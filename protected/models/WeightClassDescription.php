<?php

/**
 * This is the model class for table "weight_class_description".
 *
 * The followings are the available columns in table 'weight_class_description':
 * @property integer $weight_class_id
 * @property integer $language_id
 * @property string $title
 * @property string $unit
 */
class WeightClassDescription extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'weight_class_description';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('language_id, title, unit', 'required'),
			array('language_id', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>32),
			array('unit', 'length', 'max'=>4),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('weight_class_id, language_id, title, unit', 'safe', 'on'=>'search'),
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
			'weight_class_id' => 'Weight Class',
			'language_id' => 'Language',
			'title' => 'Title',
			'unit' => 'Unit',
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

		$criteria->compare('weight_class_id',$this->weight_class_id);
		$criteria->compare('language_id',$this->language_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('unit',$this->unit,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return WeightClassDescription the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
