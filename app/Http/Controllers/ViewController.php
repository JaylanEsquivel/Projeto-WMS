<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Produto;

class ViewController extends Controller {
    
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function exibirprincipal() {
        return view('dashboard');
    }
    // rua com banco de dados teste
    public function view_registra_rua() {
        //$produto = Produto::paginate(5); , ['produto' => $produto]
        return view('rua');
    }
    public function view_config_rua() {
       // $produto = Produto::paginate(10);, ['produto' => $produto]
        return view('config_rua');
    }
    public function rua_form() {
        $rua = \Request::input('rua');
        
        $novo = new Produto;
        $novo->nome = $rua;
        $novo->save();
        
        return redirect('/rua');
    }
    public function view_editar_rua($id) {
        //$rua = Produto::find($id);, ['rua' => $rua]
        return view('editar_rua');
    }
    
    public function rua_form_editar($id) {
        /*$rua = Produto::find($id);
        $nome = \Request::input('rua');
        
        $rua->nome = $nome;
        $rua->save();
        
        return redirect('/rua/rua-config');*/
    }
    // rua com banco de dados teste
    public function view_registra_bloco() {
        return view('bloco');
    }
    public function view_config_bloco() {
        return view('config_bloco');
    }
    public function view_registra_repositorio() {
        return view('repositorio');
    }
    public function view_config_repositorio() {
        return view('config_repositorio');
    }
    public function view_registra_item() {
        return view('item');
    }
    public function view_config_item() {
        return view('config_item');
    }
    public function view_registra_area(){
        return view ('area');
    }
    public function view_config_area() {
        return view('config_area');
    }
    public function view_registra_usuarios(){
        return view ('usuarios');
    }
    public function view_config_usuarios() {
        return view('config_usuarios');
    }
    public function view_config_conta() {
        return view('config_conta');
    }
    public function view_config_conta_editar() {
        return view('config_conta_editar');
    }
    
    // CONTROLE DE RELATORIOS
    public function view_relatorio_entrada() {
        return view('relatorio_entrada');
    }
    public function view_relatorio_saida() {
        return view('relatorio_saida');
    }
    public function view_relatorio_item() {
        return view('relatorio_item');
    }
        // CONTROLE DE RELATORIOS
    // entradas e saidas
    
    public function view_entrada() {
        return view('requisicao_entrada');
    }
    public function view_saida() {
        return view('requisicao_saida');
    }
    public function view_saida_registros() {
        return view('requisicao_saida_registros');
    }
    
    // entradas e saidas
    // inventario
    
    public function view_inventario_geral() {
        return view('inventario_geral');
    }
    public function view_inventario_area() {
        return view('inventario_area');
    }
    
    // inventario

    // testes de view
     public function view_teste() {
        return view('layouts/admin');
    }
    public function view_teste_() {
        return view('layouts/coordenador');
    }
    public function view_teste__() {
        return view('layouts/coordenador_area');
    }
    public function view_teste___() {
        return view('layouts/comun');
    }
    // testes de view
}
