<?php

/**
 * This is the model class for table "katagory".
 *
 * The followings are the available columns in table 'katagory':
 * @property integer $id_katagory
 * @property string $nm_katagory
 * @property integer $Menu_id_menu
 * @property integer $view_id_view
 *
 * The followings are the available model relations:
 * @property Menu $menuIdMenu
 * @property View $viewIdView
 * @property Artikel[] $artikels
 */
class Katagory extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'katagory';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Menu_id_menu, view_id_view', 'required'),
			array('Menu_id_menu, view_id_view', 'numerical', 'integerOnly'=>true),
			array('nm_katagory', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_katagory, nm_katagory, Menu_id_menu, view_id_view', 'safe', 'on'=>'search'),
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
			'menuIdMenu' => array(self::BELONGS_TO, 'Menu', 'Menu_id_menu'),
			'viewIdView' => array(self::BELONGS_TO, 'View', 'view_id_view'),
			'artikels' => array(self::MANY_MANY, 'Artikel', 'katagory_has_artikel(katagory_id_katagory, artikel_id_artikel)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_katagory' => 'Id Katagory',
			'nm_katagory' => 'Nm Katagory',
			'Menu_id_menu' => 'Menu Id Menu',
			'view_id_view' => 'View Id View',
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

		$criteria->compare('id_katagory',$this->id_katagory);
		$criteria->compare('nm_katagory',$this->nm_katagory,true);
		$criteria->compare('Menu_id_menu',$this->Menu_id_menu);
		$criteria->compare('view_id_view',$this->view_id_view);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Katagory the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
