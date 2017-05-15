@extends('layout')


@section('corpo')
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Cadastrar Veiculos</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form method="POST" action="{{route('veiculos_cadastrar')}}" class="form-horizontal">
                    {{ csrf_field() }}
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Modelo</label>
                            <div class="controls">
                                <input type="text" name="veiculo[modelo]" id="modelo" class="span6 typeahead"  data-provide="typeahead" data-items="4" data-source='["gol", "fusca", "camaro", "Voyage", "Celta", "FordKa", "Jetra", "Astra", "Borra"]'>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Ano</label>
                            <div class="controls">
                                <input type="text"  name="veiculo[ano]" id="ano" class="input-xlarge ">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="date01">Combustivel</label>
                            <div class="controls">
                                <input type="text"  name="veiculo[combustivel]" id="combustivel" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Kilometragem</label>
                            <div class="controls">
                                <input type="text" name="veiculo[kilometragem]" id="kilometragem"  class="input-xlarge " >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Cor</label>
                            <div class="controls">
                                <input type="text" name="veiculo[cor]" id="cor" class="input-xlarge " >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Valor</label>
                            <div class="controls">
                                <input type="text" name="veiculo[valor]" id="combustivel" class="input-xlarge "  >
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Salvar Mudanças</button>
                            <button type="reset" class="btn">Cancelar</button>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div><!--/span-->

    </div><!--/row-->
@endsection