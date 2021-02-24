<x-header/>

<div id="ddbcontent" class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="row  d-flex justify-content-center">
                <div class="card mt-2 p-2">
                    <div class="row">
                        <p class="text-center"><strong>Documento registrado, este documento ya se encuentra registrado en nuestra Base de Datos</strong></p>
                    </div>    
                </div>
                
                <div class="card mt-4">
                    <div class="card-body text-right">
                        <!-- Cliente -->
                        <div class="row d-flex justify-content-start">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <span><strong>Cliente:</strong></span>
                                    </div>
                                    <div class="col-md-8 text-left">
                                        <span class="text-left">{{ $cliente->CLIENTE_NOMBRE }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4  text-center">
                                        <label for=""><strong>Identificación:</strong></label>
                                    </div>
                                    <div class="col-md-8">
                                        <label for="">{{ $cliente->NIT }}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Factura - Fecha -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <label for=""><strong>Factura:</strong></label>
                                    </div>
                                    <div class="col-md-8">
                                        <label for="">{{ $data->SERIE }} {{ $data->FACTURA }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <label for=""><strong>Fecha:</strong></label>
                                    </div>
                                    <div class="col-md-8">
                                        <label for="">{{ $data->FECHA }}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($data->STATUS == '3')
                        <x-mensajeaceptado/>
                    @elseif ($data->STATUS == '4')
                        <x-mensajerechazado/>
                    @elseif ($data->STATUS == '2')
                        <x-mensajeaceptadotacito/>
                    @endif

                </div>

                <div class="card mt-2">
                    <div class="card-body">
                        <p class="">De acuerdo a los términos del decreto 1154 del 20 de Agosto de 2020, si usted es obligado o voluntario para recibir Documentos electrónicamente, debe realizar la confirmación o rechazo de los mismos, de lo contrarío luego de tres días hábiles, se entenderán como aceptados tácitamente y podrá iniciarse un proceso de factoring electrónico.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<x-footer/>