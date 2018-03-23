<?php

namespace ActivaElectronic\Http\Controllers;

use Illuminate\Http\Request;

use ActivaElectronic\Http\Requests;
use ActivaElectronic\Http\Controllers\Controller;
use ActivaElectronic\Producto;



class CartController extends Controller
{
   public function __construct()
   {
   	if(!\Session::has('cart')) \Session::put('cart',array());
   }

    //mostrar carrito
    public function show()
    {

        $cart = \Session::get('cart');
          $productos = Producto::productos();
        return view('vista.carrito', compact('cart','productos'));
    }

    //agregar item 
    
    public function add(Producto $productos)
    {
    	$cart = \Session::get('cart');
    	$productos->cantidad = 1;
    	$cart[$productos->slug] = $productos;
    	\Session::put('cart',$cart);

    	return redirect()->route('cart-show','producto');
    }


 //eliminar producto
 

 public function delete(Producto $productos)
 {
            $cart = \Session::get('cart');
            unset($cart[$productos->slug]);
            \Session::put('cart',$cart);

            return redirect()->route('cart-show');
 }

//actualizar cantidad = item

public function update(Producto $productos, $cantidad)
{
  $cart = \Session::get('cart');
  $cart[$productos->slug]->cantidad = $cantidad;
  \Session::put('cart', $cart);

  return redirect()->route('cart-show');

}


//vaciar carrito 

public function trash()
{
  \Session::forget('cart');

  return redirect()->route('cart-show');
}

//Detalle de pedido

public function orderDetail()
{
  if(count(\Session::get('cart')) <= 0) return redirect()->route('productos');
  $cart = \Session::get('cart');

return view('vista.pedido',compact('cart'));

}

protected function saveOrder()
{
  $subtotal=0;
  $cart = \Session::get('cart');
  $shipping = 20;

  foreach ($cart as $producto){
    $subtotal = $producto -> cantidad * $producto->precio;

  }

  $order = Order::create([
     'subtotal' => $subtotal,
     'shipping' => $shipping,
     'user_id' =>\Auth::user()->id

    ]);

  foreach ($cart as $producto) {
    $this->saveOrderItem($producto, $order->id);
  }
}



}
