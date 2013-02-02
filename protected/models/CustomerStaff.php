<?php

/**
 * This is the model class for table "customer_staff".
 *
 * The followings are the available columns in table 'customer_staff':
 * @property integer $staff_id
 * @property string $customer_id
 * @property string $name
 * @property string $gsm
 * @property string $phone_internal
 * @property string $email
 */
class CustomerStaff extends CActiveRecord
{

  var $customerId = 0;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CustomerStaff the static model class
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
		return 'customer_staff';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('customer_id', 'length', 'max'=>10),
			array('name', 'length', 'max'=>100),
			array('gsm', 'length', 'max'=>11),
			array('phone_internal', 'length', 'max'=>15),
			array('email', 'length', 'max'=>60),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('customer_id, name, gsm, phone_internal, email', 'safe', 'on'=>'search'),
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
			'staff_id' => '#',
			'customer_id' => 'Müşteri',
			'name' => 'Ad Soyad',
			'gsm' => 'Cep Tel',
			'phone_internal' => 'İş Tel',
			'email' => 'E-Posta',
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
		$criteria->condition=" customer_id = '{$this->customerId}' ";
		$criteria->compare('customer_id',$this->customer_id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('gsm',$this->gsm,true);
		$criteria->compare('phone_internal',$this->phone_internal,true);
		$criteria->compare('email',$this->email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function getCustomerId($staffId){
	  $customer = Yii::app()->db->createCommand()
	  ->select('*')
	  ->from('customer_staff')
	  ->where('staff_id=:staff_id', array(':staff_id'=>$staffId))
	  ->queryRow();
	  return $customer['customer_id'];
	}

}