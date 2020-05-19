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
			<form class="form1 p-b-15 p-t-20" action="{{url('/home')}}" method="GET">
				<div>
	              	<label style="padding: 5px;"> <img src="imagen/banda.png" width="70%"> </label>
	            </div>
	            <div style="padding-bottom: 20px;">	
					<h3><strong>
						
						{{$mensaje}}

					</strong></h3>
				</div>
				<div class="container-login100-form-btn m-b-20 m-t-10">
					<button type="submit" class="login100-form-btn"> Ver votos </button>
				</div>
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
