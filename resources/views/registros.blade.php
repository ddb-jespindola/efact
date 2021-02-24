<x-header/>
<div class="bg-gray container mt-5">
    <table class="table table-bordered border-primary">
        <thead>
        <tr>
            <th scope="col">Cliente</th>
            <th scope="col">Ejercicio</th>
            <th scope="col">Serie</th>
            <th scope="col">Factura</th>
            <th scope="col">Estado factura</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($facturas as $factura)
                <tr>
                    <td>{{$factura->CLIENTE}}</th>
                    <td>{{$factura->EJERCICIO}}</td>
                    <td>{{$factura->SERIE}}</td>
                    <td>{{$factura->FACTURA}}</td>
                    
                        @if ($factura->STATUS == '0')  
                        <td class="">Sin acusar</td>
                        @endif
                        @if ($factura->STATUS == '1')  
                        <td class="">Acusado</td>
                        @endif
                        @if ($factura->STATUS == '2')  
                        <td class="text-success">Aceptada tacitamente</td>
                        @endif
                        @if ($factura->STATUS == '3')  
                        <td class="text-success">Aceptada</td>
                        @endif
                        @if ($factura->STATUS == '4')  
                        <td class="text-danger">Rechazada</td>
                        @endif
                    
                </tr>
            @endforeach  
        </tbody>

    </table>
  </div>