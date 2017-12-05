<?php

Route::get('/original', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('/auth/login');
});
Route::get('/home', 'ViewController@exibirprincipal')->name('Index');

//Route::get('/', 'ViewController@exibirprincipal');
Route::get('/principal', 'ViewController@exibirprincipal');

// get rotas de local
Route::get('/local', 'LocationsController@local_registrar')->name('Registro-de-Local');
Route::get('/local/local-config', 'LocationsController@local_listar')->name('Listar-de-Local');
Route::get('/local/local-config/editar-local/{id}', 'LocationsController@local_editar')->name('Editar-de-Local');
Route::get('/local/local-config/delete-local/{id}', 'LocationsController@local_deletar')->name('Deletar-de-Local');

// get rotas de local


/*Route::get('/rua', 'ViewController@view_registra_rua')->name('Registro-de-Rua');
Route::get('/rua/rua-config', 'ViewController@view_config_rua')->name('Config-de-rua');
Route::get('/rua/rua-config/editar-rua/{id}', 'ViewController@view_editar_rua')->name('Editar-rua');


Route::get('/bloco', 'ViewController@view_registra_bloco')->name('Registro-de-bloco');
Route::get('/bloco/bloco-config', 'ViewController@view_config_bloco')->name('Config-de-bloco');

Route::get('/repositorio', 'ViewController@view_registra_repositorio')->name('Registro-de-repositorio');
Route::get('/repositorio/repositorio-config', 'ViewController@view_config_repositorio')->name('Config-de-repositorio');
*/
Route::get('/item', 'ItemController@item_registrar')->name('Registro-de-item');
Route::get('/item/item-config', 'ItemController@item_listar')->name('Config-de-item');
Route::post('/item/form_item', 'ItemController@cadastro_item');
Route::get('/item/item-config/delete-item/{id}', 'ItemController@item_deletar')->name('Deletar-de-item');
Route::get('/item/item-config/editar-item/{id}', 'ItemController@item_editar')->name('Editar-de-Area');
Route::post('/item/item-config/editar-item/update/{id}', 'ItemController@alterar_item');



Route::get('/usuarios', 'ViewController@view_registra_usuarios')->name('Registro-de-usuarios');
Route::get('/usuarios/usuarios-config', 'ViewController@view_config_usuarios')->name('Config-de-usuarios');

Route::get('/config-conta', 'ViewController@view_config_conta')->name('Config-de-Conta');
Route::get('/config-conta/editar-conta', 'ViewController@view_config_conta_editar')->name('Config-de-Conta-editar');
//post

Route::post('/local/form_Local', 'LocationsController@cadastro_local');
Route::post('/local/local-config/editar-local/update/{id}', 'LocationsController@alterar_local');


// ROTAS DE ENTRADA E SAIDAS DE PRODUTOS/ITEM 
// ROTAS DE ÁREAS 

Route::get('/area','AreaController@area_registrar')->name('Registro-de-Area');
Route::post('/area/form_area', 'AreaController@cadastro_area');
Route::post('/area/area-config/editar-area/update/{id}', 'AreaController@alterar_area');

Route::get('/area/area-config', 'AreaController@area_listar')->name('Config-de-area');
Route::get('/area/area-config/editar-area/{id}', 'AreaController@area_editar')->name('Editar-de-Area');
Route::get('/area/area-config/delete-area/{id}', 'AreaController@area_deletar')->name('Deletar-de-Area');


// ROTAS DE ÁREAS
// ROTAS DE entrada/saida

Route::get('/entrada','ViewController@view_entrada')->name('Entrada-item');
Route::get('/saida','ViewController@view_saida')->name('Saida-item');
Route::get('/saida/saida-registros','ViewController@view_saida_registros')->name('Saida-registro');
// ROTAS DE entrada/saida
// ROTAS DE INVENTARIO

Route::get('/inventario-geral','ViewController@view_inventario_geral')->name('Inventario-geral');
Route::get('/inventario-area','ViewController@view_inventario_area')->name('Inventario-area');

// ROTAS DE INVENTARIO

// ROTAS DE RELÁTORIOS 

Route::get('/relatorio-entrada','ViewController@view_relatorio_entrada')->name('Relatorio_entrada');
Route::get('/relatorio-saida','ViewController@view_relatorio_saida')->name('Relatorio_saida');
Route::get('/relatorio-item','ViewController@view_relatorio_item')->name('Relatorio_item');

// ROTAS DE RELÁTORIOS 

// ROTAS DE TESTE DE PERFIL DE USUARIO

Route::get('/adm','ViewController@view_teste')->name('Visualizar teste de Menu ADM');
Route::get('/cor','ViewController@view_teste_')->name('Visualizar teste de Menu ADM');
Route::get('/cora','ViewController@view_teste__')->name('Visualizar teste de Menu ADM');
Route::get('/comun','ViewController@view_teste___')->name('Visualizar teste de Menu ADM');

Auth::routes();