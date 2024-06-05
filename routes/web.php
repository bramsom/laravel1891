<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/frmproducto',[ProductController::class,'formularioProducto']);
//Route::post('/productostore',[ProductController::class,'productStore'])->name('product.store');

//Route::get('/frmcliente',[CustomController::class,'formularioCliente']);
//Route::post('/clientestore',[CustomController::class,'customStore'])->name('custom.store');

//Route::get('/frmproveedor',[SupplierController::class,'formularioproveedor']);
//Route::post('/poveedorstore',[SupplierController::class,'suplierStore'])->name('supplier.store');

//Route::get('/frmcuadratica',[ResultController::class,'formulariocuadratica']);
//Route::post('/cuadraticastore',[ResultController::class,'cuadraticaStore'])->name('cuadratica.store');

//Route::get('/frmprimos',[CousinController::class,'formularioprimos']);
//Route::post('/primosstore',[CousinController::class,'primosStore'])->name('primos.Store');

//Route::get('cursos/listar',[CursoController::class,'index'])->name('curso.index');
//Route:: get('cursos/create',[CursoController::class,'create']);
//Route::post('cursos/store',[CursoController::class,'store'])->name('curso.store');
//Route::get('curso/{curso}',[CursoController::class,'show'])->name('curso.show');
//Route::delete('curso/{curso}',[CursoController::class,'destroy'])->name('curso.destroy');


// Route::get('producto/listar',[ProductController::class,'index'])->name('product.index');
// Route:: get('producto/create',[ProductController::class,'create']);
// Route:: post('producto/store',[ProductController::class,'store'])->name('product.store');


// route::get('markets/food',[ArticleController::class,'food']);
// route::get('markets/list',[ArticleController::class,'list'])->name('markets.list');
// route::post('markets/shop',[ArticleController::class,'shop'])->name('markets.shop');
// Route::get('markets/{markets}',[ArticleController::class,'show'])->name('markets.show');
// Route::delete('markets/{markets}',[ArticleController::class,'destroy'])->name('markets.destroy');

// Route::get('cursos/listar',[CursoController::class,'index'])->name('curso.index');
// Route::get('cursos/create',[CursoController::class,'create']);
// Route::post('cursos/store', [CursoController::class,'store'])->name('curso.store');
// Route::get('curso/{curso}',[CursoController::class,'show'])->name('curso.show');
// Route::put('curso/{curso}',[CursoController::class,'update'])->name('curso.update');
// Route::delete('curso/{curso}',[CursoController::class,'destroy'])->name('curso.destroy');
// Route::get('curso/{curso}/editar',[CursoController::class,'edit'])->name('curso.edit');


// Route::get('camionero/asociar',[TruckController::class,'asociar']);
// Route::post('camionero/asociar_rol/store',[TruckController::class,'store'])->name('truck_trucker.store');


Route::get('camion/asociar',[TruckController::class,'asociar']);
Route::post('camion/store',[TruckController::class,'store'])->name('camion.store');

Route::get('camion/prueba',[TruckController::class,'prueba']);