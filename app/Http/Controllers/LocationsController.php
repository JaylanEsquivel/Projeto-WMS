<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationsController extends Controller{
    
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function local_registrar() {
        $local = Location::paginate(5);
        return view('local', ['local' => $local]);
    }
    public function cadastro_local() {
        $rua = \Request::input('rua');
        $estande = \Request::input('est');
        $prateleira = \Request::input('pra');
        $repositorio = \Request::input('rep');
        
        $novo = new Location;
        $novo->street = $rua;
        $novo->shelf = $estande;
        $novo->floor = $prateleira;
        $novo->repository = $repositorio;
        $novo->save();
        
        $msg = 1;
        
        return redirect('/local')->with('msg', $msg);
    }
    public function alterar_local($id) {
        $local = Location::find($id);
        
        $rua = \Request::input('rua');
        $estande = \Request::input('est');
        $prateleira = \Request::input('pra');
        $repositorio = \Request::input('rep');
        
        $local->street = $rua;
        $local->shelf = $estande;
        $local->floor = $prateleira;
        $local->repository = $repositorio;
        $local->save();
        
        $msg = 1;
        
        return redirect('/local/local-config')->with('msg', $msg);        
    }
    public function local_listar() {
        $local = Location::paginate(15);
        return view('local_config', ['local' => $local]);
    }
    public function local_editar($id) {
        $local = Location::find($id);
        return view('local_editar', ['local' => $local]);
    }
    public function local_deletar($id) {
        $local = Location::find($id);
        $local->delete();
        return redirect('/local/local-config');
    }
    
}
