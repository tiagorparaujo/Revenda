@extends('layout')


@section('corpo')
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Cadastrar Vendas</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form class="form-horizontal" action="{{route ('clientes_cadastrar')}}"  method="post">
                    {{ csrf_field() }}
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Nome</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead ui-datepicker"  name="cliente[nome]" id="nome">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="typeahead">Telefone</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" name="cliente[telefone]" id="telefone">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="typeahead">Email</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" name="cliente[email]" id="email">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="typeahead">Documento</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" name="cliente[documento]" id="documento">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="typeahead">Estado</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" name="cliente[estado]" id="estado">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="typeahead">Cidade</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" name="cliente[cidade]" id="cidade">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="typeahead">Bairro</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" name="cliente[bairro]" id="bairro">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="typeahead">Rua</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" name="cliente[rua]" id="rua">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="typeahead">Numero</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" name="cliente[numero]" id="numero">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="typeahead">Complemento</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" name="cliente[complemento]" id="complemento">
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
