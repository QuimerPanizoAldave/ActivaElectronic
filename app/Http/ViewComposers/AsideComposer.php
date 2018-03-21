<?php

namespace suprasac\Http\ViewComposers;

use Iluminate\Contracts\View\View;
use suprasac\Categoria;
use suprasac\Productos;

class AsideComposer{

public function compose(view $view)
{
    $categorias = Categoria::orderBy('categoria','desc')->get();
    $view->with('categorias',$categorias);
}

}