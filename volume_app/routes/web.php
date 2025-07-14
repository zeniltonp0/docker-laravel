<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-db', function () {
    try {
        DB::connection()->getPdo();
        return 'Conexão com o banco de dados ok';
    } catch (\Exception $e) {
        return 'Erro na conexão com o banco de dados: ' . $e->getMessage();
    }
});
