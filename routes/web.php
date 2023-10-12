<?php

<<<<<<< HEAD

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\ImovelController as BackendImovelController;
use App\Http\Controllers\Backend\ProprietarioController;
use App\Http\Controllers\Cliente\ClienteController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UtilizadorController;

use Illuminate\Support\Facades\Route;
=======

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
>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085

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
<<<<<<< HEAD

Route::get('pages/imoveis', [PagesController::class, 'MostrarImovel'])->name('pages.imoveis');
// Route::get('/', function () {
//     return view('pages.index');
// })-> name('site');


//Routas para LOGIN
Route::get('/admin', [AdminController::class, 'Index'])->name('login.form');
Route::post('/admin/login', [AdminController::class, 'Login'])->name ('admin.login');

Route::get('/user', [UtilizadorController::class, 'Index'])->name('user.form');
Route::post('/user/login', [UtilizadorController::class, 'Login'])->name('user.login');

Route::get('/proprietario', [ProprietarioController::class, 'Index'])->name('propritario.form');
Route::post('/proprietario/login', [ProprietarioController::class, 'Login'])->name('proprietario.login');


                        //CLIENTES ROUTAS
Route::get('/cliente', [ClienteController::class, 'Index'])->name('cliente.form');
Route::post('/clientes/login', [ClienteController::class, 'Login'])->name('cliente.login');

Route::get('/cliente/register', [ClienteController::class, 'ClienteRegister'])->name('cliente.register');

 Route::post('/cliente/register/create', [ClienteController::class, 'ClienteStore'])->name('cliente.create');


//FIM



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
=======
// Route::get('/', function () {
//     return view('pages.index');
// })-> name('site');

>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085

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
<<<<<<< HEAD

require __DIR__ . '/auth.php';

Route::middleware('admin')->group(function () {

    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.index');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.perfil');

    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.perfil.store');

    Route::get('/admin/edit/password', [AdminController::class, 'AdminAlterar'])->name('admin.edit.password');

    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.alterar.password');
 // Fim Alterações de Admin


 // Registrar HORARIOS

 Route::get('/admin/all/horarios', [AdminController::class, 'AllHorarios'])->name('horario.all');

 Route::get('/admin/registar/horarios', [AdminController::class, 'CreateHorarios'])->name('horario.register');

 Route::post('/admin/create/horarios', [AdminController::class, 'StoreHorarios'])->name('horario.create');

 // FIM HORARIOS

 // Registrar USER
 Route::get('/user/register', [UtilizadorController::class, 'UserRegister'])->name('user.register');

 Route::post('/user/register/create', [UtilizadorController::class, 'UserStore'])->name('user.register.create');
 // FIM DE Registro de USER


  // Registrar PROPRIETARIO
  Route::get('/proprietario/register', [ProprietarioController::class, 'PropiRegister'])->name('propri.register');

  Route::post('/proprietario/register/create', [ProprietarioController::class, 'PropiStore'])->name('propri.register.create');
  // FIM DE Registro de PROPRIETARIO


    Route::controller(BackendImovelController::class)-> group(function(){

            Route::get('/all/imoveis', 'TodosImovel' )->name('imoveis.all');
            Route::get('/add/imovel', 'AdicionarImovel' )->name('imoveis.add');
            Route::post('/store/imovel', 'StoreImovel')->name('imoveis.store');
            Route::get('/edit/imovel/{id}', 'EditImovel')->name('imoveis.edit');
            Route::post('/update/imovel', 'UpdateImovel')->name('imoveis.update');
            Route::get('/delete/imovel/{id}', 'DeleteImovel' )->name('imoveis.delete');


    //     //Estado de Imóvel
    //     Route::get('/imoveis/estado/{id}/edit', [ImovelController::class, 'EstadoEdit'])->name('imoveis.estado.edit');
    //     Route::put('/imoveis/{id}/update', [ImovelController::class, 'UpdateEstado'])->name('imoveis.estado.update');
});

}); // fim do grupo de middleware admin


Route::middleware(['auth', 'role:secretaria'])->group(function () {

    Route::get('/user/dashboard', [UtilizadorController::class, 'UserDashboard'])->name('user.index');
    Route::get('/user/logout', [UtilizadorController::class, 'UserLogout'])->name('user.logout');

}); // fim do grupo de middleware utilizadores/funcionários


Route::middleware('cliente')->group(function () {

    Route::get('perfil/edit', [ClienteController::class,'ClienteEdit'])->name('cliente.edit');
    Route::post('perfil/update', [ClienteController::class,'ClienteUpdate'])->name('cliente.update');

    Route::get('logout', [ClienteController::class, 'ClienteLogout'])->name('cliente.logout');
}); // fim do grupo de middleware CLIENTE
=======
>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085
