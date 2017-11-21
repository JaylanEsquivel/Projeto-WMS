@extends('principal')
  @section('view')
  <div class="container-fluid font">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{url('/principal')}}">Painel de Controle</a>
          </li>
          <li class="breadcrumb-item active">Registro</li>
          <li class="breadcrumb-item active">Item</li>
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
              <form action="{{url('/item/form_item')}}" method="post" >
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="form-group">
                  <label for="nome">Nome do Material:</label>
                  <input type="text" class="form-control" id="item" name="item" placeholder="Ex: 1">
                </div>                
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
                          <th>NOME DO MATERIAL</th>
                        </tr>
                      </thead>
                      <tbody>
                       @forelse($item as $i)
                        <tr>
                          <td>{{$i->name}}</td>
                        </tr>
                       @empty
                       <tr><td>Nenhum registro cadastrado.</td></tr>
                       @endforelse
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card-footer small text-muted">Nova Atualização {{date('Y')}}</div>
              </div>
          </div>
      </div>
      <a href="{{url('/item/item-config')}}" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i> Visualizar todos registros</a>
  </div>
  @endsection
  @section('js')
  
  @endsection
