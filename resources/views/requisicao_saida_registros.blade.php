@extends('principal')
  @section('view')
  <div class="container-fluid font">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Painel de Controle</a>
          </li>
          <li class="breadcrumb-item active">Requisição</li>
          <li class="breadcrumb-item active">Saida</li>
          <li class="breadcrumb-item active">Listagem</li>
        </ol>
      <div class="row full">
            <div class="col-lg-12 col-md-12">
                <div class="col-lg-12 col-md-12 full-recentes"> 
                    <span>Itens Alocados</span>
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
                          <th>ITEM</th>
                          <th>USUARIO</th>
                          <th>QUANTIDADE</th>
                          <th>DATA DE RETIRADA</th>
                          <th>DATA DE RETIRADA</th>
                          <th>AÇÕES</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Alicate r1</td>
                          <td>Robson</td>
                          <td>5 caixa</td>
                          <td>20/10/2017</td>
                          <td>22/10/2017</td>
                          <td><a href="" class="btn btn-dark btn-sm" title="Devolver"><i class="fa fa-leaf"></i></a></td>
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