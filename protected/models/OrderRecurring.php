<?php

/**
 * This is the model class for table "order_recurring".
 *
 * The followings are the available columns in table 'order_recurring':
 * @property integer $order_recurring_id
 * @property integer $order_id
 * @property string $created
 * @property integer $status
 * @property integer $product_id
 * @property string $product_name
 * @property integer $product_quantity
 * @property integer $profile_id
 * @property string $profile_name
 * @property string $profile_description
 * @property string $recurring_frequency
 * @property integer $recurring_cycle
 * @property integer $recurring_duration
 * @property string $recurring_price
 * @property integer $trial
 * @property string $trial_frequency
 * @property integer $trial_cycle
 * @property integer $trial_duration
 * @property string $trial_price
 * @property string $profile_reference
 */
class OrderRecurring extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'order_recurring';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('order_id, created, status, product_id, product_name, product_quantity, profile_id, profile_name, profile_description, recurring_frequency, recurring_cycle, recurring_duration, recurring_price, trial, trial_frequency, trial_cycle, trial_duration, trial_price, profile_reference', 'required'),
			array('order_id, status, product_id, product_quantity, profile_id, recurring_cycle, recurring_duration, trial, trial_cycle, trial_duration', 'numerical', 'integerOnly'=>true),
			array('product_name, profile_name, profile_description, profile_reference', 'length', 'max'=>255),
			array('recurring_frequency, trial_frequency', 'length', 'max'=>25),
			array('recurring_price, trial_price', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('order_recurring_id, order_id, created, status, product_id, product_name, product_quantity, profile_id, profile_name, profile_description, recurring_frequency, recurring_cycle, recurring_duration, recurring_price, trial, trial_frequency, trial_cycle, trial_duration, trial_price, profile_reference', 'safe', 'on'=>'search'),
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
			'order_recurring_id' => 'Order Recurring',
			'order_id' => 'Order',
			'created' => 'Created',
			'status' => 'Status',
			'product_id' => 'Product',
			'product_name' => 'Product Name',
			'product_quantity' => 'Product Quantity',
			'profile_id' => 'Profile',
			'profile_name' => 'Profile Name',
			'profile_description' => 'Profile Description',
			'recurring_frequency' => 'Recurring Frequency',
			'recurring_cycle' => 'Recurring Cycle',
			'recurring_duration' => 'Recurring Duration',
			'recurring_price' => 'Recurring Price',
			'trial' => 'Trial',
			'trial_frequency' => 'Trial Frequency',
			'trial_cycle' => 'Trial Cycle',
			'trial_duration' => 'Trial Duration',
			'trial_price' => 'Trial Price',
			'profile_reference' => 'Profile Reference',
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

		$criteria->compare('order_recurring_id',$this->order_recurring_id);
		$criteria->compare('order_id',$this->order_id);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('product_name',$this->product_name,true);
		$criteria->compare('product_quantity',$this->product_quantity);
		$criteria->compare('profile_id',$this->profile_id);
		$criteria->compare('profile_name',$this->profile_name,true);
		$criteria->compare('profile_description',$this->profile_description,true);
		$criteria->compare('recurring_frequency',$this->recurring_frequency,true);
		$criteria->compare('recurring_cycle',$this->recurring_cycle);
		$criteria->compare('recurring_duration',$this->recurring_duration);
		$criteria->compare('recurring_price',$this->recurring_price,true);
		$criteria->compare('trial',$this->trial);
		$criteria->compare('trial_frequency',$this->trial_frequency,true);
		$criteria->compare('trial_cycle',$this->trial_cycle);
		$criteria->compare('trial_duration',$this->trial_duration);
		$criteria->compare('trial_price',$this->trial_price,true);
		$criteria->compare('profile_reference',$this->profile_reference,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OrderRecurring the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
