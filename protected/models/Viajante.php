<?php

/**
 * This is the model class for table "viajante".
 *
 * The followings are the available columns in table 'viajante':
 * @property integer $id
 * @property string $fecha
 * @property string $pedido
 * @property string $fpagado
 * @property integer $importe
 * @property string $cheques
 * @property string $frecibido
 * @property string $obs
 * @property integer $proveedor_id
 */
class Viajante extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'viajante';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha, pedido, fpagado, importe, cheques, frecibido, obs, proveedor_id', 'required'),
			array('importe, proveedor_id', 'numerical', 'integerOnly'=>true),
			array('fecha, pedido, fpagado, cheques, frecibido', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fecha, pedido, fpagado, importe, cheques, frecibido, obs, proveedor_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array('proveedor' => array(self::BELONGS_TO, 'Proveedor', 'proveedor_id') );
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fecha' => 'Fecha',
			'pedido' => 'Pedido',
			'fpagado' => 'Fpagado',
			'importe' => 'Importe',
			'cheques' => 'Cheques',
			'frecibido' => 'Frecibido',
			'obs' => 'Obs',
			'proveedor_id' => 'Proveedor',
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
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('pedido',$this->pedido,true);
		$criteria->compare('fpagado',$this->fpagado,true);
		$criteria->compare('importe',$this->importe);
		$criteria->compare('cheques',$this->cheques,true);
		$criteria->compare('frecibido',$this->frecibido,true);
		$criteria->compare('obs',$this->obs,true);
		$criteria->compare('proveedor_id',$this->proveedor_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Viajante the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
