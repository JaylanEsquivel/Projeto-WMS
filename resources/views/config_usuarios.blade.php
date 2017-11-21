@extends('principal')
  @section('view')
  <div class="container-fluid font">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Painel de Controle</a>
          </li>
          <li class="breadcrumb-item active">Registro</li>
          <li class="breadcrumb-item active">Usuário</li>
          <li class="breadcrumb-item active">Listagem</li>
        </ol>
      <div class="row full">
            <div class="col-lg-12 col-md-12">
                <div class="col-lg-12 col-md-12 full-recentes"> 
                    <span>Usuários Registrados</span>
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
                          <th>AÇÕES</th>
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
                          <td><a href="" class="btn btn-info btn-sm" title="EDITAR"><i class="fa fa-pencil"></i></a>&nbsp;<a href="" class="btn btn-danger btn-sm" title="INATIVA"><i class="fa fa-trash-o"></i></a></td>
                        </tr>
                        <tr>
                          <td>Ana</td>
                          <td>ana@teste.com.br</td>
                          <td>75 9 9114-0000</td>
                          <td>Professor(a)</td>
                          <td>Habilitado</td>
                          <td>08/10/2017</td>
                          <td><a href="" class="btn btn-info btn-sm" title="EDITAR"><i class="fa fa-pencil"></i></a>&nbsp;<a href="" class="btn btn-danger btn-sm" title="INATIVA"><i class="fa fa-trash-o"></i></a></td>
                        </tr>
                        <tr>
                          <td>Lincoln</td>
                          <td>Lincoln@teste.com.br</td>
                          <td>75 9 8850-0000</td>
                          <td>Professor(a)</td>
                          <td>Desabilitado</td>
                          <td>08/10/2017</td>
                          <td><a href="" class="btn btn-info btn-sm" title="EDITAR"><i class="fa fa-pencil"></i></a>&nbsp;<a href="" class="btn btn-danger btn-sm" title="INATIVA"><i class="fa fa-trash-o"></i></a></td>
                        </tr>
                        <tr>
                          <td>Rodrigo</td>
                          <td>Rodrigo@teste.com.br</td>
                          <td>75 9 0000-0000</td>
                          <td>Coordenador(a)</td>
                          <td>Desabilitado</td>
                          <td>08/10/2017</td>
                          <td><a href="" class="btn btn-info btn-sm" title="EDITAR"><i class="fa fa-pencil"></i></a>&nbsp;<a href="" class="btn btn-danger btn-sm" title="INATIVA"><i class="fa fa-trash-o"></i></a></td>
                        </tr>
                        <tr>
                          <td>Lavinia</td>
                          <td>Lavinia@teste.com.br</td>
                          <td>75 9 0505-0000</td>
                          <td>Funcionario(a)</td>
                          <td>Habilitado</td>
                          <td>08/10/2017</td>
                          <td><a href="" class="btn btn-info btn-sm" title="EDITAR"><i class="fa fa-pencil"></i></a>&nbsp;<a href="" class="btn btn-danger btn-sm" title="INATIVA"><i class="fa fa-trash-o"></i></a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card-footer small text-muted">Nova Atualização {{date('Y')}}</div>
              </div>
          </div>
      </div>
      <a href="{{url('/usuarios')}}" class="btn btn-warning btn-sm"><i class="fa fa-arrow-circle-o-left"></i> Voltar</a>
  </div>
  @endsection