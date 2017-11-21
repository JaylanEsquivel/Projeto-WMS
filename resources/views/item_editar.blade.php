@extends('principal')
  @section('view')
  <div class="container-fluid font">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{url('/principal')}}">Painel de Controle</a>
          </li>
          <li class="breadcrumb-item active">Registro</li>
          <li class="breadcrumb-item active">Item</li>
          <li class="breadcrumb-item active">Listagem</li>
          <li class="breadcrumb-item active">Editar</li>
        </ol>
      
      <div class="row" style="margin-bottom: 50px;">
          <div class="col-lg-12 col-md-12">
            <div class="col-lg-12 col-md-12">
              <form action="{{url('/item/item-config/editar-item/update')}}/{{$item->id}}" method="post" >
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="form-group">
                  <label for="nome">Nome da Área:</label>
                  <input type="text" class="form-control" id="item" name="item" value="{{$item->name}}">
                </div>
                <button type="submit" class="btn btn-success">Salvar Alterações</button>
              </form>
            </div>
          </div>
      </div>
      <a href="{{url('/item/item-config')}}" class="btn btn-warning btn-sm"><i class="fa fa-arrow-circle-o-left"></i> Voltar</a>
  </div>
  @endsection