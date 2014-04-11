<?php

class PaginasController extends BaseController {
    
	public function info()
	{
		 $nombre = 'Informacion ';
                 return View::make('info')->with('nombre', $nombre);
	}
        
        public function acerca()
	{
		 $nombre = 'Acerca ';
                 return View::make('info')->with('nombre', $nombre);
	}

}