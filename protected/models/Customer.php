<?php

/**
 * This is the model class for table "customers".
 *
 * The followings are the available columns in table 'customers':
 * @property string $customer_id
 * @property integer $customer_group_id
 * @property string $current_code
 * @property string $company_name
 * @property string $company_title
 * @property string $phone_gsm
 * @property string $phone
 * @property string $fax
 * @property string $email
 * @property string $web
 * @property string $address
 * @property string $city
 * @property string $town
 * @property string $company_type
 */
class Customer extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Customer the static model class
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
		return 'customers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('customer_group_id', 'numerical', 'integerOnly'=>true),
		  array('company_name,company_title,email', 'required',
		        'message' => '{attribute} alanı doldurulmalıdır.'),
			array('current_code, email', 'length', 'max'=>50),
		  array('email', 'email','checkMX'=>true),
			array('company_name', 'length', 'max'=>150),
			array('company_title', 'length', 'max'=>200),
			array('phone_gsm, phone, fax, city, town', 'length', 'max'=>11),
			array('web', 'length', 'max'=>60),
			array('address', 'length', 'max'=>255),
			array('company_type', 'length', 'max'=>6),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('customer_id, customer_group_id, current_code, company_name, company_title, phone_gsm, phone, fax, email, web, address, city, town, company_type', 'safe', 'on'=>'search'),
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
			'customer_id' => 'Müşteri No',
			'customer_group_id' => 'Grup',
			'current_code' => 'Cari Kod',
			'company_name' => 'Şirket Adı',
			'company_title' => 'Ünvan',
			'phone_gsm' => 'Cep Telefonu',
			'phone' => 'Telefon',
			'fax' => 'Fax',
			'email' => 'E-Posta',
			'web' => 'Web',
			'address' => 'Adres',
			'city' => 'Şehir',
			'town' => 'İlçe',
			'company_type' => 'Türü',
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

		$criteria->compare('customer_id',$this->customer_id,true);
		$criteria->compare('customer_group_id',$this->customer_group_id);
		$criteria->compare('current_code',$this->current_code,true);
		$criteria->compare('company_name',$this->company_name,true);
		$criteria->compare('company_title',$this->company_title,true);
		$criteria->compare('phone_gsm',$this->phone_gsm,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('web',$this->web,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('town',$this->town,true);
		$criteria->compare('company_type',$this->company_type,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		    'sort'=>array(
		        'attributes'=>array(
		            'customer_id', 'company_name' // Attributes has to be row name of my sql query result
		        ),
		    ),
		    'pagination' => array(
		        'pageSize' => 10,
		    ),
		));
	}	public static function get($customerId){
	  $customer = Yii::app()->db->createCommand()
	  ->select('*')
	  ->from('customers')
	  ->where('customer_id=:customer_id', array(':customer_id'=>$customerId))
	  ->queryRow();	  return $customer;
	}
}