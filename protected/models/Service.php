<?php

/**
 * This is the model class for table "services".
 *
 * The followings are the available columns in table 'services':
 * @property string $service_id
 * @property string $company_id
 * @property string $product_id
 * @property string $member_id
 * @property string $process
 * @property string $explanation
 * @property string $service_status
 */
class Service extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Service the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'services';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('company_id, product_id, member_id', 'length', 'max'=>10),
			array('service_status', 'length', 'max'=>8),
			array('process, explanation', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('service_id, company_id, product_id, member_id, process, explanation, service_status', 'safe', 'on'=>'search'),
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
			'service_id' => 'Service',
			'company_id' => 'Company',
			'product_id' => 'Product',
			'member_id' => 'Member',
			'process' => 'Process',
			'explanation' => 'Explanation',
			'service_status' => 'Service Status',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('service_id',$this->service_id,true);
		$criteria->compare('company_id',$this->company_id,true);
		$criteria->compare('product_id',$this->product_id,true);
		$criteria->compare('member_id',$this->member_id,true);
		$criteria->compare('process',$this->process,true);
		$criteria->compare('explanation',$this->explanation,true);
		$criteria->compare('service_status',$this->service_status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}