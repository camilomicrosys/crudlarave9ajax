<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
class ProductoController extends Controller
{

  public function index(){
    $obj_procucto= new Producto();
    $data= $obj_procucto->obtenerTodos();
    $datos=['datos'=>$data];
    return view('principal',$datos);
  }

  public function actualizarProducto(Request $request){
    //validamos que existe producto con ese id
    $producto = Producto::find($request->id);

    if ($producto) {
       //la primera parte es el nombre de la tabla , la segunda el nombre del formulario input
        $producto->nombre = $request->producto;
        //si existe actualizamos
        $producto->save();
      //despues de actualizado mostramos la tabla al ajax, para que ya el ajax la monte en la vista principal
      $obj_procucto= new Producto();
      $data= $obj_procucto->obtenerTodos();
      $datos=['datos'=>$data];
      //volvemos a llamar los datos y se los mostramos a la vista y ya en ajax el pone esa respuesta en la vista principal que seria la vista de la tabla
      return view('table',$datos);

    }

  }

  public function eliminarProducto(Request $request,Producto $obj_prducto){
        $id=$request->id;
        $obj_prducto->eliminarProducto($id);
        //despues de eliminarlo mostramos la tabla con los datos actuales
        //despues de actualizado mostramos la tabla al ajax, para que ya el ajax la monte en la vista principal
        
        $data= $obj_prducto->obtenerTodos();
        $datos=['datos'=>$data];
        //volvemos a llamar los datos y se los mostramos a la vista y ya en ajax el pone esa respuesta en la vista principal que seria la vista de la tabla
        return view('table',$datos);
    

  }

  public function agregarProducto(Request $request,Producto $obj_producto){
    $producto = $request->nombreproducto;
    $obj_producto->nombre = $request->nombreproducto;
    $obj_producto->save();
    //despues de agregar el producto mostramos la tabla con los nuevos datos
    $data= $obj_producto->obtenerTodos();
    $datos=['datos'=>$data];
    //volvemos a llamar los datos y se los mostramos a la vista y ya en ajax el pone esa respuesta en la vista principal que seria la vista de la tabla
    return view('table',$datos);




  }
}
