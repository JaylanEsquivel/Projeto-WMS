<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller{
    
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function item_registrar() {
        $item = Item::paginate(5);
        return view('item', ['item' => $item]);
    }
    public function cadastro_item() {
        $item = \Request::input('item');
        
        $novo = new Item;
        $novo->name = $item;
        $novo->save();
        
        $msg = 1;
        
        return redirect('/item')->with('msg', $msg);
    }
    public function alterar_item($id) {
        $item = Item::find($id);
        
        $nom = \Request::input('item');
        
        $item->name = $nom;
        $item->save();
        
        $msg = 1;
        
        return redirect('/item/item-config')->with('msg', $msg);        
    }
    public function item_listar() {
        $item = Item::paginate(15);
        return view('item_config', ['item' => $item]);
    }
    public function item_editar($id) {
        $item = Item::find($id);
        return view('item_editar', ['item' => $item]);
    }
    public function item_deletar($id) {
        $item = Item::find($id);
        $item->delete();
        return redirect('/item/item-config');
    }
    
}
