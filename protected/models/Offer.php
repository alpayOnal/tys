<?php

/**
 * This is the model class for table "offers".
 *
 * The followings are the available columns in table 'offers':
 * @property string $offer_id
 * @property string $member_id
 * @property string $company_id
 * @property string $company_staff
 * @property string $note
 * @property string $manage_note
 * @property string $offer_date
 * @property string $offer_status
 */
class Offer extends CActiveRecord
{
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
			array('member_id, company_id', 'length', 'max'=>11),
			array('company_staff', 'length', 'max'=>200),
			array('offer_status', 'length', 'max'=>8),
			array('note, manage_note, offer_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('offer_id, member_id, company_id, company_staff, note, manage_note, offer_date, offer_status', 'safe', 'on'=>'search'),
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
			'company_id' => 'Müşteri',
			'company_staff' => 'İlgili Kişi',
			//'note' => 'Not',
			//'manage_note' => 'Müdür Notu',
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

		$criteria->compare('offer_id',$this->offer_id,true);
		$criteria->compare('member_id',$this->member_id,true);
		$criteria->compare('company_id',$this->company_id,true);
		$criteria->compare('company_staff',$this->company_staff,true);
		$criteria->compare('note',$this->note,true);
		$criteria->compare('manage_note',$this->manage_note,true);
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
	}
}