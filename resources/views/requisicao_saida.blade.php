@extends('principal')
  @section('view')
  <div class="container-fluid font">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{url('/principal')}}">Painel de Controle</a>
          </li>
          <li class="breadcrumb-item active">Requisição</li>
          <li class="breadcrumb-item active">Saida</li>
        </ol>
      
      <div class="row">
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
              <form action="{{url('/funcionario/form_funcionario')}}" method="post" >
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="form-group">
                  <label for="nome">Nome item:</label>
                  <input type="text" class="form-control" id="nomeFunc" name="nomeFunc" placeholder="Primeiras letras do item">
                </div>
                <div class="form-group">
                  <label for="nome">Nome do Usuário:</label>
                  <input type="email" class="form-control" id="nomeFunc" name="nomeFunc" placeholder="Primeiras letras do Usuário">
                </div>
                <div class="form-group">
                  <label for="nome">Quantidade:</label>
                  <input type="text" class="form-control" id="nomeFunc" name="nomeFunc" placeholder="Ex: 10">
                </div>
                <div class="form-group">
                  <label for="nome">Unidade de Medida:</label>
                  <select name="rua" class="form-control">
                      <option value="">--- Selecione ---</option>
                      <option value="0">Unidade</option>
                      <option value="1">Caixa</option>
                      <option value="2">Kg</option>
                      <option value="3">Litros</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="nome">Tipo de Saida:</label>
                  <select name="rua" class="form-control">
                      <option value="">--- Selecione ---</option>
                      <option value="0">Retornavel</option>
                      <option value="1">Ida Unica</option>
                      <option value="1">Unidade</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-success" onclick="cadastrado()">Registrar Saida</button>
              </form>
            </div>
          </div>
      </div><br>
        <a href="{{url('/saida/saida-registros')}}" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i> Visualizar saidas pendentes</a>
  </div>
  @endsection