@extends('principal')
  @section('view')
  <div class="container-fluid font">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{url('/principal')}}">Painel de Controle</a>
          </li>
          <li class="breadcrumb-item active">Registro</li>
          <li class="breadcrumb-item active">Usuário</li>
        </ol>
      
      <div class="row">
          <div class="col-lg-12 col-md-12">
                @if(session()->has('msg'))
                @if(session()->has('msg') == 1)
                <div class="alert alert-success" id="alert">
                     Registro cadastrado com sucesso.
                     <div class="pull-right">
                         <a href="#" id="sair" onclick="fechar()"><img src="{{url('/img/x.png')}}" class="img-responsive" width="20"/></a>
                     </div>
                </div>
                @else
                <div class="alert alert-danger" id="alert1">
                     Falha na inserção tente novamente ou solicite o suporte técnico.
                     <div class="pull-right">
                         <a href="#" id="sair1" onclick="fechar()"><img src="{{url('/img/x.png')}}" class="img-responsive" width="20"/></a>
                     </div>                
                </div>
                @endif
              @endif
            <div class="col-lg-12 col-md-12">
              <form action="{{ route('register') }}" method="post" >
                        {{ csrf_field() }}
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                  <label for="nome">Nome:</label>
                  <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required autofocus>
                  @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label for="nome">E-mail:</label>
                  <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                  @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <label for="nome">Senha:</label>
                  <input type="password" class="form-control" id="password" name="password" required>
                  @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                </div>
                <div class="form-group">
                  <label for="nome">Confirmar Senha:</label>
                  <input type="password" class="form-control" id="password-confirm" name="password-confirm" required>
                </div>
                
                <!--<div class="form-group">
                  <label for="nome">Tipo de usuário:</label>
                  <select name="rua" class="form-control">
                      <option value="">--- Selecione ---</option>
                      <option value="0">Coordenador(a)</option>
                      <option value="1">Professor(a)</option>
                      <option value="2">Funcionario(a)</option>
                      <option value="3">Administrador(a)</option>
                  </select>
                </div>-->
                <button type="submit" class="btn btn-success">Cadastrar</button>
              </form>
            </div>
          </div>
      </div>
      <div class="row full">
            <div class="col-lg-12 col-md-12">
                <div class="col-lg-12 col-md-12 full-recentes"> 
                    <span>Registros Recentemente</span>
                </div>
            </div>
      </div>
      <div class="row">
          <div class="col-lg-12">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>NOME</th>
                          <th>EMAIL</th>
                          <th>TELEFONE</th>
                          <th>TIPO</th>
                          <th>SITUAÇÃO</th>
                          <th>CADASTRO</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>João Lucas</td>
                          <td>Joao@teste.com.br</td>
                          <td>75 9 8114-0000</td>
                          <td>Professor(a)</td>
                          <td>Habilitado</td>
                          <td>08/10/2017</td>
                        </tr>
                        <tr>
                          <td>Ana</td>
                          <td>ana@teste.com.br</td>
                          <td>75 9 9114-0000</td>
                          <td>Professor(a)</td>
                          <td>Habilitado</td>
                          <td>08/10/2017</td>
                        </tr>
                        <tr>
                          <td>Lincoln</td>
                          <td>Lincoln@teste.com.br</td>
                          <td>75 9 8850-0000</td>
                          <td>Professor(a)</td>
                          <td>Desabilitado</td>
                          <td>08/10/2017</td>
                        </tr>
                        <tr>
                          <td>Rodrigo</td>
                          <td>Rodrigo@teste.com.br</td>
                          <td>75 9 0000-0000</td>
                          <td>Coordenador(a)</td>
                          <td>Desabilitado</td>
                          <td>08/10/2017</td>
                        </tr>
                        <tr>
                          <td>Lavinia</td>
                          <td>Lavinia@teste.com.br</td>
                          <td>75 9 0505-0000</td>
                          <td>Funcionario(a)</td>
                          <td>Habilitado</td>
                          <td>08/10/2017</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card-footer small text-muted">Nova Atualização {{date('Y')}}</div>
              </div>
          </div>
      </div>
      <a href="{{url('/usuarios/usuarios-config')}}" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i> Visualizar todos registros</a>
  </div>
  @endsection