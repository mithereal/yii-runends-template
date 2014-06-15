<?php

/**
 * This is the model class for table "profile".
 *
 * The followings are the available columns in table 'profile':
 * @property integer $profile_id
 * @property integer $sort_order
 * @property integer $status
 * @property string $price
 * @property string $frequency
 * @property string $duration
 * @property string $cycle
 * @property integer $trial_status
 * @property string $trial_price
 * @property string $trial_frequency
 * @property string $trial_duration
 * @property string $trial_cycle
 */
class Profile extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'profile';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sort_order, status, price, frequency, duration, cycle, trial_status, trial_price, trial_frequency, trial_duration, trial_cycle', 'required'),
			array('sort_order, status, trial_status', 'numerical', 'integerOnly'=>true),
			array('price, frequency, duration, cycle, trial_price, trial_frequency, trial_duration, trial_cycle', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('profile_id, sort_order, status, price, frequency, duration, cycle, trial_status, trial_price, trial_frequency, trial_duration, trial_cycle', 'safe', 'on'=>'search'),
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
			'profile_id' => 'Profile',
			'sort_order' => 'Sort Order',
			'status' => 'Status',
			'price' => 'Price',
			'frequency' => 'Frequency',
			'duration' => 'Duration',
			'cycle' => 'Cycle',
			'trial_status' => 'Trial Status',
			'trial_price' => 'Trial Price',
			'trial_frequency' => 'Trial Frequency',
			'trial_duration' => 'Trial Duration',
			'trial_cycle' => 'Trial Cycle',
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

		$criteria->compare('profile_id',$this->profile_id);
		$criteria->compare('sort_order',$this->sort_order);
		$criteria->compare('status',$this->status);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('frequency',$this->frequency,true);
		$criteria->compare('duration',$this->duration,true);
		$criteria->compare('cycle',$this->cycle,true);
		$criteria->compare('trial_status',$this->trial_status);
		$criteria->compare('trial_price',$this->trial_price,true);
		$criteria->compare('trial_frequency',$this->trial_frequency,true);
		$criteria->compare('trial_duration',$this->trial_duration,true);
		$criteria->compare('trial_cycle',$this->trial_cycle,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Profile the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
