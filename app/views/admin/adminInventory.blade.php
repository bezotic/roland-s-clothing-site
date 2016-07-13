
@extends('layouts.masters')

@section('top-script')

<style>
	#admin-1, #admin-2{
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

		<p class="inventory-title1">Edit Store Inventory</p>

		<div class="inventory-title2">

		    <div id="insertProducts">


		    	@foreach($inventory as $item)
		    	

		     		<div id="admin-2">
					
					{{ Form::model($inventory,array('action' => array('InventoryController@updateAdminInventory',$item->id),'method' =>'PUT'))}}
							{{Form::textarea('id',$item->id,['class'=> 'noneditable', 'rows' => '1', 'cols' => '2', 'disabled' => 'disabled'])}} {{Form::textarea('title',$item->title,['rows' => '1', 'cols'=> '15'])}} {{Form::textarea('description',$item->description,['rows' => '1', 'cols'=> '25'])}} {{Form::textarea('image',$item->image,['rows' => '1', 'cols'=> '25'])}}{{Form::textarea('type',$item->type,['rows' => '1' , 'cols'=> '20'])}} {{Form::textarea('created_at',$item->created_at,['class'=> 'noneditable', 'rows' => '1', 'cols'=> '20' ,'disabled' => 'disabled'])}} {{Form::textarea('updated_at',$item->updated_at,['class'=> 'noneditable', 'rows' => '1', 'cols'=> '20','disabled' => 'disabled'])}}
							<button type="submit" class="btn btn-default" name="save" value="save">Submit</button>
					{{Form::close()}}

					</div>
					<br>

    				@endforeach
    			 	
		    </div>
		
		</div>

	</div>
	<br>
	<br>
	<div class="black-line row"></div>

	<p class="inventory-title1">Add New Merchandise To Store Inventory</p>

	 <div class="col-md-12 account-txt">
            {{ Form::open(['action' => 'InventoryController@storeAdminInventory', 'method'=>'POST', 'class'=>'form-horizontal']) }}
                @if($errors->has('title'))

                    <P>{{ $errors->first('title', '<span style="color:red" class="help-block">:message</span>') }}</p>
                @endif

                <label for="title">Title:</label>
                <textarea  type="text" class="form-control form1"  name="title" aria-describedby="basic-addon1">title</textarea><br>

                @if($errors->has('description'))
                    <P>{{  $errors->first('description', '<span style="color:red" class="help-block">:message</span>') }}</p>
                @endif

                <label for="description">Description:</label>
                <textarea  type="text" class="form-control form1"  name="description" aria-describedby="basic-addon1">description</textarea><br>


                 @if($errors->has('image'))
                    <P>{{  $errors->first('image', '<span style="color:red" class="help-block">:message</span>') }}</p>
                @endif

                <label for="image">Image:</label>


		            {{ Form::file('image') }}
		           
		            <br>
		            <br>

	                @if ($errors->has('image'))
	                	<p>{{$errors->first('image')}}</p>
	                @endif

	                {{ Form::close() }}
	            

                <br>


                @if($errors->has('type'))
                    <P>{{  $errors->first('type', '<span style="color:red" class="help-block">:message</span>') }}</p>
                @endif

                <label for="type">Type:</label>
                <textarea  type="text" class="form-control form1"  name="type" aria-describedby="basic-addon1">type</textarea><br>

                <button type="submit" class="btn btn-default" name="save" value="save">Submit</button>
        	{{ Form::close() }}

        </div>

@stop

@section('bottom-script')



@stop