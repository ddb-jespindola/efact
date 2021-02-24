<x-header/>
<div id="ddbcontent" class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="row  d-flex justify-content-center">
                <div class="card border border-danger mt-2 pt-2">
                    <div class="row">
                        <p class="text-center"><strong>Acuse de recibo exitoso, a continuación podrá aceptar o rechazar el documento electrónico</strong></p>
                    </div>    
                </div>
                
                <div class="card border border-danger mt-4">
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

                    <div class="card-body">
                        <!-- Select -->
                        <div class="row">
                            <div class="col-md-2 text-center">
                                <label for=""><strong>Estado:</strong></label>
                            </div>
                            <div class="col-md-10 text-center">
                                <div class="input-group mb-3">
                                    <select class="custom-select w-100" id="statusFact">
                                        <option selected>Seleccione un registro</option>
                                        <option value="3">Documento electrónico aceptado</option>
                                        <option value="4">Documento electrónico rechazado</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn btn-danger mt-2 mb-4" onclick="actualizar()">Guardar</button>
                </div>

                <div class="card border border-danger mt-2">
                    <div class="card-body">
                        <p class="">De acuerdo a los términos del decreto 1154 del 20 de Agosto de 2020, si usted es obligado o voluntario para recibir Documentos electrónicamente, debe realizar la confirmación o rechazo de los mismos, de lo contrarío luego de tres días hábiles, se entenderán como aceptados tácitamente y podrá iniciarse un proceso de factoring electrónico.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="ddbsuccess" class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="row  d-flex justify-content-center">
                <div class="card bg-success text-light mt-2 p-2">
                    <div class="row">
                        <p class="text-center"><strong>Registro actualizado con exito</strong></p>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>

<div id="ddberror" class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card border border-danger">
                <h2 class="text-center">Ha ocurrido un error</h2>
            </div>
            <div class="card border border-danger mt-3 p-4">
                <h4 class="text-center">Comunícate con nosotros</h4>
                <div class="row mt-3 text-center">
                    <div class="col-md-12 d-block px-5">
                        <div>
                            <strong>Telefono: </strong>
                            <a href="tel:(1)7432597">(1) 743 25 97</a>
                        </div>
                        <div>
                            <strong>Movil: </strong>
                            <a href="tel:(+57)3007484272">(+57) 300 748 42 72</a>
                        </div>
                        <div>
                            <strong>Mail: </strong>
                            <a href="mailto:info@ddb.com.co">info@ddb.com.co</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function actualizar(){

        dat1 = '{{ $data->CLIENTE }}';
        dat2 = '{{ $data->EJERCICIO }}';
        dat3 = '{{ $data->SERIE }}';
        dat4 = '{{ $data->FACTURA }}';
        status = $( "#statusFact" ).val();


        if (status === '3' || status === '4') {
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: "/actualizar",
                type:"POST",
                data:{
                    dat1:dat1,
                    dat2:dat2,
                    dat3:dat3,
                    dat4:dat4,
                    status:status
                },
                success:function(response){
                    if (response == 'ok') {
                        $('#ddbcontent').fadeOut()
                        $('#ddbsuccess').fadeIn("slow")
                        setTimeout(() => {
                            location.reload()    
                        }, 1500);
                        
                    }else{
                        $('#ddbcontent').fadeOut()
                        $('#ddberror').fadeIn("slow")
                    }
                },
                error: function(response){
                    $('#ddbcontent').fadeOut()
                    $('#ddberror').fadeIn("slow")
                }
            });
        }else{
            alert('Debe seleccionar un estado')
        }
    }

</script>

<x-footer/>