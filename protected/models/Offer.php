<?php

/**
 * This is the model class for table "offers".
 *
 * The followings are the available columns in table 'offers':
 * @property string $offer_id
 * @property string $member_id
 * @property string $customer_id
 * @property string $customer_staff
 * @property string $note
 * @property string $offer_date
 * @property string $offer_status
 */
class Offer extends CActiveRecord
{

  var $customers;
  var $customerStaffs;

  public function init()
  {
    parent::init();
    $this->customers = CHtml::listData(Customer::model()->findAllBySql('SELECT customer_id,company_name from customers'), 'customer_id', 'company_name');
  }

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Offer the static model class
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
		return 'offers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('member_id, customer_id', 'length', 'max'=>11),
		  array('customer_staff,offer_date','required','message'=>"{attribute} alanı zorunludur"),
			array('customer_staff', 'length', 'max'=>200),
			array('offer_status', 'length', 'max'=>8),
			array('note, offer_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('offer_id, member_id, customer_id, customer_staff, note,  offer_date, offer_status', 'safe', 'on'=>'search'),
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
			'offer_id' => 'Teklif No',
			'member_id' => 'Teklif Veren',
			'customer_id' => 'Müşteri',
			'customer_staff' => 'İlgili Kişi',
			'note' => 'Notlar',
			'offer_date' => 'Tarih',
			'offer_status' => 'Durum',
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
		$criteria->select = "o.*,c.company_name AS customer_id, cs.name AS customer_staff, m.name AS member_id";
		$criteria->alias = "o";
		$criteria->join = "LEFT JOIN customers c ON c.customer_id = o.customer_id\n";
		$criteria->join .= "LEFT JOIN customer_staff cs ON cs.staff_id = o.customer_staff\n";
		$criteria->join .= "LEFT JOIN members m ON m.member_id = o.member_id";

		$criteria->compare('offer_id',$this->offer_id,true);
		$criteria->compare('member_id',$this->member_id,true);
		$criteria->compare('customer_id',$this->customer_id,true);
		$criteria->compare('customer_staff',$this->customer_staff,true);
		$criteria->compare('note',$this->note,true);
		$criteria->compare('offer_date',$this->offer_date,true);
		$criteria->compare('offer_status',$this->offer_status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		    'sort'=>array(
		        'attributes'=>array(
		            'offer_id', 'offer_date','offer_status' // Attributes has to be row name of my sql query result
		        ),
		    ),
		    'pagination' => array(
		        'pageSize' => 10,
		    ),
		));
	}		protected function beforeSave ()    {		$offer_date=strtotime($this->offer_date);		$offer_date=date("Y-m-d",$offer_date);		$this->offer_date=$offer_date;        return parent::beforeSave ();    }  	protected function afterFind ()    {		$offer_date=strtotime($this->offer_date);		$offer_date=date("d/m/Y",$offer_date);		$this->offer_date=$offer_date;        return parent::afterFind ();    }
}