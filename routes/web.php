<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\StatesController;
use App\Http\Controllers\UserController;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Route;

/**
 *  ==== ROTAS ====
 * -- Rotas de Utilidades Gerais
 * /ping  -- Testa a conectividade
 * 
 * -- Rotas de Autenticação - via TOKEN
 * /user/signin  -- Login
 * /user/signup  -- Registro do usuário
 * /user/me  -- Informações do usuário logado
 * 
 * -- Rotas de Configurações Gerais
 * /states  -- Lista todos os estados
 * /categories  -- Lista as todas as categorias
 * 
 * 
 * -- Rotas de Anúncios
 * /ad/list  -- Lista todos os anúnicios
 * /ad/:id  -- Dados de um único anúncio
 * /ad/add  -- Adiciona um novo anúncio
 * /ad/:id (PUT)  -- Altera um anúncio
 * /ad/:id (DELETE)  -- Delete um anúncio
 * /ad/:id/:image  -- Deleta a imagem de um anúncio  
 * 
 */

/**
 * ==== PADRÕES ====
 * -- Mensagens de Erro
 * { error: "Mensagem de Erro }
 *
 * -- Mensagem de Sucesso
 * { error: '' }
 */

Route::get('/ping', function (): JsonResponse {
    return response()->json(['pong' => true]);
});


Route::post('/user/signup', [UserController::class, 'signup']);
Route::post('/user/signin', [UserController::class, 'signin']);
Route::get('/user/me', [UserController::class, 'me'])->middleware('auth:sanctum');


Route::get('/states', [StatesController::class, 'index']);
Route::get('/categories', [CategoriesController::class, 'index']);
