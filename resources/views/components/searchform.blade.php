<section class="forms">
    <form  action="{{route('/search')}}" method ="GET">
        {{-- @csrf --}}
        <br>
        <div class="container">
            <div class="row">
                <div class="container-fluid">
                    <div class="form-group row">
                        <label for="date" class="col-form-label col-sm-2">Desde Fecha Factura</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control input-sm" id="fromDate" name="fromDate" required/>
                        </div>
                        <label for="date" class="col-form-label col-sm-2">Hasta Fecha Factura</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control input-sm" id="toDate" name="toDate" required/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date" class="col-form-label col-sm-2">Other</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control input-sm" id="other" name="other"placeholder="Search other..." />
                        </div>
                        <div class="col-sm-2">
                            <button type="submit" class="btn" name="search" title="Search"><img src="https://img.icons8.com/android/24/000000/search.png"/></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </form>

</section>
