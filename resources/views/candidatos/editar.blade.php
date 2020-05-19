@extends('layouts.app', [
    'namePage' => 'Candidatos',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'candidatos',
    'backgroundImage' => asset('now') . "/img/bg14.jpg",
])

@section('content')
<div class="panel-header">
</div>

<div class="content">
	<div class="row">
		<div class="col-md-3">
		</div>	
		<div class="col-md-6">
		    <div class="card">
			    <div class="card-header">
			        <h4 class="card-title">Editar candidato</h4>
			    </div>
			    <div class="card-body">
			        @if ($errors->any())
					<div class="alert alert-danger">
				    	<ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
					@endif
						<div class="container">
							<form action="{{url('candidato/'.$candidato->id)}}" method="post" enctype="multipart/form-data">
								@csrf
								{{method_field('PATCH')}}
								<div class="form-group">
									<label for="nombre">Nombre</label>
									<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese Nombre" value="{{$candidato->nombre}}">
								</div>
								<div class="form-group">
							    	<label for="apellido">Apellido</label>
							    	<input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese Apellido" value="{{$candidato->apellido}}">
								</div>
								<div class="form-grupo">
									<label for="imagen">Seleccionar imagen</label>
									<input type="file" class="form-control-file" id="imagen" name="imagen">
								</div>
								<button type="submit" class="btn btn-success">Agregar</button>
								<a type="button" class="btn btn-danger" href="{{url('/candidato')}}">Cancelar</a>
							</form>
						</div>
					</div>
			    </div>
		      <!-- end content-->
		    </div>
		    <!--  end card  -->
	  	</div>
	  	<!-- end col-md-12 -->
	</div>
</div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
@endpush
