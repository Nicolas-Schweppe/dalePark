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
            <th>Pagar</th>
            <th>Editar</th>
            <th>Borrar</th>
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
            <td><button type ="submit" name ="editar"  onclick=""><img alt="" src="img/moneda.png" width="30" height="20"></button></td>
            <td><button  type ="button" id ="borrar"  onclick=""><img alt="" src="img/editar.png" width="30" height="20"></button></td>
            <td>
            <form action="{{url('/socios/'.$socio->id)}}" method="POST" >
             @csrf   
             {{method_field('DELETE')}}
            <button  type="submit"   onclick="return confirm('¿Desea borrarlo?')" /> <img src="img/borrar.png" width="30" height="30"></button>
            
        </form> 
    </td>
        </tr>
        @endforeach
    </tbody>
    
</table>
</div>
@endsection  