<?php

class UnidadCaractModel extends Eloquent{

        //Indica que no vamos a utilizar los timestamps default
        public $timestamps = false;
        
        public $errors;
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'MP_UnidadCaract';
        
        //Por medidas de Seguridad Laravel 
        //nos pide que le especifiquemos cuales son los campos en cada modelo que se puede asignar o insertar de esa manera. 
        //Es se hace colocando un arreglo con los campos que se necesiten en la variable $fillable en los modelos que queramos utilizar.
        protected $fillable = array('IdUnidad','IdTipoUnidad', 'IdCaracteristica', 'Valor');
}