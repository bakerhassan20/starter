

@extends('layouts.master')

@section('content')


<br><br><br>

<!-- header -->
<div class="p-0 bg1" style="height: 100vh;width: calc(100% - 320px)">
			<div class="p-3">
				<p class="float-left cl font-weight-bold mb-0" style="font-size: 130%">Checkout</p>
				@if (session()->has('success'))
					<div class="alert alert-success alert-dismissible fade show" role="alert"style="width:319px; position: absolute; z-index: 999;margin-left:398px">
						<strong>{{ session()->get('success') }}</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				@endif	
				@if ($errors->any())
				<div class="alert alert-danger"style="  width: 314px;
														position: absolute;
														z-index: 999;
														margin-left: 389px;
														max-height: 100%;">
						<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
						</ul>
					  </div>
				@endif


				<a href="../Home" style="text-decoration: none;color:black;">
					<div id="back-button" class="btn bg-white float-right">Back</div>
				</a>
				<div style="clear: both;"></div>
			</div>

			<div style="height: calc(100vh - 120px);overflow-y: auto;">
				<div class="row m-0" >

					<div class="col-6 p-0">
						<div class="row m-0 p-2">
							<div class="col-12 p-2">
								<div class="p-2 cl bg2">
									<form action="../System/ChangeColor" method="post" enctype='multipart/form-data'>	<p class="text-center" style="font-size: 130%">Theme</p>
										<div class="row m-0">
											<div class="col-6 p-0 mt-2">
												<label>Background 1</label><br>
												<input id="color1" type="color" value="#121421" name="color1">	<br>
												</div><div class="col-6 p-0 mt-2">
												<label>Background 2</label><br>
												<input id="color2" type="color" value="#1e202c" name="color2">	<br>
												</div><div class="col-6 p-0 mt-2">
												<label>Background 3</label><br>
												<input id="color3" type="color" value="#292b37" name="color3">	<br>
												</div><div class="col-6 p-0 mt-2">
												<label>Text</label><br>
												<input id="color4" type="color" value="#ffffff" name="color4">	<br>
												</div>		
										</div>
										<div>
											<button type="submit" class="form-control mt-3 float-left" style="width: 70%">Change color</button>
											<div class="btn float-right bg-white mt-3 text-dark" onclick="SetDefaultColor()">Set Default</div>
											<div style="clear: both;"></div>
										</div>									
									</form>
								</div>
							</div>

							<div class="col-12 p-2">
								<div class="p-2 cl bg2">
									<p class="text-center" style="font-size: 130%">Fee</p>
									<div style="clear: both;"></div>
									<div class="row m-0">
										<table class="table bg2 cl">
											<thead>
												<tr>
													<th scope="col">Name</th>
													<th scope="col">Percent</th>
													<th scope="col">Method</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>VAT</td>
													<td>10%</td>
													<td>
													<div class="btn bg-white text-dark" onclick="ChangeFee(1,`VAT`,`10`)">Edit</div>
													
													</td><tr>
													<td>SER</td>
													<td>20%</td>
													<td>
													<div class="btn bg-white text-dark" onclick="ChangeFee(2,`SER`,`20`)">Edit</div>
													
													</td>											</tbody>
										</table>
									</div>
									<form id="form-fee" action="../System/EditFee" method="post" style="display: none;">
										<div style="display: flex;">
											<input id="idFee"  type="" name="idFee" style="display: none;">
											<div class="px-2" style="width: 30%">
												<label>Name</label><br>
												<input id="nameFee" type="" class="form-control" name="nameFee" disabled>
											</div>
											<div  class="px-2" style="width: 30%">
												<label>Price</label><br>
												<input id="priceFee" type="" class="form-control" name="priceFee">
											</div>
											<div  class="px-2" style="width: 30%">
												<button type="submit" class="btn" style="margin-top: 32px">Edit fee</button>
											</div>
										</div>									
									</form>
								</div>
							</div>


							<div class="col-12 p-2">
								<div class="p-2 cl bg2">
									<p class="text-center" style="font-size: 130%">Table</p>
									<div style="clear: both;"></div>
									<div class="row m-0">
										<table class="table bg2 cl">
											<thead>
												<tr>
													<th scope="col">Code</th>
													<th scope="col">Type</th>
													<th scope="col">Method</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>2</td>
													<td>Normal</td>
													<td>
													<div class="btn bg-white text-dark float-left mr-2" onclick="EditTable(2,2,1)">Edit</div>
													<a href="../Table/DeleteTable/2" 
													style="text-decoration: none;color:black;">
													<div class="btn bg-white text-dark float-left">Delete</div>
													</a>
													</td><tr>
													<td>3</td>
													<td>Normal</td>
													<td>
													<div class="btn bg-white text-dark float-left mr-2" onclick="EditTable(3,3,1)">Edit</div>
													<a href="../Table/DeleteTable/3" 
													style="text-decoration: none;color:black;">
													<div class="btn bg-white text-dark float-left">Delete</div>
													</a>
													</td><tr>
													<td>4</td>
													<td>Normal</td>
													<td>
													<div class="btn bg-white text-dark float-left mr-2" onclick="EditTable(4,4,1)">Edit</div>
													<a href="../Table/DeleteTable/4" 
													style="text-decoration: none;color:black;">
													<div class="btn bg-white text-dark float-left">Delete</div>
													</a>
													</td><tr>
													<td>5</td>
													<td>Normal</td>
													<td>
													<div class="btn bg-white text-dark float-left mr-2" onclick="EditTable(5,5,1)">Edit</div>
													<a href="../Table/DeleteTable/5" 
													style="text-decoration: none;color:black;">
													<div class="btn bg-white text-dark float-left">Delete</div>
													</a>
													</td><tr>
													<td>7</td>
													<td>Normal</td>
													<td>
													<div class="btn bg-white text-dark float-left mr-2" onclick="EditTable(7,7,1)">Edit</div>
													<a href="../Table/DeleteTable/7" 
													style="text-decoration: none;color:black;">
													<div class="btn bg-white text-dark float-left">Delete</div>
													</a>
													</td><tr>
													<td>9</td>
													<td>Normal</td>
													<td>
													<div class="btn bg-white text-dark float-left mr-2" onclick="EditTable(10,9,1)">Edit</div>
													<a href="../Table/DeleteTable/10" 
													style="text-decoration: none;color:black;">
													<div class="btn bg-white text-dark float-left">Delete</div>
													</a>
													</td><tr>
													<td>12</td>
													<td>Vip</td>
													<td>
													<div class="btn bg-white text-dark float-left mr-2" onclick="EditTable(12,12,2)">Edit</div>
													<a href="../Table/DeleteTable/12" 
													style="text-decoration: none;color:black;">
													<div class="btn bg-white text-dark float-left">Delete</div>
													</a>
													</td><tr>
													<td>13</td>
													<td>Vip</td>
													<td>
													<div class="btn bg-white text-dark float-left mr-2" onclick="EditTable(13,13,2)">Edit</div>
													<a href="../Table/DeleteTable/13" 
													style="text-decoration: none;color:black;">
													<div class="btn bg-white text-dark float-left">Delete</div>
													</a>
													</td><tr>
													<td>2</td>
													<td>Normal</td>
													<td>
													<div class="btn bg-white text-dark float-left mr-2" onclick="EditTable(20,2,1)">Edit</div>
													<a href="../Table/DeleteTable/20" 
													style="text-decoration: none;color:black;">
													<div class="btn bg-white text-dark float-left">Delete</div>
													</a>
													</td>											</tbody>
										</table>
									</div>
									<form id="form-edit-table" action="../Table/EditTable" method="post" style="display: none;">
										<div style="display: flex;">
											<input id="idTable"  type="" name="idTable" style="display: none;">
											<div class="px-2" style="width: 30%">
												<label>Number</label><br>
												<input id="numberTable" type="" class="form-control" name="numberTable">
											</div>
											<div  class="px-2" style="width: 30%">
												<label>Type</label><br>
												<select id="typeTable" class="form-control" name="typeTable">
													<option value="1">Normal</option>
													<option value="2">Vip</option>
												</select>
											</div>
											<div  class="px-2" style="width: 30%">
												<button type="submit" class="btn" style="margin-top: 32px">Edit Table</button>
											</div>
										</div>									
									</form>
									<form id="form-add-table" action="../Table/AddTable" method="post">
										<div style="display: flex;">
											
											<div class="px-2" style="width: 30%">
												<label>Number</label><br>
												<input type="" class="form-control" name="numberTable">
											</div>
											<div  class="px-2" style="width: 30%">
												<label>Type</label><br>
												<select class="form-control" name="typeTable">
													<option value="1">Normal</option>
													<option value="2">Vip</option>
												</select>
											</div>
											<div  class="px-2" style="width: 30%">
												<button type="submit" class="btn" style="margin-top: 32px">Add Table</button>
											</div>
										</div>									
									</form>
								</div>
							</div>

							<script type="text/javascript">
								function EditTable(id,number,type){
									$("#form-add-table").hide();
									$("#form-edit-table").show();
									$("#numberTable").val(number);
									$("#typeTable").val(type);
									$("#idTable").val(id);
									
								}
							</script>


						</div>
					</div>
					<div class="col-6 p-2">
						<div class="col-12 p-2">
							<div class="p-2 cl bg2">
								<p class="text-center" style="font-size: 130%">Voucher</p>
								<div style="clear: both;"></div>
								<div class="row m-0">
									<table class="table bg2 cl">
										<thead>
											<tr>
												<th scope="col">Code</th>
												<th scope="col">Price</th>
												<th scope="col">Method</th>
											</tr>
										</thead>
										<tbody>
											@foreach($vouchers as $voucher)
											<tr>
												<td>{{$voucher->code}}</td>
												<td>{{$voucher->price}}</td>
												<td>
											
                     
												<form action="{{ route('Voucher.destroy', 'test') }}" method="post"
												style="text-decoration: none;color:black;">
												{{ method_field('delete') }}
                                                {{ csrf_field() }}
												<input type="hidden" name="id" value="{{$voucher->id}}">
												<button type='submit'class="btn bg-white text-dark">Delete</button>

							                    </form>
												</td>
											</tr>
												@endforeach
											</tbody>
									</table>
								</div>
								<form action="{{url('/' . $page='createVoucher')}}" method="POST">
								{{ csrf_field() }}
								
									<div style="display: flex;">
										<div class="px-2" style="width: 30%">
											<label>Code</label><br>
											<input type="text" class="form-control" name="code">
										</div>
										<div  class="px-2" style="width: 30%">
											<label>Price</label><br>
											<input type="number" class="form-control" name="price">
										</div>
										<div  class="px-2" style="width: 30%">
											<button type="submit" class="btn" style="margin-top: 32px">Add Voucher</button>
										</div>
									</div>									
								</form>
							</div>
						</div>

						<div class="col-12 p-2">
							<div class="p-2 cl bg2">
								<p class="text-center" style="font-size: 130%">Discount</p>
								<div style="clear: both;"></div>
								<div class="row m-0">
									<table class="table bg2 cl">
										<thead>
											<tr>
												<th scope="col">Name</th>
												<th scope="col">Percent</th>
												<th scope="col">Method</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Sale</td>
												<td>20%</td>
												<td>
												<div class="btn bg-white text-dark" onclick="ChangeDiscount(1,`Sale`,`20`)">Edit</div>

												</td>										</tbody>
									</table>
								</div>
								<form id="form-discount" action="../System/EditDiscount" method="post" style="display: none;">
									<div style="display: flex;">
										<input id="idDiscount"  type="" name="idDiscount" style="display: none;">
										<div class="px-2" style="width: 30%">
											<label>Name</label><br>
											<input id="nameDiscount" type="" class="form-control" name="nameDiscount" disabled>
										</div>
										<div  class="px-2" style="width: 30%">
											<label>Price</label><br>
											<input id="priceDiscount" type="" class="form-control" name="priceDiscount">
										</div>
										<div  class="px-2" style="width: 30%">
											<button type="submit" class="btn" style="margin-top: 32px">Edit fee</button>
										</div>
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
</div>
</div>


@endsection

<script type="text/javascript">
	function SetDefaultColor(){
		$("#color1").val('#121421');
		$("#color2").val('#1e202c');
		$("#color3").val('#292b37');
		$("#color4").val('#ffffff');
	}

	function ChangeFee(id,name,price){
		$("#form-fee").show();
		$("#idFee").val(id);
		$("#nameFee").val(name);
		$("#priceFee").val(price);
	}

	function ChangeDiscount(id,name,price){
		$("#form-discount").show();
		$("#idDiscount").val(id);
		$("#nameDiscount").val(name);
		$("#priceDiscount").val(price);
	}


</script></body>
<script
src="https://code.jquery.com/jquery-3.5.1.js"
integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
crossorigin="anonymous"></script>


</html>

