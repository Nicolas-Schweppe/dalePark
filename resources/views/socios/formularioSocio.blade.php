<div class="row" style="opacity: 93%;">
    <div class="col-md-4 mx-auto">
        <div class="card">
            <div class="card-header" style="text-align: center;">
                Nuevo Socio
            </div>
            <div class="card-body">
                <form action="{{url('/socios')}}" method="POST" >
                @csrf    
                    <div class="form-group">
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="apellido" placeholder="Apellido"  required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="dni" placeholder="Dni" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="correo" placeholder="Correo electronico" required>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="telefono" placeholder="Numero de Telefono" required>
                    </div>
                    <button class="btn btn-primary btn-block">
                        Registrar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>