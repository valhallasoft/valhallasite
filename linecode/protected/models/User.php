<?php

/**
 * This is the model class for table "User".
 *
 * The followings are the available columns in table 'User':
 * @property integer $id_user
 * @property string $nm_user
 * @property string $us_user
 * @property string $ps_user
 * @property string $alt_user
 * @property string $ktk_user
 * @property integer $hak_id_hak
 * @property integer $jk_id_jk
 *
 * The followings are the available model relations:
 * @property Hak $hakIdHak
 * @property Jk $jkIdJk
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'User';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('hak_id_hak, jk_id_jk', 'required'),
			array('hak_id_hak, jk_id_jk', 'numerical', 'integerOnly'=>true),
			array('nm_user, us_user, ps_user, alt_user, ktk_user', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_user, nm_user, us_user, ps_user, alt_user, ktk_user, hak_id_hak, jk_id_jk', 'safe', 'on'=>'search'),
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
			'hakIdHak' => array(self::BELONGS_TO, 'Hak', 'hak_id_hak'),
			'jkIdJk' => array(self::BELONGS_TO, 'Jk', 'jk_id_jk'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_user' => 'Id User',
			'nm_user' => 'Nm User',
			'us_user' => 'Us User',
			'ps_user' => 'Ps User',
			'alt_user' => 'Alt User',
			'ktk_user' => 'Ktk User',
			'hak_id_hak' => 'Hak Id Hak',
			'jk_id_jk' => 'Jk Id Jk',
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

		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('nm_user',$this->nm_user,true);
		$criteria->compare('us_user',$this->us_user,true);
		$criteria->compare('ps_user',$this->ps_user,true);
		$criteria->compare('alt_user',$this->alt_user,true);
		$criteria->compare('ktk_user',$this->ktk_user,true);
		$criteria->compare('hak_id_hak',$this->hak_id_hak);
		$criteria->compare('jk_id_jk',$this->jk_id_jk);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
