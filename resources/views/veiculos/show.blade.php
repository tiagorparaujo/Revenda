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
                        <th>Modelo</th>
                        <th>Ano</th>
                        <th>Combustivel</th>
                        <th>Kilometragem</th>
                        <th>Cor</th>
                        <th>Valor</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Gol</td>
                        <td class="center">20/03/2017</td>
                        <td class="center">Gasolina</td>
                        <td class="center">14.000</td>
                        <td class="center">Azul</td>
                        <td class="center">30000</td>
                        <td class="center">
                            <span class="label label-success">Active</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i>
                            </a>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div><!--/span-->

    </div><!--/row-->
@endsection
