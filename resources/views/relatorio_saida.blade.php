@extends('principal')
  @section('view')
  <div class="container-fluid font">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{url('/principal')}}">Painel de Controle</a>
          </li>
          <li class="breadcrumb-item active">Relatorio</li>
          <li class="breadcrumb-item active">Saidas</li>
        </ol>
      
      <div class="row">
          <div class="col-lg-12 col-md-12">
               <div class="col-lg-12 col-md-12">
                    <form action="{{url('/funcionario/form_funcionario')}}" method="post" >
                          <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                          <div class="form-group">
                            <label for="nome">Data inicial:</label>
                            <input type="date" class="form-control" id="nomeFunc" name="nomeFunc">
                          </div>
                          <div class="form-group">
                            <label for="nome">Data inicial:</label>
                            <input type="date" class="form-control" id="nomeFunc" name="nomeFunc">
                          </div>
                          <div class="form-group">
                            <label for="nome">Area:</label>
                            <select name="rua" class="form-control">
                              <option value="">Todas</option>
                              <option value="1">Quimica</option>
                              <option value="2">automação</option>
                           </select>
                          </div>
                          <button type="submit" class="btn btn-info" onclick="cadastrado()">Filtrar</button>
                    </form>
                </div>                  
            </div>
      </div><br>
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="col-lg-12">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>DATA INICIAL</th>
                          <th>DATA FINAL</th>
                          <th>ITENS</th>
                          <th>QUANTIDADE</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>01/10/2017</td>
                          <td>10/10/2017</td>
                          <td>21</td>
                          <td>250</td>
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
  </div>
  @endsection