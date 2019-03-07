<?php

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
    return view('pagina_inicial');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/cadastro', function () {
    return view('cadastro_funcionario');
});


Route::get('/cadastrodasala',function(){
	return view('cadastro_de_sala');
});

Route::get('/alocarfuncionario', function(){
	return view('alocarfuncionario');
});

Route::get('/exibir', function(){
	return view('exibirfuncionarios');
});

Route::get('/departamento', function(){
	return view('departamento');
});









