<?php

class TipoUnidadController extends BaseController {
        /*
         * Muestra la lista completa de todos los Tipos de Unidad
         */
	public function mostrarUsuarios()
	{
                // Con el método all() le estamos pidiendo al modelo de Usuario
                // que busque todos los registros contenidos en esa tabla y los devuelva en un Array   
		 $usuarios  =  TipoUnidadModel::all();
                 
                // El método make de la clase View indica cual vista vamos a mostrar al usuario 
                //y también pasa como parámetro los datos que queramos pasar a la vista. 
                // En este caso le estamos pasando un array con todos los Tipos de Unidad
                return View::make('unidades.lista', array('usuarios' => $usuarios ));           
	}
        
          /*
         * Muestra la lista completa de todos los Tipos de Unidad
         */
	public function mostrarUnidades()
	{
                // Con el método all() le estamos pidiendo al modelo de Usuario
                // que busque todos los registros contenidos en esa tabla y los devuelva en un Array   
		 $unidades  =  TipoUnidadModel::all();
                 
                // El método make de la clase View indica cual vista vamos a mostrar al usuario 
                //y también pasa como parámetro los datos que queramos pasar a la vista. 
                // En este caso le estamos pasando un array con todos los Tipos de Unidad
                return View::make('unidades.lista', array('unidades' => $unidades ));           
	}
        
        /**
        * Muestra formulario para crear Tipo de Unidad
        */
        public function nuevoUsuario()
        {
            return View::make('unidades.crear');
        }

        /**
        * Crear el Nuevo Tipo de Unidad
        */
        public function crearUsuario()
        {
            //$datos = Input::all();
            
            $model = new TipoUnidadModel();
            $model->IdTipoUnidad = Input::get('idtipo');
            $model->TipoUnidad = Input::get('tipoUnidad');
            $model->Movilidad = Input::get('movilidad');
            $model->IconNormal = Input::get('normal');
            $model->IconPanic = Input::get('panic');
            $model->IconOff = Input::get('off');
            $model->IconAttention = Input::get('attention');
           
            $model->save();
            //TipoUnidadModel::create( $datos );
            // el método create nos permite crear un nuevo Tipo de Unidad en la base de datos, este método es proporcionado por Laravel
            // create recibe como parámetro un arreglo con datos de un modelo y los inserta automáticamente en la base de datos 
            // en este caso el arreglo es la información que viene desde un formulario y la obtenemos con el metido Input::all()
 
            return Redirect::to('usuarios');
            // el método redirect nos devuelve a la ruta de mostrar la lista de los Tipos de Unidad
        }
 
        /**
        * Ver Tipo de Unidad con id
        */
        public function verUsuario($id)
        {
            // en este método podemos observar como se recibe un parámetro llamado id
            // este es el id del Tipo de Unidad que se desea buscar y se debe declarar en la ruta como un parámetro 
    
            //$usuario = TipoUnidadModel::find($id);
            $usuario = TipoUnidadModel::where('IdTipoUnidad', '=' ,$id) -> first();
            // para buscar al usuario utilizamos el metido find que nos proporciona Laravel 
            // este método devuelve un objeto con toda la información que contiene un Tipo de Unidad
    
            return View::make('unidades.ver', array('usuario' => $usuario));
            //return View::make('unidades.ver')->with('usuario', $usuario);
        }
}