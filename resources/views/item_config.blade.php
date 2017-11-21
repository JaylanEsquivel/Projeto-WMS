@extends('principal')
  @section('view')
  <div class="container-fluid font">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Painel de Controle</a>
          </li>
          <li class="breadcrumb-item active">Registro</li>
          <li class="breadcrumb-item active">Item</li>
          <li class="breadcrumb-item active">Listagem</li>
        </ol>
      <div class="row full">
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
                <div class="col-lg-12 col-md-12 full-recentes"> 
                    <span>Itens Registradas</span>
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
                          <th>AÇÕES</th>
                        </tr>
                      </thead>
                      <tbody>
                       @forelse($item as $i)
                        <tr>
                          <td>{{$i->name}}</td>
                          <td><a href="{{url('/item/item-config/editar-item')}}/{{$i->id}}" class="btn btn-info btn-sm" title="EDITAR"><i class="fa fa-pencil"></i></a>&nbsp;<a href="{{url('/item/item-config/delete-item')}}/{{$i->id}}" class="btn btn-danger btn-sm" title="INATIVA"><i class="fa fa-trash-o"></i></a></td>
                        </tr>
                        @empty
                       <tr><td>Nenhum registro cadastrado.</td></tr>
                       @endforelse
                      </tbody>
                    </table>
                      {{ $item->links() }}
                  </div>
                </div>
                <div class="card-footer small text-muted">Nova Atualização {{date('Y')}}</div>
              </div>
          </div>
      </div>
      <a href="{{url('/item')}}" class="btn btn-warning btn-sm"><i class="fa fa-arrow-circle-o-left"></i> Voltar</a>
  </div>
  @endsection