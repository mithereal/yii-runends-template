<?php

/**
 * This is the model class for table "return_history".
 *
 * The followings are the available columns in table 'return_history':
 * @property integer $return_history_id
 * @property integer $return_id
 * @property integer $return_status_id
 * @property integer $notify
 * @property string $comment
 * @property string $date_added
 */
class ReturnHistory extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'return_history';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('return_id, return_status_id, notify, comment, date_added', 'required'),
			array('return_id, return_status_id, notify', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('return_history_id, return_id, return_status_id, notify, comment, date_added', 'safe', 'on'=>'search'),
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
			'return_history_id' => 'Return History',
			'return_id' => 'Return',
			'return_status_id' => 'Return Status',
			'notify' => 'Notify',
			'comment' => 'Comment',
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

		$criteria->compare('return_history_id',$this->return_history_id);
		$criteria->compare('return_id',$this->return_id);
		$criteria->compare('return_status_id',$this->return_status_id);
		$criteria->compare('notify',$this->notify);
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('date_added',$this->date_added,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ReturnHistory the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
