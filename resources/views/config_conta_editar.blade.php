@extends('principal')
  @section('view')
  <div class="container-fluid font">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{url('/principal')}}">Painel de Controle</a>
          </li>
          <li class="breadcrumb-item active">Editar</li>
          <li class="breadcrumb-item active">Conta</li>
        </ol>
      
      <div class="row">
          <div class="col-lg-12 col-md-12">
                <div class="alert alert-success">
                     Resgistro Alterado com sucesso.
                </div>
                <div class="alert alert-danger">
                     Falha na Altereção tente novamente ou solicite o suporte técnico.
                </div>
            <div class="col-lg-12 col-md-12">
              <form action="{{url('/funcionario/form_funcionario')}}" method="post" >
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="form-group">
                  <label for="nome">Nome:</label>
                  <input type="text" class="form-control" id="nomeFunc" name="nomeFunc" placeholder="Ex: Joao Carlos">
                </div>
                <div class="form-group">
                  <label for="nome">E-mail:</label>
                  <input type="email" class="form-control" id="nomeFunc" name="nomeFunc" placeholder="Ex: Senai@fieb.com.br">
                </div>
                <div class="form-group">
                  <label for="nome">Telefone:</label>
                  <input type="text" class="form-control" id="nomeFunc" name="nomeFunc" placeholder="Ex: 7590000-0000">
                </div>
                <div class="form-group">
                  <label for="nome">Nova Senha:</label>
                  <input type="password" class="form-control" id="nomeFunc" name="nomeFunc" placeholder="Ex: xxxxxx">
                </div>
                <button type="submit" class="btn btn-success" onclick="cadastrado()">Salvar Alterações</button>
              </form>
            </div>
          </div>
      </div><br>
      <a href="{{url('/config-conta')}}" class="btn btn-warning btn-sm"><i class="fa fa-arrow-circle-o-left"></i> Voltar</a>
  </div>
  @endsection