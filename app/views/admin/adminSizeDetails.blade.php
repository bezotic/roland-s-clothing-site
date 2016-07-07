@extends('layouts.masters')

@section('top-script')

@stop

@section('content')

	<div class="container">
		<div>
			<h2 class="inventory-title1">Size Details</h2>
			<div class="inventory-title2">
				<table id="products" class="table">
				    <thead>
				        <tr>
				            <th id="title">Id</th>
				            <th id="quantity">Inventory_id</th>
				            <th id="price">Size</th>
				            <th id="categories">Amount</th>
				            <th id="categories">Color</th>
				            <th id="categories">Created on</th>
				            <th id="categories">Updated On</th>
				        </tr>
				    </thead>
				    <tbody id="insertProducts">

						@foreach($sizeDetail as $details)
							
								<tr><td>{{{$details->id}}}</td><td>{{{$details->inventory_id}}}</td><td>{{{$details->size}}}</td><td>{{{$details->amount}}}</td><td>{{{$details->color}}}</td><td>{{{$details->created_at}}}</td><td>{{{$details->updated_at}}}</td></tr>
							
	    				@endforeach

				    </tbody>
				</table> <br>
			</div>

			<div class="black-line row"></div>

			 <div class="col-md-12 account-txt">
                    {{ Form::open(['action' => 'SizeDetailController@store', 'method'=>'POST', 'class'=>'form-horizontal']) }}
                        @if($errors->has('inventory_id'))

                            <P>{{ $errors->first('inventory_id', '<span style="color:red" class="help-block">:message</span>') }}</p>
                        @endif

                        <label for="inventory_id">inventory_id:</label>
                        <textarea  type="text" class="form-control form1"  name="inventory_id" aria-describedby="basic-addon1">{{{ Input::old('inventory_id') }}}</textarea><br>

                        @if($errors->has('size'))
                            <P>{{  $errors->first('size', '<span style="color:red" class="help-block">:message</span>') }}</p>
                        @endif

                        <label for="size">size:</label>
                        <textarea  type="text" class="form-control form1"  name="size" aria-describedby="basic-addon1">{{{ Input::old('size') }}}</textarea><br>


                         @if($errors->has('amount'))
                            <P>{{  $errors->first('amount', '<span style="color:red" class="help-block">:message</span>') }}</p>
                        @endif

                        <label for="amount">amount:</label>
                        <textarea  type="text" class="form-control form1"  name="amount" aria-describedby="basic-addon1">amount</textarea><br>


                        @if($errors->has('color'))
                            <P>{{  $errors->first('color', '<span style="color:red" class="help-block">:message</span>') }}</p>
                        @endif

                        <label for="color">color:</label>
                        <textarea  type="text" class="form-control form1"  name="color" aria-describedby="basic-addon1">{{{ Input::old('color') }}}</textarea><br>

                        <button type="submit" class="btn btn-default" name="save" value="save">Submit</button>
                	{{ Form::close() }}

                </div>
		</div>
	</div>

@stop

@section('bottom-script')


@stop