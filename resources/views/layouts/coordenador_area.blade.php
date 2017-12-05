<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sistema de Almoxarifado</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{url('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="{{url('vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{url('css/sb-admin.css')}}" rel="stylesheet">
    <link href="{{ url('css/style.css') }}" rel="stylesheet">
    <script src="{{url("js/respostas.js")}}"></script>


  </head>

  <body class="fixed-nav" id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href="{{url('/principal')}}">Controle de Almoxarifado</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav navbar-sidenav" style="background:#0070c0 !important; overflow-y:hidden !important; ">
              <div class="admin">
                  <span class="nav-link-text text">{{ Auth::user()->name }}</span><br>
                  <!--<span class="nav-link-text text-two">Administrador</span>-->
              </div>
          <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Dashboard">
            <a class="nav-link" href="{{url('/principal')}}" style="background:#0070c0 !important;">
              <i class="fa fa-fw fa-dashboard"></i>
              <span class="nav-link-text">
                Painel de Controle</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents1">
              <i class="fa fa-puzzle-piece fw"></i>
              <span class="nav-link-text">
                Inventário</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseComponents1" style="background:#0070c0 !important;">
              <li>
                  <a href="{{url('/inventario-area')}}" style=" color: rgba(255,255,255,.5) !important;">Área</a>
              </li>
            </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents3">
              <i class="fa fa-cog fw"></i>
              <span class="nav-link-text">
                Configurações</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseComponents3" style="background:#0070c0 !important;">
              <li>
                <a href="{{url('/config-conta')}}" style=" color: rgba(255,255,255,.5) !important;">Configurações da Conta</a>
              </li>
            </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti">
              <i class="fa fa-bar-chart-o fw"></i>
              <span class="nav-link-text">
                Relatórios</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseMulti" style="background:#0070c0 !important ">
              <li>
                <a style=" color: rgba(255,255,255,.5) !important;" href="{{url('/relatorio-entrada')}}">Entradas</a>
              </li>
              <li>
                <a style=" color: rgba(255,255,255,.5) !important;" href="{{url('/relatorio-saida')}}">Saidas</a>
              </li>
            </ul>
          </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
          <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
              <i class="fa fa-fw fa-angle-left"></i>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="alertsDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-fw fa-bell"></i>
              <span class="d-lg-none">Alertas
                <span class="badge badge-pill badge-warning">6 Novo</span>
              </span>
              <span class="new-indicator text-warning d-none d-lg-block">
                <i class="fa fa-fw fa-circle"></i>
                <span class="number">6</span>
              </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="alertsDropdown">
              <h6 class="dropdown-header">Novos Alertas:</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <span class="text-success">
                  <strong>
                    <i class="fa fa-long-arrow-up"></i>
                    Status de Estoque</strong>
                </span>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">Nova atualizaçao no estoque de produtos de limpeza.</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <span class="text-danger">
                  <strong>
                    <i class="fa fa-long-arrow-down"></i>
                    Status de Estoque</strong>
                </span>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">O estoque de papel A4 está C para Secretaria.</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <span class="text-success">
                  <strong>
                    <i class="fa fa-long-arrow-up"></i>
                    Status de Estoque</strong>
                </span>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">Nova atualizaçao no estoque de capacetes para area de Construção civil.</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item small" href="#">
                Visualizar todos os alertas
              </a>
            </div>
          </li>
          <li class="nav-item">
            <form class="form-inline my-2 my-lg-0 mr-lg-2">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Consulta Rapida">
                <span class="input-group-btn">
                  <button class="btn btn-primary" type="button">
                    <i class="fa fa-search"></i>
                  </button>
                </span>
              </div>
            </form>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
              <i class="fa fa-fw fa-sign-out"></i>
              Logout</a>
          </li>          
        </ul>
      </div>
    </nav>

    <div class="content-wrapper py-3">
       @section('view')       
       
       @show
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © SENAI {{date('Y')}}</small>
        </div>
      </div>
    </footer>
    </div>
    <!-- /.content-wrapper -->

    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Logout Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Deseja realmente sair?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Selecione "Sair" abaixo se você estiver pronto para terminar sua sessão atual.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <!--<a class="btn btn-primary" href="{{ url('logout') }}">Sair</a>-->
                    <a class="btn btn-danger" href="{{ url('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a>
                    <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('vendor/popper/popper.min.js')}}"></script>
    <script src="{{url('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{url('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{url('vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{url('vendor/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{url('vendor/datatables/dataTables.bootstrap4.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{url('js/sb-admin.min.js')}}"></script>
    
     @section('js')       
       
     @show
     
<script>
     $(document).ready(function fechar() {
        $('#sair').click(function(){
            $('#alert').css("display","none");
        })
    });
</script>
<script>
     $(document).ready(function fechar() {
        $('#sair1').click(function(){
            $('#alert1').css("display","none");
        })
    });
</script>

  </body>

</html>
