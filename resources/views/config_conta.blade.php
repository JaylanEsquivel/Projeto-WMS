@extends('principal')
  @section('view')
  <div class="container-fluid font">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Painel de Controle</a>
          </li>
          <li class="breadcrumb-item active">Configurações</li>
          <li class="breadcrumb-item active">Conta</li>
        </ol>
      <div class="row full">
            <div class="col-lg-12 col-md-12">
                <div class="col-lg-12 col-md-12 full-recentes"> 
                    <span>Dados da Conta</span>
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
                          <th>SENHA</th>
                          <th>TIPO</th>
                          <th>AÇÕES</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>João Lucas</td>
                          <td>Joao@teste.com.br</td>
                          <td>75 9 8114-0000</td>
                          <td>xxxxxxxxxxxxx</td>
                          <td>Professor(a)</td>
                          <td><a href="{{url('/config-conta/editar-conta')}}" class="btn btn-info btn-sm" title="EDITAR"><i class="fa fa-pencil"></i></a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card-footer small text-muted">Nova Atualização {{date('Y')}}</div>
              </div>
          </div>
      </div>
  </div>
  @endsection