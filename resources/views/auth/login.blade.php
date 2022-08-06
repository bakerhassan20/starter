<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    <script
    src="https://code.jquery.com/jquery-3.5.1.js"
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
    <script type="text/javascript" src="./public/js/Home.js" ></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title></title>
</head>
<style type="text/css">
 
    .dot-pending{
        color: #f8ca30;
    }
    .dot-danger{
        color: #f8728a;
    }
    .dot-success{
        color: #0bcb90;
    }
    *{
        font-family: 'Arvo', serif;
    }
</style>
<body>
<style type="text/css">
	.bg1{
			background: #121421;
		}
		.bg2{
			background: #1e202c;
		}
		.bg3{
			background: #292b37;
		}
		.cl{
			color: #ffffff;
		}</style> 

<div class="container-fluid bg2" style="height: 100vh;padding: 100px">
	<div class="row mt-1">
		<div class="col-sm-12 col-md-8 pl-4">
			<p class="text-white pl-3" style="font-size: 2rem;font-weight: bold;">Restaurant Management System</p>
			<p class="text-white pl-3" style="font-size: 1.5rem;font-weight: bold;">Build the function of a Restaurant Management System</p>
			<div class="icon ml-3 float-left " style="width: 50px;height: 50px;"><img src="{{URL::asset('assets/img/icons/1.png')}}" width="70%"></div>
			<div class="text ml-3 " style="width: 80%;height: 50px;padding: 0.05rem;">
				<p class="text-white" style="font-size: 1.3rem">Account Admin Login - Change Pass - Logout </p>
			</div>
			<div class="icon ml-3 float-left  " style="width: 50px;height: 50px;"><img src="{{URL::asset('assets/img/icons/1.png')}}" width="70%"></div>
			<div class="text ml-3 " style="width: 80%;height: 50px;padding: 0.05rem;">
				<p class="text-white" style="font-size: 1.3rem">CRUD product, table</p>
			</div>
			<div class="icon ml-3 float-left " style="width: 50px;height: 50px;"><img src="{{URL::asset('assets/img/icons/1.png')}}" width="70%"></div>
			<div class="text ml-3 " style="width: 80%;height: 50px;padding: 0.05rem;">
				<p class="text-white" style="font-size: 1.3rem">Calculate the amount</p>
			</div>
			<div class="icon ml-3 float-left " style="width: 50px;height: 50px;"><img src="{{URL::asset('assets/img/icons/1.png')}}" width="70%"></div>
			<div class="text ml-3 " style="width: 80%;height: 50px;padding: 0.05rem;">
				<p class="text-white" style="font-size: 1.3rem">Search Product </p>
			</div>
			<div class="icon ml-3 float-left " style="width: 50px;height: 50px;"><img src="{{URL::asset('assets/img/icons/1.png')}}" width="70%"></div>
			<div class="text ml-3 " style="width: 80%;height: 50px;padding: 0.05rem;">
				<p class="text-white" style="font-size: 1.3rem">Manage System</p>
			</div>
			<div class="icon ml-3 float-left " style="width: 50px;height: 50px;"><img src="{{URL::asset('assets/img/icons/1.png')}}" width="70%"></div>
			<div class="text ml-3 " style="width: 80%;height: 50px;padding: 0.05rem;">
				<p class="text-white" style="font-size: 1.3rem">Analytics Payment</p>
			</div>
			<div class="icon ml-3 float-left " style="width: 50px;height: 50px;"><img src="{{URL::asset('assets/img/icons/1.png')}}" width="70%"></div>
			<div class="text ml-3 " style="width: 80%;height: 50px;padding: 0.05rem;">
				<p class="text-white" style="font-size: 1.3rem">Print Bill</p>
			</div>

		</div>
		<div class="col-sm-12 col-md-4 rounded shadow-sm bg3">
			<p class="cl mt-4 ml-3" style="font-weight: bold;font-size: 1.3rem;">SIGNIN ACCOUNT</p>
			<form method="POST" action="{{ route('login') }}">
			@csrf
			<div class="col-12 pb-3 ">
				<div class="form-group">
					<label class="cl">Email</label>
					<input id="username" type="text" name="email"value="{{ old('email') }}" required class="form-control" placeholder="email">
				</div>
				<div class="form-group">
					<label class="cl">Password</label>
					<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
				</div>      
			</div>
			<p id="check-login-status" class="text-center text-danger" style="font-size: 90%;display: none;">Wrong username or password</p>
			<button type="submit" class="btn bg1 cl btn-block mt-1 mb-5"style="width: 80%;margin:0 auto;">
			Submit
          </button>
			
	</form>
		</div>
	</div>
</div>  

	</body>