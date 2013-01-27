<?php

/**
 * This is the model class for table "products". The followings are the available columns in table 'products':
 *
 * @property string $product_id
 * @property string $product_code
 * @property string $product_name
 * @property integer $group_id
 * @property integer $brand_id
 * @property integer $tax_rate
 * @property string $cost_price
 * @property string $sale_price
 * @property string $currency
 * @property integer $quantity
 * @property string $image
 * @property string $type
 */
class Product extends CActiveRecord
{


  var $brands;

  var $groups;


  public function init(){
    parent::init();
    $this->groups = CHtml::listData(ProductGroup::model()->findAllBySql('SELECT * from product_groups'), 'group_id', 'group_name');
    $this->brands = CHtml::listData(Brand::model()->findAllBySql('SELECT * from brands'), 'brand_id', 'brand_name');
  }

  /**
   * Returns the static model of the specified AR class.
   *
   * @param string $className
   * active record class name.
   * @return Product the static model class
   */
  public static function model($className = __CLASS__)
  {
    return parent::model($className);
  }

  /**
   *
   * @return string the associated database table name
   */
  public function tableName()
  {
    return 'products';
  }

  /**
   *
   * @return array validation rules for model attributes.
   */
  public function rules()
  {
    // NOTE: you should only define rules for those attributes that
    // will receive user inputs.
    return array(
      array('product_code,product_name', 'required',
        'message' => '{attribute} alanı doldurulmalıdır.'),
      array('group_id, brand_id, tax_rate,quantity', 'numerical', 'integerOnly' => true),
      array('product_code', 'length', 'max' => 100), array('product_name', 'length', 'max' => 255),
      array('cost_price, sale_price', 'length', 'max' => 6), array('currency', 'length', 'max' => 5),
      array('image', 'length', 'max' => 200), array('type', 'length', 'max' => 10),
      // The following rule is used by search().
      // Please remove those attributes that should not be searched.
      array(
        'product_id, product_code, product_name, group_id, brand_id, tax_rate, cost_price, sale_price, currency, quantity, image, type',
        'safe', 'on' => 'search'));
  }

  /**
   *
   * @return array relational rules.
   */
  public function relations()
  {
    // NOTE: you may need to adjust the relation name and the related
    // class name for the relations automatically generated below.
    return array();
  }

  /**
   *
   * @return array customized attribute labels (name=>label)
   */
  public function attributeLabels()
  {
    return array('product_id' => '#', 'product_code' => 'Ürün Kodu', 'product_name' => 'Ürün Adı',
      'group_id' => 'Grup', 'group_name' => "Grup Adı", 'brand_id' => 'Marka', 'tax_rate' => 'KDV(%)',
      'cost_price' => 'Alış Fiyatı(KDV Hariç)', 'sale_price' => 'Satış Fiyatı(KDV Dahil)', 'currency' => 'Para Birimi',
      'quantity' => 'Adet', 'image' => 'Resim', 'type' => 'Tür');
  }

  /**
   * Retrieves a list of models based on the current search/filter conditions.
   *
   * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
   */
  public function search()
  {
    // Warning: Please modify the following code to remove attributes that
    // should not be searched.
    $criteria = new CDbCriteria();
    $criteria->select = "p.*,pg.group_name AS group_id, b.brand_name AS brand_id";
    $criteria->alias = "p";
    $criteria->join = "LEFT JOIN product_groups pg ON pg.group_id = p.group_id\n";
    $criteria->join .= "LEFT JOIN brands b ON b.brand_id = p.brand_id";
    $criteria->compare('product_id', $this->product_id, true);
    $criteria->compare('product_code', $this->product_code, true);
    $criteria->compare('product_name', $this->product_name, true);
    $criteria->compare('brand_id', $this->brand_id);
    $criteria->compare('tax_rate', $this->tax_rate);
    $criteria->compare('cost_price', $this->cost_price, true);
    $criteria->compare('sale_price', $this->sale_price, true);
    $criteria->compare('currency', $this->currency, true);
    $criteria->compare('quantity', $this->quantity);
    $criteria->compare('image', $this->image, true);
    $criteria->compare('type', $this->type, true);
    return new CActiveDataProvider($this, array('criteria' => $criteria,
      'sort' => array('attributes' => array('product_id', 'product_name'))      // Attributes has to be row name of my sql query result
      , 'pagination' => array('pageSize' => 2)));
  }

  public static function get_groups()
  {
    $result = $this->db->findAllBySql("SELECT * FROM product_groups");

  }
}