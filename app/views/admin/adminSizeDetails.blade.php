@extends('layouts.masters')

@section('top-script')
<style>
	#admin-2{
		display: flex;
		flex-direction: row;
		justify-content: space-between;
	}

	.btn{
		margin-bottom: 18px;
	}

	.noneditable{
		background-color: lightgray;
	}


</style>

@stop

@section('content')

	<div class="container">
		
		<p class="inventory-title1">Size Details</p>
			
			<div id="insertProducts">
		    	@foreach($sizeDetail as $details)


	     			<div id="admin-2">
					
					{{ Form::model($sizeDetail,array('action' => array('SizeDetailController@update',$details->id),'method' =>'PUT'))}}

						{{Form::textarea('id',$details->id,['class'=> 'noneditable', 'rows' => '1', 'cols' => '2', 'disabled' => 'disabled'])}}{{Form::textarea('inventory_id',$details->inventory_id,['class'=> 'noneditable', 'rows' => '1', 'cols' => '2', 'disabled' => 'disabled'])}} {{Form::textarea('size',$details->size,['rows' => '1', 'cols'=> '4'])}}{{Form::textarea('amount',$details->amount,['rows' => '1', 'cols'=> '25'])}}{{Form::textarea('color',$details->color,['rows' => '1' , 'cols'=> '20'])}}{{Form::textarea('price',$details->price,['rows' => '1' , 'cols'=> '5'])}} {{Form::textarea('created_at',$details->created_at,['class'=> 'noneditable', 'rows' => '1', 'cols'=> '20' ,'disabled' => 'disabled'])}} {{Form::textarea('updated_at',$details->updated_at,['class'=> 'noneditable', 'rows' => '1', 'cols'=> '20','disabled' => 'disabled'])}}
						<button type="submit" class="btn btn-default" name="save" value="save">Submit</button>

					{{Form::close()}}

					</div>
					
    			@endforeach

			</div>
	</div>
	<br>
	<div class="black-line row"></div>

	<p class="inventory-title1">Add New Merchandise</p>

	 <div class="col-md-12 account-txt">
            {{ Form::open(['action' => 'SizeDetailController@store', 'method'=>'POST', 'class'=>'form-horizontal']) }}
                @if($errors->has('inventory_id'))

                    <P>{{ $errors->first('inventory_id', '<span style="color:red" class="help-block">:message</span>') }}</p>
                @endif

                <label for="inventory_id">inventory_id:</label>
                <textarea  type="text" class="form-control form1"  name="inventory_id" aria-describedby="basic-addon1">id</textarea><br>

                @if($errors->has('size'))
                    <P>{{  $errors->first('size', '<span style="color:red" class="help-block">:message</span>') }}</p>
                @endif

                <label for="size">size:</label>
                <textarea  type="text" class="form-control form1"  name="size" aria-describedby="basic-addon1">size</textarea><br>


                 @if($errors->has('amount'))
                    <P>{{  $errors->first('amount', '<span style="color:red" class="help-block">:message</span>') }}</p>
                @endif

                <label for="amount">amount:</label>
                <textarea  type="text" class="form-control form1"  name="amount" aria-describedby="basic-addon1">amount</textarea><br>


                @if($errors->has('color'))
                    <P>{{  $errors->first('color', '<span style="color:red" class="help-block">:message</span>') }}</p>
                @endif

                <label for="color">color:</label>
                <textarea  type="text" class="form-control form1"  name="color" aria-describedby="basic-addon1">color</textarea><br>


                @if($errors->has('price'))
                    <P>{{  $errors->first('price', '<span style="color:red" class="help-block">:message</span>') }}</p>
                @endif

                <label for="price">price:</label>
                <textarea  type="text" class="form-control form1"  name="price" aria-describedby="basic-addon1">price</textarea><br>

                <button type="submit" class="btn btn-default" name="save" value="save">Submit</button>
        	{{ Form::close() }}

    </div>

@stop

@section('bottom-script')


@stop