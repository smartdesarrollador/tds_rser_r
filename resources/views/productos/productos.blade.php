@extends('layout.layout')

@section('content')

<div class="container-fluid r-aside">
@if (Session::has('message'))
          <div class="alert alert-success">{{ Session::get('message') }}</div>
  @endif
        @if(!$producto->isEmpty()) 
<div class="container mt-5">

	<div class="row">
		<div class="col-md-10 col-md-offset-1">

    <div class="card shadow mb-4">
    <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Listado de Productos</h6>
            </div>


      @if(!$producto->isEmpty())
      <div class="card-body">
      <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <tr>
                <th>Producto</th>
                <th>descripcion</th>
                <th>precio</th>
              
               
                <th>Editar</th>
                <th>Eliminar</th>

              </tr>
              @foreach ($producto as $post)
                  <tr>
                    <td >{{ $post->nombre }}</td>
                     <td >{{ $post->descripcion }}</td>
                      <td >${{ $post->precio }}</td>
                     
                      
                    <td width="60" align="center">
                      
                      <a class="btn btn-success btn-md" href="#">Edit</a>
                    </td>
                    <td width="60" align="center">
                      
                      @can("crear-notas")
                          <button type="submit" class="btn btn-danger btn-md">Delete</button>
                      @else
                            <h3>Usted no tiene permiso</h3>
                      @endcan
                      
                    </td>
                  </tr>
              @endforeach
          </table>
          </div>
          </div>
          <?php echo $producto->render(); ?>
          </div>

      @endif

		</div>
	</div>

  <div class="row">
  <div class="col-md-3 pull-right">
    
    <a class="btn btn-info btn-md pull-right" href="#">Crear</a>
       </div>
</div>
@endif
</div>
            </div>

@stop



























