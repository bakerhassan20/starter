

@extends('layouts.master')

@section('content')


<br><br><br>



<div class="p-0 bg1" style="height: 100vh;width: calc(100% - 320px)">
			<div class="p-3">
				<p class="float-left cl font-weight-bold mb-0" style="font-size: 130%">Checkout</p>
				<a href="../Home" style="text-decoration: none;color:black;">
					<div id="back-button" class="btn bg-white float-right">Back</div>
				</a>
				<div style="clear: both;"></div>
			</div>


<div style="height: calc(100vh - 120px);overflow-y: auto;">
				<form action="{{route('update_password')}}" method="post">
				{{ csrf_field() }}
					<div class="py-2 px-4 cl bg2" style="width: 500px;margin: auto">
						<p class="text-center" style="font-size: 130%">Change Password</p>
						<label>Password Old</label>
						<input id="passwordOld" type="text"name='passwordOld' class="form-control"  style="background: none;color: white">
						<label class="mt-2">New Password</label>
						<input id="passwordNew" type="text"name='passwordNew' class="form-control"  style="background: none;color: white">
						<label class="mt-2">Repassword</label>
						<input id="passwordRe" type="text"name='passwordRe' class="form-control"  style="background: none;color: white">
						<div class="text-center mt-3 mb-3">
				        	<button type="submit" id="submit-button" class="btn bg-white text-dark">Change Password</button>
						</div>	
						@if ($errors->any())
								<div class="alert" id="text-status" class="text-center"
								style='width:380px;color: #ff0018'>
									<ul>
										@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif
							
							@if (session()->has('error'))
							<div class="alert" id="text-status" class="text-center"
								style='width:380px;color: #ff0018'>
								
									<ul>
											<li>{{ session()->get('error') }}</li>
									</ul>
								</div>
							@endif
							@if (session()->has('success'))
							<div class="alert" id="text-status" class="text-center"
								style='width:380px;color: #00ff14'>
								
									<ul>
											<li>{{ session()->get('success') }}</li>
									</ul>
								</div>
							@endif
					</div>
				</form>



	

			</div>
		</div>
	</div>
</div>


</div>
</div>
</div>
</div>

@endsection



