<?php

class UnidadCaractController extends BaseController {
        /*
         * Muestra las caracteristicas asociadas a una Unidad
         */
	public function mostrarCaract()
	{
                $validacion = Validator::make(Input::all(),
                        array('idunidad' => 'required|numeric'));
                
                if($validacion->fails())
                {
                    return Redirect::back()->withErrors($validacion);
                }    
                
                $id = Input::get('idunidad');
                
                //Validar si no se encuentra registro
                $unidad = UnidadesModel::where('IdUnidad', '=' ,$id) -> first();
                
                //echo "Unidad:$unidad<br />\n";
                
                if($unidad==NULL)
                {
                     return Redirect::to('/')
                        // Aquí se esta devolviendo a la vista mensaje de error
                        ->with('mensaje', '¡No se encontro registro!');
                }  
                else
                {
              
                    $caracts = DB::table('MP_TipoUnidadCaract')
                                ->join('MP_UnidadCaract', 'MP_TipoUnidadCaract.IdCaracteristica', '=', 'MP_UnidadCaract.IdCaracteristica') 
                                ->select('MP_UnidadCaract.IdUnidad', 'MP_UnidadCaract.IdTipoUnidad', 'MP_TipoUnidadCaract.IdCaracteristica', 'MP_TipoUnidadCaract.Caracteristica', 'MP_UnidadCaract.Valor')
                                ->where('MP_UnidadCaract.IdUnidad', '=' ,$unidad->IdUnidad)
                                ->get();
                
                    // El método make de la clase View indica cual vista vamos a mostrar al usuario 
                    //y también pasa como parámetro los datos que queramos pasar a la vista. 
                    // En este caso le estamos pasando un arreglo de características donde cada item contiene 
                    // a su vez un arreglo con el detalle de la característica que existe en la BD's       
    //                foreach ($caracts as $caract) {
    //                    echo "Caracteristica <br />\n";
    //                    echo "IdUnidad: $caract->IdUnidad<br />\n";
    //                    echo "IdTipoUnidad: $caract->IdTipoUnidad<br />\n";
    //                    echo "IdTipoUnidad: $caract->IdCaracteristica<br />\n";
    //                    echo "IdTipoUnidad: $caract->Caracteristica<br />\n";
    //                    echo "IdTipoUnidad: $caract->Valor<br />\n";
    //                }
                    return View::make('unidades.lista', array('caracts' => $caracts ));      
                }
	}
                    
        /**
        * Crear el Nuevo Tipo de Unidad
        */
        public function actualizarCaract()
        {
            $data = Input::all();
            //se descuenta el campo del token, campo idUnidad y
            //campo idTipoUnidad
            $items = count( $data ) - 3;
            
            //campos hidden donde se guarda el
            //idUnidad y idTipoUnidad
            $idUnidad = Input::get('idUnidad');
            $idTipoUnidad = Input::get('idTipoUnidad');
           
            $i = 1;
            $filas_editadas = 0;
            //i dependa del numero de inputs $items
            for ($i = 1; $i <= $items; $i++) {
                    $value = Input::get($i);
                    
                    //se selecciona específicamente la característica a modificar
                    $unidad = DB::table('MP_UnidadCaract')->where('IdUnidad', '=', $idUnidad)
                                                    ->where('IdTipoUnidad','=',$idTipoUnidad)
                                                    ->where('IdCaracteristica','=',$i)
                                                    ->get();
                    
                    //se actualiza específicamente la característica a modificar
                    $filas_editadas += DB::update('UPDATE MP_UnidadCaract SET Valor = ? WHERE IdUnidad = ? '
                                .               'AND IdTipoUnidad = ? AND IdCaracteristica = ?', array( $value, $idUnidad, $idTipoUnidad, $i)); 
            }
            
            //si se realiza correctamente la actualizacion envíamos un mensaje de tipo flash
            //que sólo estará disponible una vez
            if($filas_editadas)
            { 
                return Redirect::to('/')->with('mensaje','¡Se realizó actualizacion!.');

            }
            else
            {
                return Redirect::to('/')->with('mensaje','¡Ocurrio un error en la actualizacion!.');
            } 
        }      
}