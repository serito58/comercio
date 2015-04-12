<?php

/**
 * This is the model class for table "clientes".
 *
 * The followings are the available columns in table 'clientes':
 * @property integer $id_cliente
 * @property string $dni
 * @property string $nombre
 * @property string $fnac
 * @property string $direccion
 * @property string $ciudad
 * @property string $telefono
 * @property string $mail
 */
class Clientes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'clientes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('dni, nombre, fnac, direccion, ciudad, telefono, mail', 'required'),
			array('dni, nombre, direccion, ciudad, telefono, mail', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_cliente, dni, nombre, fnac, direccion, ciudad, telefono, mail', 'safe', 'on'=>'search'),
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
			'id_cliente' => 'Id Cliente',
			'dni' => 'Dni',
			'nombre' => 'Nombre',
			'fnac' => 'Fnac',
			'direccion' => 'Direccion',
			'ciudad' => 'Ciudad',
			'telefono' => 'Telefono',
			'mail' => 'Mail',
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

		$criteria->compare('id_cliente',$this->id_cliente);
		$criteria->compare('dni',$this->dni,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('fnac',$this->fnac,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('ciudad',$this->ciudad,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('mail',$this->mail,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Clientes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
