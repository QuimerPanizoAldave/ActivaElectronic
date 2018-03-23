<?php

namespace ActivaElectronic\Http\ViewComposers;

use Iluminate\Contracts\View\View;
use ActivaElectronic\Categoria;
use ActivaElectronic\Productos;

class AsideComposer{

public function compose(view $view)
{
    $categorias = Categoria::orderBy('categoria','desc')->get();
    $view->with('categorias',$categorias);
}

}