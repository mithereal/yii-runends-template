<?php

/**
 * This is the model class for table "product".
 *
 * The followings are the available columns in table 'product':
 * @property integer $product_id
 * @property string $model
 * @property string $sku
 * @property string $upc
 * @property string $ean
 * @property string $jan
 * @property string $isbn
 * @property string $mpn
 * @property string $location
 * @property integer $quantity
 * @property integer $stock_status_id
 * @property string $image
 * @property integer $manufacturer_id
 * @property integer $shipping
 * @property string $price
 * @property integer $points
 * @property integer $tax_class_id
 * @property string $date_available
 * @property string $weight
 * @property integer $weight_class_id
 * @property string $length
 * @property string $width
 * @property string $height
 * @property integer $length_class_id
 * @property integer $subtract
 * @property integer $minimum
 * @property integer $sort_order
 * @property integer $status
 * @property string $date_added
 * @property string $date_modified
 * @property integer $viewed
 */
class Product extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('model, sku, upc, ean, jan, isbn, mpn, location, stock_status_id, manufacturer_id, tax_class_id, date_available', 'required'),
			array('quantity, stock_status_id, manufacturer_id, shipping, points, tax_class_id, weight_class_id, length_class_id, subtract, minimum, sort_order, status, viewed', 'numerical', 'integerOnly'=>true),
			array('model, sku, mpn', 'length', 'max'=>64),
			array('upc', 'length', 'max'=>12),
			array('ean', 'length', 'max'=>14),
			array('jan, isbn', 'length', 'max'=>13),
			array('location', 'length', 'max'=>128),
			array('image', 'length', 'max'=>255),
			array('price, weight, length, width, height', 'length', 'max'=>15),
			array('date_added, date_modified', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('product_id, model, sku, upc, ean, jan, isbn, mpn, location, quantity, stock_status_id, image, manufacturer_id, shipping, price, points, tax_class_id, date_available, weight, weight_class_id, length, width, height, length_class_id, subtract, minimum, sort_order, status, date_added, date_modified, viewed', 'safe', 'on'=>'search'),
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
			'product_id' => 'Product',
			'model' => 'Model',
			'sku' => 'Sku',
			'upc' => 'Upc',
			'ean' => 'Ean',
			'jan' => 'Jan',
			'isbn' => 'Isbn',
			'mpn' => 'Mpn',
			'location' => 'Location',
			'quantity' => 'Quantity',
			'stock_status_id' => 'Stock Status',
			'image' => 'Image',
			'manufacturer_id' => 'Manufacturer',
			'shipping' => 'Shipping',
			'price' => 'Price',
			'points' => 'Points',
			'tax_class_id' => 'Tax Class',
			'date_available' => 'Date Available',
			'weight' => 'Weight',
			'weight_class_id' => 'Weight Class',
			'length' => 'Length',
			'width' => 'Width',
			'height' => 'Height',
			'length_class_id' => 'Length Class',
			'subtract' => 'Subtract',
			'minimum' => 'Minimum',
			'sort_order' => 'Sort Order',
			'status' => 'Status',
			'date_added' => 'Date Added',
			'date_modified' => 'Date Modified',
			'viewed' => 'Viewed',
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

		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('model',$this->model,true);
		$criteria->compare('sku',$this->sku,true);
		$criteria->compare('upc',$this->upc,true);
		$criteria->compare('ean',$this->ean,true);
		$criteria->compare('jan',$this->jan,true);
		$criteria->compare('isbn',$this->isbn,true);
		$criteria->compare('mpn',$this->mpn,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('stock_status_id',$this->stock_status_id);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('manufacturer_id',$this->manufacturer_id);
		$criteria->compare('shipping',$this->shipping);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('points',$this->points);
		$criteria->compare('tax_class_id',$this->tax_class_id);
		$criteria->compare('date_available',$this->date_available,true);
		$criteria->compare('weight',$this->weight,true);
		$criteria->compare('weight_class_id',$this->weight_class_id);
		$criteria->compare('length',$this->length,true);
		$criteria->compare('width',$this->width,true);
		$criteria->compare('height',$this->height,true);
		$criteria->compare('length_class_id',$this->length_class_id);
		$criteria->compare('subtract',$this->subtract);
		$criteria->compare('minimum',$this->minimum);
		$criteria->compare('sort_order',$this->sort_order);
		$criteria->compare('status',$this->status);
		$criteria->compare('date_added',$this->date_added,true);
		$criteria->compare('date_modified',$this->date_modified,true);
		$criteria->compare('viewed',$this->viewed);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Product the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
