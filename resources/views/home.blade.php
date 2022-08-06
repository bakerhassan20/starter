<?php// include("./mvc/views/partials/theme.php"); ?> 


@extends('layouts.master')


@section('content')

<div class="p-0 bg1" style="height: 100vh;width: calc(100% - 320px)">

<div class="p-3">
	<p class="text-white font-weight-bold float-right" style="font-size: 130%">POIN OF SALE</p>

	<div class="bg2 float-left" style="width: 350px;height: 50px;display: flex;">
		<input class="p-2" type="" name="" style="width: calc(100% - 50px);height: 100%;background: none;border: 0;outline: none;color: white">
		<div class="text-center" style="width: 50px;height: 50px;">
			<i class="fa fa-search text-white" aria-hidden="true" style="font-size: 130%;line-height: 48px;opacity: 0.8"></i>
		</div>
	</div>


<br><br><br>		



<div class="px-2" style="">
         <div class="px-2">

                    @foreach($tables as $table)
					<div class="p-1 float-left">
						<div class="bg2 text-center" style="width: 100px;height: 100px;">
							<p class="text-white mb-0" style="font-size: 360%;">{{$table->table_number}}</p>
							@if ($table->status == 1)
							<i class="fa fa-circle mr-2 dot-danger float-right" aria-hidden="true" 
							style="font-size: 75%;margin-top: -4px"></i>
							@else
							<i class="fa fa-circle mr-2 dot-success float-right" aria-hidden="true" 
							style="font-size: 75%;margin-top: -4px"></i>
							@endif
						</div>
					</div>
                     @endforeach
				</div>
				</div>	
	</div>
</div>
</div>
</div>


@endsection
