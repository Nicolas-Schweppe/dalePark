@extends('menu')
@section('pagina')
    
<br>
<div class="row" style="opacity: 90%;">
    <div class="col-md-5 mx-auto">
        <div class="card">
            <div class="card-header" style="text-align: center;">
               <h4 class="es">Editar Socio</h4> 
            </div>
            <div class="card-body">
                <form action="{{url('/socios/'.$socio->id)}}" method="POST" >
                @csrf    
                {{ method_field('PATCH') }}
                    <div class="form-group">
                        <input type="text" class="form-control" name="nombre" value="{{ $socio->Nombre}}"  required></br>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="apellido" value="{{ $socio->Apellido}}"placeholder="Apellido"  required></br>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="dni" value="{{ $socio->Dni}}"placeholder="Dni" required></br>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="correo" value="{{ $socio->Correo}}"placeholder="Correo electronico" required></br>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="telefono" value="{{ $socio->Telefono}}"placeholder="Numero de Telefono" required>
                    </div><br>
                    <button class="btn btn-primary btn-block " >
                        Guardar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection