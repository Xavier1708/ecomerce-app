<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// rota da pagina inicial
Route::get('/', [HomeController::class, 'index'])->name('produto');

// rota para ver detalhe do produto e decidir se vais comprar
Route::get('/Product/{id}', [ProductController::class, 'mostrarDetalhes'])->name('mostrar.produto');

// ROTAS ADMINSTRATIVAS 
Route::get('/admin', [AdminController::class, 'areaAdminstrativa'])->name('mostrar.areaAdmistrativa');

//VAI RECEBER A RESPONSABLIDADE DE ADICIONAR UM NOVO PRODUTO (POST)
Route::post('/admin/produto', [AdminController::class, 'salvar'])->name('admin.productos.salvar');


// routa para mostrar a area de actualizar novo produto
Route::get('/admin/actualizar/{id}/edit', [AdminController::class, 'mostrarTelaDeActualizarProduto'])->name('admin.mostrarTelaDeActualizarProduto');
// este metodo sera responsavel por actualizar de facto um produto
// routa para mostrar a area de actualizar novo produto
Route::put('/admin/actualizar/{id}', [AdminController::class, 'actualizar'])->name('admin.actualizar');




//VAI RECEBER A RESPONSABLIDADE DE ADICIONAR UM NOVO PRODUTO (POST)
Route::post('/admin/productos', [AdminController::class, 'salvarProduto'])->name('admin.products.salvarProduto');

// routa para mostrar a area de cadastrar novo produto
Route::get('/admin/novo', [AdminController::class, 'mostrarTelaDeNovoProduto'])->name('admin.mostrarTelaDeNovoProduto');
