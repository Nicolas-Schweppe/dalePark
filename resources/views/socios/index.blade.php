@extends('menu')
@section('pagina')
    
  
/<div class="row">
    
</div>
<div class="container">
<table  id="example" class="table table-light" style="opacity: 80%;">
    <thead class="thead-light">
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Dni</th>
            <th>Correo</th>
            <th>Telefono</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($socios as $socio)
            
        
        <tr>
            <td>{{$socio->id}}</td>
            <td>{{$socio->Nombre}}</td>
            <td>{{$socio->Apellido}}</td>
            <td>{{$socio->Dni}}</td>
            <td>{{$socio->Correo}}</td>
            <td>{{$socio->Telefono}}</td>
        </tr>
        @endforeach
    </tbody>
    
</table>
</div>
@endsection  