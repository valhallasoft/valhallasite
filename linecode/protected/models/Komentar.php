<?php

/**
 * This is the model class for table "komentar".
 *
 * The followings are the available columns in table 'komentar':
 * @property integer $id_komentar
 * @property string $isi_komentar
 * @property string $nm_komentar
 * @property integer $artikel_id_artikel
 *
 * The followings are the available model relations:
 * @property Artikel $artikelIdArtikel
 */
class Komentar extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'komentar';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('artikel_id_artikel', 'required'),
			array('artikel_id_artikel', 'numerical', 'integerOnly'=>true),
			array('isi_komentar, nm_komentar', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_komentar, isi_komentar, nm_komentar, artikel_id_artikel', 'safe', 'on'=>'search'),
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
			'artikelIdArtikel' => array(self::BELONGS_TO, 'Artikel', 'artikel_id_artikel'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_komentar' => 'Id Komentar',
			'isi_komentar' => 'Isi Komentar',
			'nm_komentar' => 'Nm Komentar',
			'artikel_id_artikel' => 'Artikel Id Artikel',
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

		$criteria->compare('id_komentar',$this->id_komentar);
		$criteria->compare('isi_komentar',$this->isi_komentar,true);
		$criteria->compare('nm_komentar',$this->nm_komentar,true);
		$criteria->compare('artikel_id_artikel',$this->artikel_id_artikel);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Komentar the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
