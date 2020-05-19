@extends('layouts.app', [
    'namePage' => 'Votacion',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'votacion',
    'backgroundImage' => asset('now') . "/img/bg14.jpg",
])

@section('content')
<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100">
			<form action="{{url('voto/')}}" method="POST" class="login100-form p-b-15 p-t-20">
				@csrf
				<div class="container">
					<div class="row">
						@foreach($datos as $dato) 
						<div class="col-sm-1 col-md-4">
							<div style="text-align: center;">
								<div>
								<label><img src="storage/uploads/{{$dato->imagen}}" width="60%"> </label>
								</div>
								<div style="text-align: center; padding: 10px;">
									<label class="btn-form"> 
									<input type="radio" name="hokage" value="{{$dato->id}}" required>
									<h6 style=" margin-bottom: 0.1rem;">{{$dato->nombre}}</h6></label>
								</div>
							</div>  
						</div>			
						@endforeach
					</div>
				</div>

				<div class="container-login100-form-btn m-b-10 m-t-10">
					 <button type="submit" class="login100-form-btn">Votar</button>
				</div>

				<div class="m-l-50 m-t-20" style="opacity: 0.5">{{ $datos->links() }}</div>
			</form>    
		</div>
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
