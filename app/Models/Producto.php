<?php  
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $fillable = [
        'nombre',
    ];

public function obtenerTodos()
{
    return $this->all();
}

public function eliminarProducto($id){
    $producto = Producto::findOrFail($id);
    $producto->delete();
}



}