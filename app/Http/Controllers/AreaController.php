<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller{
    
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function area_registrar() {
        $area = Area::paginate(5);
        return view('area', ['area' => $area]);
    }
    public function cadastro_area() {
        $area = \Request::input('area');
        $sigla = \Request::input('sigla');
        
        $novo = new Area;
        $novo->name = $area;
        $novo->sigla = $sigla;
        $novo->save();
        
        $msg = 1;
        
        return redirect('/area')->with('msg', $msg);
    }
    public function alterar_area($id) {
        $area = Area::find($id);
        
        $area1 = \Request::input('area');
        $sigla = \Request::input('sigla');
        
        $area->name = $area1;
        $area->sigla = $sigla;
        $area->save();
        
        $msg = 1;
        
        return redirect('/area/area-config')->with('msg', $msg);        
    }
    public function area_listar() {
        $area = Area::paginate(15);
        return view('area_config', ['area' => $area]);
    }
    public function area_editar($id) {
        $area = Area::find($id);
        return view('area_editar', ['area' => $area]);
    }
    public function area_deletar($id) {
        $area = Area::find($id);
        $area->delete();
        return redirect('/area/area-config');
    }
}
