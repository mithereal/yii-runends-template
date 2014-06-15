<?php

/**
 * This is the model class for table "download".
 *
 * The followings are the available columns in table 'download':
 * @property integer $download_id
 * @property string $filename
 * @property string $mask
 * @property integer $remaining
 * @property string $date_added
 */
class Download extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'download';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('filename, mask', 'required'),
			array('remaining', 'numerical', 'integerOnly'=>true),
			array('filename, mask', 'length', 'max'=>128),
			array('date_added', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('download_id, filename, mask, remaining, date_added', 'safe', 'on'=>'search'),
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
			'download_id' => 'Download',
			'filename' => 'Filename',
			'mask' => 'Mask',
			'remaining' => 'Remaining',
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

		$criteria->compare('download_id',$this->download_id);
		$criteria->compare('filename',$this->filename,true);
		$criteria->compare('mask',$this->mask,true);
		$criteria->compare('remaining',$this->remaining);
		$criteria->compare('date_added',$this->date_added,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Download the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
