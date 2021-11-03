@extends('menu')
@section('pagina')
    

    
<br>
<div class="row" style="opacity: 90%;">
    <div class="col-md-5 mx-auto">
        <div class="card">
            <div class="card-header" style="text-align: center;">
               <h4 class="es">Nuevo Socio</h4> 
            </div>
            <div class="card-body">
                <form action="{{url('/socios')}}" method="POST" >
                @csrf    
                    <div class="form-group">
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre" required></br>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="apellido" placeholder="Apellido"  required></br>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="dni" placeholder="Dni" required></br>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="correo" placeholder="Correo electronico" required></br>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="telefono" placeholder="Numero de Telefono" required>
                    </div><br>
                    <button class="btn btn-primary btn-block " >
                        Registrar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection