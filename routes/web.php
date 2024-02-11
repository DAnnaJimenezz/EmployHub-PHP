<?php

use App\Http\Controllers\AboutUSController;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\BienvenidaController;
use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\ConocimientoController;
use App\Http\Controllers\DenominacionController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\FuncionController;
use App\Http\Controllers\HabilidadController;
use App\Http\Controllers\HojaVidaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\OcupacionController;
use App\Http\Controllers\OfertaController;
use App\Http\Controllers\PonderacionController;
use App\Http\Controllers\PostulationController;
use App\Http\Controllers\ReclutadorController;
use App\Http\Controllers\RelacionController;
use App\Http\Controllers\SeleccionadorController;
use App\Http\Controllers\TermsAndConditionsController;
use App\Http\Controllers\TipoUsuarioController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\NotRegisterController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('notRegister.index');
});


Route::get('/aboutUs', [AboutUSController::class, 'mostrarAbout'])->name('aboutUs');

Route::get('/termsConditions', [TermsAndConditionsController::class, 'mostrarTermsConditions'])->name('termsConditions');

Route::get('/layouts', [HomeController::class, 'redirect'])->name('layouts');

Route::get('/postulation', [PostulationController::class, 'mostrar'])->name('postulation');

Route::get('/notRegister', [NotRegisterController::class, 'mostrarNotRegister'])->name('notRegister');


// Rutas Habilidad
Route::get('/habilidad', [HabilidadController::class, 'Habilidad'])->name('habilidad');
Route::get('/habilidad/create', [HabilidadController::class, 'Create'])->name('create.habilidad');
Route::post('/habilidad/store', [HabilidadController::class, 'Store'])->name('store.habilidad');
Route::get('/habilidad/edit/{habilidad}', [HabilidadController::class,'Edit'])->name('edit.habilidad');
Route::put('/habilidad/update/{habilidad}', [HabilidadController::class,'Update'])->name('update.habilidad');
Route::get('/habilidad/show/{habilidad}', [HabilidadController::class,'Show'])->name('show.habilidad');
Route::delete('/habilidad/destroy/{habilidad}', [HabilidadController::class,'Destroy'])->name('destroy.habilidad');

// Rutas Administrador
Route::resource('administrador', AdministradorController::class);
Route::get('/headerAdmin', [AdministradorController::class, 'header'])->name('headerAdmin');

// Rutas Candidato
Route::resource('candidato', CandidatoController::class);
Route::get('/headerCandidato', [CandidatoController::class, 'header'])->name('headerCandidato');


//Rutas Empresa
Route::get('/headerEmpresa', [EmpresaController::class, 'header'])->name('headerEmpresa');
Route::get('/empresa', [EmpresaController::class, 'Empresa'])->name('empresa');
Route::get('/empresa/create', [EmpresaController::class, 'Create'])->name('create.empresa')->middleware('auth');
Route::post('/empresa/store', [EmpresaController::class, 'Store'])->name('store.empresa');
Route::get('/empresa/edit/{empresa}', [EmpresaController::class,'Edit'])->name('edit.empresa');
Route::put('/empresa/update/{empresa}', [EmpresaController::class,'Update'])->name('update.empresa');
Route::get('/empresa/show/{empresa}', [EmpresaController::class,'Show'])->name('show.empresa');
Route::delete('/empresa/destroy/{empresa}', [EmpresaController::class,'Destroy'])->name('destroy.empresa');

//Rutas Denominacion
Route::get('/denominacion', [DenominacionController::class, 'Denominacion'])->name('denominacion');
Route::get('/denominacion/create', [DenominacionController::class, 'Create'])->name('create.denominacion')->middleware('auth');
Route::post('/denominacion/store', [DenominacionController::class, 'Store'])->name('store.denominacion');
Route::get('/denominacion/edit/{denominacion}', [DenominacionController::class,'Edit'])->name('edit.denominacion');
Route::put('/denominacion/update/{denominacion}', [DenominacionController::class,'Update'])->name('update.denominacion');
Route::get('/denominacion/show/{denominacion}', [DenominacionController::class,'Show'])->name('show.denominacion');
Route::delete('/denominacion/destroy/{denominacion}', [DenominacionController::class,'Destroy'])->name('destroy.denominacion');

//Rutas Funcion
Route::get('/funcion', [FuncionController::class, 'Funcion'])->name('funcion');
Route::get('/funcion/create', [FuncionController::class, 'Create'])->name('create.funcion')->middleware('auth');
Route::post('/funcion/store', [FuncionController::class, 'Store'])->name('store.funcion');
Route::get('/funcion/edit/{funcion}', [FuncionController::class,'Edit'])->name('edit.funcion');
Route::put('/funcion/update/{funcion}', [FuncionController::class,'Update'])->name('update.funcion');
Route::get('/funcion/show/{funcion}', [FuncionController::class,'Show'])->name('show.funcion');
Route::delete('/funcion/destroy/{funcion}', [FuncionController::class,'Destroy'])->name('destroy.funcion');

// Rutas Conocimiento
Route::get('/conocimiento', [ConocimientoController::class, 'Conocimiento'])->name('conocimiento');
Route::get('/conocimiento/create', [ConocimientoController::class, 'Create'])->name('create.conocimiento')->middleware('auth');
Route::post('/conocimiento/store', [ConocimientoController::class, 'Store'])->name('store.conocimiento');
Route::get('/conocimiento/edit/{conocimiento}', [ConocimientoController::class,'Edit'])->name('edit.conocimiento');
Route::put('/conocimiento/update/{conocimiento}', [ConocimientoController::class,'Update'])->name('update.conocimiento');
Route::get('/conocimiento/show/{conocimiento}', [ConocimientoController::class,'Show'])->name('show.conocimiento');
Route::delete('/conocimiento/destroy/{conocimiento}', [ConocimientoController::class,'Destroy'])->name('destroy.conocimiento');

// Rutas Hoja de Vida
Route::get('/hoja_vida', [HojaVidaController::class, 'Hoja_vida'])->name('hoja_vida');
Route::get('/hoja_vida/create', [HojaVidaController::class, 'Create'])->name('create.hoja_vida')->middleware('auth');
Route::post('/hoja_vida/store', [HojaVidaController::class, 'Store'])->name('store.hoja_vida');
Route::get('/hoja_vida/edit/{hoja_vida}', [HojaVidaController::class,'Edit'])->name('edit.hoja_vida');
Route::put('/hoja_vida/update/{hoja_vida}', [HojaVidaController::class,'Update'])->name('update.hoja_vida');
Route::get('/hoja_vida/show/{hoja_vida}', [HojaVidaController::class,'Show'])->name('show.hoja_vida');
Route::delete('/hoja_vida/destroy/{hoja_vida}', [HojaVidaController::class,'Destroy'])->name('destroy.hoja_vida');

// Rutas Ocupacion
Route::get('/ocupacion', [OcupacionController::class, 'Ocupacion'])->name('ocupacion');
Route::get('/ocupacion/create', [OcupacionController::class, 'Create'])->name('create.ocupacion')->middleware('auth');
Route::post('/ocupacion/store', [OcupacionController::class, 'Store'])->name('store.ocupacion');
Route::get('/ocupacion/edit/{ocupacion}', [OcupacionController::class,'Edit'])->name('edit.ocupacion');
Route::put('/ocupacion/update/{ocupacion}', [OcupacionController::class,'Update'])->name('update.ocupacion');
Route::get('/ocupacion/show/{ocupacion}', [OcupacionController::class,'Show'])->name('show.ocupacion');
Route::delete('/ocupacion/destroy/{ocupacion}', [OcupacionController::class,'Destroy'])->name('destroy.ocupacion');

// Rutas Cargo
Route::get('/cargo', [CargoController::class, 'Cargo'])->name('cargo');
Route::get('/cargo/create', [CargoController::class, 'Create'])->name('create.cargo')->middleware('auth');
Route::post('/cargo/store', [CargoController::class, 'Store'])->name('store.cargo');
Route::get('/cargo/edit/{cargo}', [CargoController::class,'Edit'])->name('edit.cargo');
Route::put('/cargo/update/{cargo}', [CargoController::class,'Update'])->name('update.cargo');
Route::get('/cargo/show/{cargo}', [CargoController::class,'Show'])->name('show.cargo');
Route::delete('/cargo/destroy/{cargo}', [CargoController::class,'Destroy'])->name('destroy.cargo');

// Rutas Reclutador
Route::get('/headerReclutador', [ReclutadorController::class, 'header'])->name('headerReclutador');
Route::get('/reclutador', [ReclutadorController::class, 'Reclutador'])->name('reclutador');
Route::get('/reclutador/create', [ReclutadorController::class, 'Create'])->name('create.reclutador')->middleware('auth');
Route::post('/reclutador/store', [ReclutadorController::class, 'Store'])->name('store.reclutador');
Route::get('/reclutador/edit/{reclutador}', [ReclutadorController::class,'Edit'])->name('edit.reclutador');
Route::put('/reclutador/update/{reclutador}', [ReclutadorController::class,'Update'])->name('update.reclutador');
Route::get('/reclutador/show/{reclutador}', [ReclutadorController::class,'Show'])->name('show.reclutador');
Route::delete('/reclutador/destroy/{reclutador}', [ReclutadorController::class,'Destroy'])->name('destroy.reclutador');

// Rutas Relacion
Route::get('/relacion', [RelacionController::class, 'Relacion'])->name('relacion');
Route::get('/relacion/create', [RelacionController::class, 'Create'])->name('create.relacion')->middleware('auth');
Route::post('/relacion/store', [RelacionController::class, 'Store'])->name('store.relacion');
Route::get('/relacion/edit/{relacion}', [RelacionController::class,'Edit'])->name('edit.relacion');
Route::put('/relacion/update/{relacion}', [RelacionController::class,'Update'])->name('update.relacion');
Route::get('/relacion/show/{relacion}', [RelacionController::class,'Show'])->name('show.relacion');
Route::delete('/relacion/destroy/{relacion}', [RelacionController::class,'Destroy'])->name('destroy.relacion');

// Rutas Seleccionador
Route::get('/headerSeleccionador', [SeleccionadorController::class, 'header'])->name('headerSeleccionador');
Route::get('/seleccionador', [SeleccionadorController::class, 'Seleccionador'])->name('seleccionador');
Route::get('/seleccionador/create', [SeleccionadorController::class, 'Create'])->name('create.seleccionador')->middleware('auth');;
Route::post('/seleccionador/store', [SeleccionadorController::class, 'Store'])->name('store.seleccionador');
Route::get('/seleccionador/edit/{seleccionador}', [SeleccionadorController::class,'Edit'])->name('edit.seleccionador');
Route::put('/seleccionador/update/{seleccionador}', [SeleccionadorController::class,'Update'])->name('update.seleccionador');
Route::get('/seleccionador/show/{seleccionador}', [SeleccionadorController::class,'Show'])->name('show.seleccionador');
Route::delete('/seleccionador/destroy/{seleccionador}', [SeleccionadorController::class,'Destroy'])->name('destroy.seleccionador');

// Rutas Estado 
Route::get('/estado', [EstadoController::class, 'Estado'])->name('estado');
Route::get('/estado/create', [EstadoController::class, 'Create'])->name('create.estado')->middleware('auth');
Route::post('/estado/store', [EstadoController::class, 'Store'])->name('store.estado');
Route::get('/estado/edit/{estado}', [EstadoController::class,'Edit'])->name('edit.estado');
Route::put('/estado/update/{estado}', [EstadoController::class,'Update'])->name('update.estado');
Route::get('/estado/show/{estado}', [EstadoController::class,'Show'])->name('show.estado');
Route::delete('/estado/destroy/{estado}', [EstadoController::class,'Destroy'])->name('destroy.estado');

// Rutas TipoUsuario
Route::get('/tipo_usuario', [TipoUsuarioController::class, 'Tipo_usuario'])->name('tipo_usuario');
Route::get('/tipo_usuario/create', [TipoUsuarioController::class, 'Create'])->name('create.tipo_usuario')->middleware('auth');
Route::post('/tipo_usuario/store', [TipoUsuarioController::class, 'Store'])->name('store.tipo_usuario');
Route::get('/tipo_usuario/edit/{tipo_usuario}', [TipoUsuarioController::class,'Edit'])->name('edit.tipo_usuario');
Route::put('/tipo_usuario/update/{tipo_usuario}', [TipoUsuarioController::class,'Update'])->name('update.tipo_usuario');
Route::get('/tipo_usuario/show/{tipo_usuario}', [TipoUsuarioController::class,'Show'])->name('show.tipo_usuario');
Route::delete('/tipo_usuario/destroy/{tipo_usuario}', [TipoUsuarioController::class,'Destroy'])->name('destroy.tipo_usuario');

// Rutas Oferta
Route::get('/oferta', [OfertaController::class, 'Oferta'])->name('oferta');
Route::get('/oferta/create', [OfertaController::class, 'Create'])->name('create.oferta')->middleware('auth');
Route::post('/oferta/store', [OfertaController::class, 'Store'])->name('store.oferta');
Route::get('/oferta/edit/{oferta}', [OfertaController::class,'Edit'])->name('edit.oferta');
Route::put('/oferta/update/{oferta}', [OfertaController::class,'Update'])->name('update.oferta');
Route::get('/oferta/show/{oferta}', [OfertaController::class,'Show'])->name('show.oferta');
Route::delete('/oferta/destroy/{oferta}', [OfertaController::class,'Destroy'])->name('destroy.oferta');

// Rutas Ponderaciones
Route::get('/ponderacion', [PonderacionController::class, 'Ponderacion'])->name('ponderacion');
Route::get('/ponderacion/create', [PonderacionController::class, 'Create'])->name('create.ponderacion')->middleware('auth');
Route::post('/ponderacion/store', [PonderacionController::class, 'Store'])->name('store.ponderacion');
Route::get('/ponderacion/edit/{ponderacion}', [PonderacionController::class,'Edit'])->name('edit.ponderacion');
Route::put('/ponderacion/update/{ponderacion}', [PonderacionController::class,'Update'])->name('update.ponderacion');
Route::get('/ponderacion/show/{ponderacion}', [PonderacionController::class,'Show'])->name('show.ponderacion');
Route::delete('/ponderacion/destroy/{ponderacion}', [PonderacionController::class,'Destroy'])->name('destroy.ponderacion');

// Rutas Instructor
Route::get('/instructor', [InstructorController::class, 'Instructor'])->name('instructor');
Route::get('/instructor/create', [InstructorController::class, 'Create'])->name('create.instructor')->middleware('auth');
Route::post('/instructor/store', [InstructorController::class, 'Store'])->name('store.instructor');
Route::get('/instructor/edit/{instructor}', [InstructorController::class, 'Edit'])->name('edit.instructor');
Route::put('/instructor/update/{instructor}', [InstructorController::class, 'Update'])->name('update.instructor');
Route::get('/instructor/show/{instructor}', [InstructorController::class, 'Show'])->name('show.instructor');
Route::delete('/instructor/destroy/{instructor}', [InstructorController::class, 'Destroy'])->name('destroy.instructor');


Route::get('auth/login', [LoginController::class, 'index'])->name('login');
Route::get('/logout', [LogoutController::class, 'store'])->name('auth.despedida');
Route::post('logout', [LogoutController::class, 'store'])->name('logout');
Route::post('login', [LoginController::class, 'store'])->name('login.auth');

Route::get('home', [HomeController::class, 'index'])->name('home.index');

Route::resource('usuario', UserController::class);
Route::get('register', [UserController::class, 'create'])->name('register');
Route::post('register', [UserController::class, 'store']);
