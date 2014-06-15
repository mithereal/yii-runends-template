<?php

/**
 * This is the model class for table "customer_ip".
 *
 * The followings are the available columns in table 'customer_ip':
 * @property integer $customer_ip_id
 * @property integer $customer_id
 * @property string $ip
 * @property string $date_added
 */
class CustomerIp extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'customer_ip';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('customer_id, ip, date_added', 'required'),
			array('customer_id', 'numerical', 'integerOnly'=>true),
			array('ip', 'length', 'max'=>40),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('customer_ip_id, customer_id, ip, date_added', 'safe', 'on'=>'search'),
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
			'customer_ip_id' => 'Customer Ip',
			'customer_id' => 'Customer',
			'ip' => 'Ip',
			'date_added' => 'Date Added',
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

		$criteria->compare('customer_ip_id',$this->customer_ip_id);
		$criteria->compare('customer_id',$this->customer_id);
		$criteria->compare('ip',$this->ip,true);
		$criteria->compare('date_added',$this->date_added,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CustomerIp the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
