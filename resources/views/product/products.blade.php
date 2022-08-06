

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
			
				<div class="text-center"><div class="btn mb-2 bg-white">
					<a href="Product/create" style="color: black;text-decoration: none;">Add Product</a></div></div>
		

			<div style="height: calc(100vh - 120px);overflow-y: auto;">

				<div class="px-2" style="width: 850px;margin: auto">
					<table class="table bg2 cl">
						<thead>
							<tr>

								<th scope="col">Image</th>
								<th scope="col">Name</th>
								<th scope="col">Price</th>
								<th scope="col">Type</th>
								<th scope="col">Method</th>
							</tr>
						</thead>
						<tbody>
							@foreach($products as $product)
							<tr>
								<th><img src="/Attachments/images/{{$product->image}}" width="80px" height="50px;" style="object-fit: cover;"> </th>

								<td style="width: 350px">{{$product->name}}</td>

								<td>{{$product->price}}</td>

								@if($product->type == 1)
								<td>Food</td>
								@elseif($product->type ==2)
								<td>Drink</td>
								@endif


								<td>
								<a href="../Product/GetEditProduct/2" style="text-decoration: none;color:black;">
									<div class="btn bg-white text-dark float-left mr-2">Edit</div>
								</a>

								<a href="../Product/DeleteProduct/2"style="text-decoration: none;color:black;">
									<div class="btn bg-white text-dark">Delete</div>
								</a>
								</td>
                            </tr>
						@endforeach						
						</tbody>


					</table>
				</div>



			</div>

		</div>



</div>
</div>
</div>
</div>


@endsection
