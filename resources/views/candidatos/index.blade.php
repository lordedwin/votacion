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
		<div class="col-md-1">
		</div>
	  	<div class="col-md-10">
		    <div class="card">
			    <div class="card-header">
			        <a class="btn btn-primary btn-round text-white pull-right" href="{{url('/candidato/create')}}">Agregar Usuario</a>
			        <h4 class="card-title">Candidatos</h4>
			        <div class="col-8 mt-2">
			        	@include('alerts.success')
			        </div>
			    </div>
		      	<div class="card-body">
			        <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
				        <thead>
				            <tr align="center">
					            <th>Imagen</th>
					            <th>Nombre</th>
					            <th>Apellido</th>
					            <th class="disabled-sorting text-right"></th>
				            </tr>
				        </thead>
				        <tbody>
				            @foreach($candidatos as $candidato)
				            <tr align="center">
				                <td>
					                <span class="avatar avatar-sm rounded-circle">
					                    <img src="storage/uploads/{{$candidato->imagen}}" alt="" style="max-width: 80px; border-radius: 50%">
					                </span>
				                </td>
				                <td style="text-transform: capitalize;">{{$candidato->nombre}}</td>
				                <td style="text-transform: capitalize;">{{$candidato->apellido}}</td>
				                <td class="text-center">
					                <a type="button" href="{{url('/candidato/'.$candidato->id.'/edit')}}" rel="tooltip" class="btn btn-info btn-icon btn-sm " title="Editar Usuario">
					                <i class="now-ui-icons ui-1_settings-gear-63"></i>
					                </a>
					                <form method="post" action="{{url('/candidato/'.$candidato->id)}}" class ="formEliminar" title="Eliminar Usuario" style="display: inline;">
						      		@csrf
						      		{{method_field('DELETE')}}
							      		<button type="submit" class="btn btn-danger btn-icon btn-sm now-ui-icons ui-1_simple-remove eliminarCandidato"></button>
							      	</form>
				                </td>
				            </tr>
				            @endforeach
				        </tbody>
			        </table>
		        {{ $candidatos->links() }}
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
  <script src="{{ asset('assets') }}/js/script.js" type="text/javascript"></script>
@endpush