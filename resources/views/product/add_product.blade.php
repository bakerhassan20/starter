

@extends('layouts.master')

@section('content')


<br><br><br>

<!-- header -->
        <div class="p-0 bg1" style="height: 100vh;width: calc(100% - 320px)">
			<div class="p-3">
				<p class="float-left cl font-weight-bold mb-0" style="font-size: 130%">Checkout</p>
				@if (session()->has('Add'))
					<div class="alert alert-success alert-dismissible fade show" role="alert"style="width:319px; position: absolute; z-index: 999;margin-left:398px">
						<strong>{{ session()->get('Add') }}</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				@endif	
				<a href="../Home" style="text-decoration: none;color:black;">
					<div id="back-button" class="btn bg-white float-right">Back</div>
				</a>
				<div style="clear: both;"></div>
			</div>
<!--end header -->

@if ($errors->any())
        <div class="alert alert-danger"style="width:200px; position: absolute; z-index: 999;margin-left:900px;height: 50px;
">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif




				<div style="height: calc(100vh - 120px);overflow-y: auto;">

				<div class="py-2 px-4 text-white bg2" style="width: 500px;margin: auto">
					<form action="{{ route('Product.store') }}" method="post" enctype='multipart/form-data'>
					    {{ csrf_field() }}

						<p class="text-center" style="font-size: 130%">Add Product</p>

						<label>Name</label>
						<input type="text" class="form-control"  style="background: none;color: white" name="name" required>

						<label class="mt-2">Price</label>
						<input type="number" class="form-control"  style="background: none;color: white" name="price"required >

						<label class="mt-2">Type</label>
						<select class="form-control" id="exampleFormControlSelect1" style="background: none;" name="type"required>
							<option value="1">Food</option>
							<option value="2">Drink</option>
						</select>

						<label class="mt-2">Quantity</label>
						<input type="number" class="form-control"  style="background: none;color: white" name="quantity"required >

						<label class="mt-2">Image</label><br>
						<input type="file" name="upload"required accept=".pdf,.jpg, .png, image/jpeg, image/png"
                                data-height="70">
						<div class="text-center mt-3 mb-3">
							<button type="submit" class="btn bg-white">Add Product</button>
						</div>
						<p class="text-center">
													</p>
					</form>
				</div>



				</div>



</div>


</div>
</div>
</div>
</div>


@endsection
