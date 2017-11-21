@extends('principal')
  @section('view')
  <div class="container-fluid font">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Painel de Controle</a>
          </li>
          <li class="breadcrumb-item active">Inventário</li>
          <li class="breadcrumb-item active">Geral</li>
        </ol>
      <div class="row full">
            <div class="col-lg-12 col-md-12">
                <div class="col-lg-12 col-md-12 full-recentes"> 
                    <span>Todos Registros</span>
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
                          <th>DESCRIÇÃO DE MATERIAL</th>
                          <th>ÁREA</th>
                          <th>QUANTIDADE</th>
                          <th>LOCAL</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Alicate r1</td>
                          <td>Segurança do trabalho</td>
                          <td>20</td>
                          <td>1 2 1 1</td>
                        </tr>
                        <tr>
                          <td>Alicate r1</td>
                          <td>Segurança do trabalho</td>
                          <td>20</td>
                          <td>1 2 1 1</td>
                        </tr>
                        <tr>
                          <td>Alicate r1</td>
                          <td>Segurança do trabalho</td>
                          <td>20</td>
                          <td>1 2 1 1</td>
                        </tr>
                        <tr>
                          <td>Alicate r1</td>
                          <td>Segurança do trabalho</td>
                          <td>20</td>
                          <td>1 2 1 1</td>
                        </tr>
                        <tr>
                          <td>Alicate r1</td>
                          <td>Segurança do trabalho</td>
                          <td>20</td>
                          <td>1 2 1 1</td>
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