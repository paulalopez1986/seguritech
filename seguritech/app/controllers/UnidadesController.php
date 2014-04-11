<?php

class UnidadesController extends BaseController {
       
	public function buscarUnidad()
	{
                $validacion = Validator::make(Input::all(),
                        array('idunidad' => 'required'));
                
                if($validacion->fails())
                {
                    return Redirect::back()->withErrors($validacion);
                }    
                
                $id = Input::get('idunidad');
                
                //$unidad = UnidadesModel::where('IdUnidad', '=' ,$id) -> first();
                
                $unidad = DB::table('MP_Unidades')
                            ->join('MP_TipoUnidad', 'MP_Unidades.IdTipoUnidad', '=', 'MP_TipoUnidad.IdTipoUnidad')
                            ->where('IdUnidad', '=' ,$id)
                            ->first();
                
                
                //$caract = UnidadCaractModel::where('IdUnidad', '=' ,$id) -> get();
                //3 formas de enviar datos a la vista
                //return View::make('unidades.ver')->with('unidad', $unidad);
                return View::make('unidades.ver')->withUnidad($unidad);
                //return View::make('unidades.ver', array('unidad' => $unidad));
	}
}