@extends('principal')
  @section('view')
  <div class="container-fluid font">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{url('/principal')}}">Painel de Controle</a>
          </li>
          <li class="breadcrumb-item active">Registro</li>
          <li class="breadcrumb-item active">Local</li>
          <li class="breadcrumb-item active">Listagem</li>
          <li class="breadcrumb-item active">Editar</li>
        </ol>
      
      <div class="row" style="margin-bottom: 50px;">
          <div class="col-lg-12 col-md-12">
            <div class="col-lg-12 col-md-12">
              <form action="{{url('/local/local-config/editar-local/update')}}/{{$local->id}}" method="post" >
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="form-group">
                  <label for="nome">Rua:</label>
                  <input type="text" class="form-control" id="rua" name="rua" value="{{$local->street}}">
                </div>
                <div class="form-group">
                  <label for="nome">Estande:</label>
                  <input type="text" class="form-control" id="est" name="est" value="{{$local->shelf}}">
                </div>
                <div class="form-group">
                  <label for="nome">Prateleira:</label>
                  <input type="text" class="form-control" id="pra" name="pra" value="{{$local->floor}}">
                </div>
                <div class="form-group">
                  <label for="nome">Repositório:</label>
                  <input type="text" class="form-control" id="rep" name="rep" value="{{$local->repository}}">
                </div>
                <button type="submit" class="btn btn-success" onclick="cadastrado()">Salvar Alterações</button>
              </form>
            </div>
          </div>
      </div>
      <a href="{{url('/local/local-config')}}" class="btn btn-warning btn-sm"><i class="fa fa-arrow-circle-o-left"></i> Voltar</a>
  </div>
  @endsection