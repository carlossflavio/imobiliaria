<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UtilizadorController;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Controllers\Backend\ImovelController;
use App\Http\Controllers\Backend\EmpresaController;
use App\Http\Controllers\Cliente\ClienteController;
use App\Http\Controllers\Backend\TipoImovelController;

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

Route::get('/', [PagesController::class, 'index'])->name('pages.index');
// Route::get('/', function () {
//     return view('pages.index');
// })-> name('site');


// Route::get('/dashboard', function () {
//      return view('dashboard');
//  })->middleware(['auth', 'verified'])->name('dashboard');

//  Route::middleware('auth')->group(function () {
//      Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//      Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//      Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//  });


require __DIR__ . '/auth.php';


// Grupo Middleware CLIENTES
Route::middleware(['auth','role:cliente'])->group(function () {

    Route::get('/cliente/logout', [ClienteController::class, 'LogoutCliente'])->name('cliente.logout');

}); // fim do grupo de middleware CLIENTES

Route::get('/login', [ClienteController::class, 'LoginCliente'])->name('cliente.login')->middleware(RedirectIfAuthenticated::class);


    Route::get('/cliente/add', [ClienteController::class, 'AddCliente'])->name('cliente.add');

    Route::post('/cliente/registrar', [ClienteController::class, 'RegistrarCliente'])->name('cliente.registro');




Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login')->middleware(RedirectIfAuthenticated::class);



// Grupo Middleware Controlo Administrativo
Route::middleware(['auth','role:admin'])->group(function () {

    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.index');

    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');

    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.perfil');

    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.perfil.store');

    Route::get('/admin/edit/password', [AdminController::class, 'AdminAlterar'])->name('admin.edit.password');

    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.alterar.password');

}); // fim do grupo de middleware admin


Route::middleware(['auth','role:user'])->group(function () {

    Route::get('/utilizador/dashboard', [UtilizadorController::class, 'UtilizadorDashboard'])->name('utilizador.index');

    Route::get('/utilizador/logout', [UtilizadorController::class, 'UtilizadorLogout'])->name('utilizador.logout');

}); // fim do grupo de middleware utilizadores/funcionários


// // Grupo Middleware Controlo de Imoveis
// Route::middleware(['auth','role:admin'])->group(function () {

//     // Rotas de Imóveis
//     Route::controller(ImovelController::class)-> group(function(){

//         Route::get('/all/imoveis', 'TodosImoveis' )->name('todos.imoveis');



//     });
// }); // fim do grupo de middleware admin

// Grupo Middleware Controlo de Imoveis
Route::middleware(['auth','role:admin'])->group(function () {

    // Rotas de Tipos de Imóveis
    Route::controller(TipoImovelController::class)-> group(function(){

        Route::get('/all/type', 'TodosTipos' )->name('todos.tipos');
        Route::get('/add/type', 'AdicionarTipo' )->name('add.tipos');
        Route::post('/store/type', 'StoreTipo')->name('store.tipos');
        Route::get('/edit/type/{id}', 'EditarTipo' )->name('editar.tipo');
        Route::post('/update/type', 'UpdateTipo')->name('update.tipos');
        Route::get('/delete/type/{id}', 'EliminarTipo' )->name('eliminar.tipo');

    });

    Route::controller(EmpresaController::class)-> group(function(){

        Route::get('/all/empresa', 'AllEmpresa' )->name('todos.empresa');
        Route::get('/add/empresa', 'AdicionarEmpresa' )->name('add.empresa');
        Route::post('/store/empresa', 'StoreEmpresa')->name('store.empresa');
        Route::get('/edit/empresa/{id}', 'EditarEmpresa' )->name('editar.empresa');
        Route::post('/update/empresa', 'UpdateEmpresa')->name('update.empresa');
        Route::get('/delete/wmpresa/{id}', 'EliminarEmpresa' )->name('eliminar.empresa');

    });

    Route::controller(ImovelController::class)-> group(function(){

        Route::get('/all/imoveis', 'TodosImovel' )->name('all.imoveis');
        Route::get('/add/imovel', 'AdicionarImovel' )->name('add.imoveis');
        Route::post('/store/imovel', 'StoreImovel')->name('store.imoveis');
        // Route::get('/edit/type/{id}', 'EditarTipo' )->name('editar.imoveis');
        // Route::post('/update/type', 'UpdateTipo')->name('update.imoveis');
        // Route::get('/delete/type/{id}', 'EliminarTipo' )->name('eliminar.imoveis');

    });


}); // fim do grupo de middleware admin



// Rotas para clientes
Route::middleware(['auth','role:cliente'])->group(function () {

    Route::controller(ClienteController::class)-> group(function(){

        Route::get('/ver/perfil', 'VerPerfil' )->name('ver.perfil');
        Route::get('/meu-perfil', 'ClienteProfile')->name('cliente.perfil');
        Route::get('/editar/perfil', 'EditarPerfil' )->name('editar.perfil');


    });

});
