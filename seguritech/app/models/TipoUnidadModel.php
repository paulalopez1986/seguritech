<?php

class TipoUnidadModel extends Eloquent{

        //Indica que no vamos a utilizar los timestamps default
        public $timestamps = false;
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'MP_TipoUnidad';
        
        //Cuando utilizamos el método create (TipoUnidadController) estamos haciendo asignación en masa y por medidas de seguridad Laravel 
        //nos pide que le especifiquemos cuales son los campos en cada modelo que se puede asignar o insertar de esa manera. 
        //Es se hace colocando un arreglo con los campos que se necesiten en la variable $fillable en los modelos que queramos utilizar.
        protected $fillable = array('IdTipoUnidad','TipoUnidad', 'Movilidad', 'IconNormal', 'IconPanic', 'IconOff', 'IconAttention');
}