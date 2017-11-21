@extends('principal')
  @section('view')
  <div class="container-fluid font">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{url('/principal')}}">Painel de Controle</a>
          </li>
          <li class="breadcrumb-item active">Registro</li>
          <li class="breadcrumb-item active">Rua</li>
          <li class="breadcrumb-item active">Listagem</li>
          <li class="breadcrumb-item active">Editar</li>
        </ol>
      
      <div class="row" style="margin-bottom: 50px;">
          <div class="col-lg-12 col-md-12">
                <div class="alert alert-success" id="alert">
                     Resgistro cadastrado com sucesso.
                     <div class="pull-right">
                         <a href="#" id="sair" onclick="fechar()"><img src="{{url('/img/x.png')}}" class="img-responsive" width="20"/></a>
                     </div>
                </div>
                <div class="alert alert-danger" id="alert1">
                     Falha na inserção tente novamente ou solicite o suporte técnico.
                     <div class="pull-right">
                         <a href="#" id="sair1" onclick="fechar()"><img src="{{url('/img/x.png')}}" class="img-responsive" width="20"/></a>
                     </div>                
                </div>
            <div class="col-lg-12 col-md-12">
              <form action="{{url('/rua/rua-config/editar-rua/update')}}/{{$rua->id}}" method="post" >
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="form-group">
                  <label for="nome">Rua:</label>
                  <input type="text" class="form-control" id="rua" name="rua" value="{{$rua->nome}}">
                </div>
                <button type="submit" class="btn btn-success" onclick="cadastrado()">Salvar Alterações</button>
              </form>
            </div>
          </div>
      </div>
      
      <a href="{{url('/rua/rua-config')}}" class="btn btn-warning btn-sm"><i class="fa fa-arrow-circle-o-left"></i> Voltar</a>
  </div>
  @endsection