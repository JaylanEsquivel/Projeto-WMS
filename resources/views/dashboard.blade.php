@extends('principal')
  @section('view')
<div class="container-fluid">

        <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Painel de Controle</a>
          </li>
          <li class="breadcrumb-item active">Principal</li>
        </ol>

        <!-- Icon Cards -->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-bar-chart-o"></i>
                </div>
                <div class="mr-5">
                  26 Relatórios!
                </div>
              </div>
              <a href="#" class="card-footer text-white clearfix small z-1">
                <span class="float-left">Mais detalhes</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-list"></i>
                </div>
                <div class="mr-5">
                  11 Agendamento
                </div>
              </div>
              <a href="#" class="card-footer text-white clearfix small z-1">
                <span class="float-left">Mais detalhes</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-plus"></i>
                </div>
                <div class="mr-5">
                  123 Entradas!
                </div>
              </div>
              <a href="#" class="card-footer text-white clearfix small z-1">
                <span class="float-left">Mais detalhes</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-minus"></i>
                </div>
                <div class="mr-5">
                  13 Saidas!
                </div>
              </div>
              <a href="#" class="card-footer text-white clearfix small z-1">
                <span class="float-left">Mais detalhes</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>

        <!-- Area Chart Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-area-chart"></i>
            Entradas de itens
          </div>
          <div class="card-body">
            <canvas id="myAreaChart" width="100%" height="30"></canvas>
          </div>
          <div class="card-footer small text-muted">
            Atualização 11:59 PM
          </div>
        </div>

        <div class="row">

          <div class="col-lg-8">

            <!-- Example Bar Chart Card -->
            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-bar-chart"></i>
                Saida de itens
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-8 my-auto">
                    <canvas id="myBarChart" width="100" height="50"></canvas>
                  </div>
                </div>
              </div>
              <div class="card-footer small text-muted">
                Atualizaçao 11:59 PM
              </div>
            </div>

            <!-- Card Columns Example Social Feed -->
            
            <hr class="mt-2">
          </div>

          <div class="col-lg-4">
            <!-- Example Pie Chart Card -->
            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-pie-chart"></i>
                Kabam Geral
              </div>
              <div class="card-body">
                <canvas id="myPieChart" width="100%" height="100"></canvas>
              </div>
              <div class="card-footer small text-muted">
                Atualização 11:59 PM
              </div>
            </div>
       </div>

        <!-- Example Tables Card -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-table"></i>
            Saidas em aberto.
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nome</th>
                    <th>Àrea</th>
                    <th>Tipo</th>
                    <th>Data de saida</th>
                    <th>Data de Devolução</th>
                    <th>Item</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Nome</th>
                    <th>Àrea</th>
                    <th>Tipo</th>
                    <th>Data de saida</th>
                    <th>Data de Devolução</th>
                    <th>Item</th>
                  </tr>
                </tfoot>
                <tbody>
                  <tr>
                    <td>Jorge</td>
                    <td>Manutenção</td>
                    <td>Docente</td>
                    <td>10/10/2017</td>
                    <td>10/10/2017</td>
                    <td>Alicate de Pressão</td>
                  </tr>
                  <tr>
                    <td>Rosana</td>
                    <td>Quimica</td>
                    <td>Docente</td>
                    <td>09/10/2017</td>
                    <td>10/10/2017</td>
                    <td>Acetona P.A</td>
                  </tr>
                 
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">
            Atualizaçao 11:59 PM
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

    </div>
@endsection
