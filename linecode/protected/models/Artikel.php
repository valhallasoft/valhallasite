<?php

/**
 * This is the model class for table "artikel".
 *
 * The followings are the available columns in table 'artikel':
 * @property integer $id_artikel
 * @property string $jdl_artikel
 * @property string $isi_artikel
 * @property string $tgl_artikel
 * @property integer $like_artikel
 * @property integer $con_artikel
 * @property string $png_artikel
 *
 * The followings are the available model relations:
 * @property Katagory[] $katagories
 * @property Komentar[] $komentars
 */
class Artikel extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'artikel';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('like_artikel, con_artikel', 'numerical', 'integerOnly'=>true),
			array('jdl_artikel, tgl_artikel, png_artikel', 'length', 'max'=>45),
			array('isi_artikel', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_artikel, jdl_artikel, isi_artikel, tgl_artikel, like_artikel, con_artikel, png_artikel', 'safe', 'on'=>'search'),
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
			'katagories' => array(self::MANY_MANY, 'Katagory', 'katagory_has_artikel(artikel_id_artikel, katagory_id_katagory)'),
			'komentars' => array(self::HAS_MANY, 'Komentar', 'artikel_id_artikel'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_artikel' => 'Id Artikel',
			'jdl_artikel' => 'Jdl Artikel',
			'isi_artikel' => 'Isi Artikel',
			'tgl_artikel' => 'Tgl Artikel',
			'like_artikel' => 'Like Artikel',
			'con_artikel' => 'Con Artikel',
			'png_artikel' => 'Png Artikel',
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

		$criteria->compare('id_artikel',$this->id_artikel);
		$criteria->compare('jdl_artikel',$this->jdl_artikel,true);
		$criteria->compare('isi_artikel',$this->isi_artikel,true);
		$criteria->compare('tgl_artikel',$this->tgl_artikel,true);
		$criteria->compare('like_artikel',$this->like_artikel);
		$criteria->compare('con_artikel',$this->con_artikel);
		$criteria->compare('png_artikel',$this->png_artikel,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Artikel the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
