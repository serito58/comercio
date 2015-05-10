<?php

/**
 * This is the model class for table "proveedor".
 *
 * The followings are the available columns in table 'proveedor':
 * @property integer $id
 * @property string $proveedor
 * @property string $marcas
 * @property string $viajante
 * @property string $direccion
 * @property string $cp
 * @property string $telefono
 * @property string $correo
 */
class Proveedor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'proveedor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('proveedor, marcas, direccion, cp', 'required'),
			array('proveedor, viajante, direccion', 'length', 'max'=>250),
			array('marcas', 'length', 'max'=>255),
			array('cp, telefono', 'length', 'max'=>50),
			array('correo', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, proveedor, marcas, viajante, direccion, cp, telefono, correo', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'proveedor' => 'Proveedor',
			'marcas' => 'Marcas',
			'viajante' => 'Viajante',
			'direccion' => 'Direccion',
			'cp' => 'Cp',
			'telefono' => 'Telefono',
			'correo' => 'Correo',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('proveedor',$this->proveedor,true);
		$criteria->compare('marcas',$this->marcas,true);
		$criteria->compare('viajante',$this->viajante,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('cp',$this->cp,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('correo',$this->correo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Proveedor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
