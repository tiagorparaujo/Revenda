@extends('layout')


@section('corpo')
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th>Documento</th>
                        <th>Estado</th>
                        <th>Cidade</th>
                        <th>Bairro</th>
                        <th>Rua</th>
                        <th>Numero</th>
                        <th>Complemento</th>


                    </tr>
                    </thead>
                    <tbody>

                    @foreach($clientes as $cliente)
                        <tr>
                            <td class="center">{{$cliente->nome}}</td>
                            <td class="center">{{$cliente->telefone}}</td>
                            <td class="center">{{$cliente->email}}</td>
                            <td class="center">{{$cliente->documento}}</td>
                            <td class="center">{{$cliente->estado}}</td>
                            <td class="center">{{$cliente->cidade}}</td>
                            <td class="center">{{$cliente->bairro}}</td>
                            <td class="center">{{$cliente->rua}}</td>
                            <td class="center">{{$cliente->numero}}</td>
                            <td class="center">{{$cliente->complemento}}</td>
                            <td class="center">
                                <span class="label label-success">Active</span>
                            </td>
                            <td class="center">
                                <a class="btn btn-info" href="{{route('clientes_update',['id'=>$cliente->id])}}">
                                    <i class="halflings-icon white edit"></i>
                                </a>
                                <a class="btn btn-danger" href="{{route('clientes_delete',['id'=> $cliente->id])}}">
                                    <i class="halflings-icon white trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach


                    </tbody>
                </table>
            </div>
        </div><!--/span-->

    </div><!--/row-->
@endsection