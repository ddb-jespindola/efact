<section class="forms">
    <form  action="{{route('/search')}}" method ="GET">
        {{-- @csrf --}}
        <br>
        <div class="container card bg-transparent pt-3">
            <div class="row">
                <div class="container-fluid">
                    <div class="form-group row">
                        <label for="date" class="col-form-label col-sm-2">Desde Fecha Factura:</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control input-sm" id="fromDate" name="fromDate" />
                        </div>
                        <label for="date" class="col-form-label col-sm-2">Hasta Fecha Factura:</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control input-sm" id="toDate" name="toDate" />
                        </div>
                        
                    </div>
                    <div class="form-group row">
                        <label for="serie" class="col-form-label col-sm-2">Serie:</label>
                        <div class="col-sm-3">
                            <select class="custom-select" id="seriefactura" name="serie">
                                <option value="">Selecione una opción</option>  
                                <option value="FE">FE</option>
                                <option value="NCD">NDC</option>
                                <option value="NCC">NCC</option>
                            </select>
                        </div>
                        <label for="factura" class="col-form-label col-sm-2">Numero Factura:</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control input-sm" id="ddbfactura" name="factura" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="serie" class="col-form-label col-sm-2">Estado factura:</label>
                        <div class="col-sm-3">
                            <select class="custom-select" id="seriefactura" name="estado">
                                <option value="">Selecione una opción</option>
                                <option value="0">Sin acusar</option>
                                <option value="1">Acusado</option>
                                <option value="2">Acusado tacitamente</option>
                                <option value="3">Aceptada</option>
                                <option value="4">Rechazada</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary" name="search" title="Search">Buscar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </form>

</section>
