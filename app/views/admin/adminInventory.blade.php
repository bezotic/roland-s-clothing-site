@extends('layouts.masters')

@section('top-script')

<style>

</style>

@stop

@section('content')

	<div class="container">
		<div>
			<p class="inventory-title1">Edit Store Inventory</p>
			<div class="inventory-title2">

					<table id="products" class="table">
					    <thead>
					        <tr>
					            <th id="id">Id</th>
					            <th id="title">Title</th>
					            <th id="description">Description</th>
					            <th id="type">Type</th>
					            <th id="created">Created on</th>
					            <th id="updated">Updated On</th>
					        </tr>
					    </thead>

					    <tbody id="insertProducts">
					    	{{ Form::model($inventory,array('action' => array('InventoryController@update'),'method' =>'PUT'))}}
					     	
								@foreach($inventory as $item)
								<tr><td>{{{$item->id}}}</td><td>{{Form::text('title',$item->title)}}</td><td>{{Form::text('description',$item->description)}}</td><td>{{Form::text('type',$item->type)}}</td><td>{{{$item->created_at}}}</td><td>{{{$item->updated_at}}}</td></tr>
			    				@endforeach
			    			 	
					    </tbody>
					</table>
								<button type="submit" class="btn btn-default" name="save" value="save">Submit</button>
							{{Form::close()}}
			
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
                        <textarea  type="text" class="form-control form1"  name="title" aria-describedby="basic-addon1">{{{ Input::old('title') }}}</textarea><br>

                        @if($errors->has('description'))
                            <P>{{  $errors->first('description', '<span style="color:red" class="help-block">:message</span>') }}</p>
                        @endif

                        <label for="description">Description:</label>
                        <textarea  type="text" class="form-control form1"  name="description" aria-describedby="basic-addon1">{{{ Input::old('description') }}}</textarea><br>


                         @if($errors->has('image'))
                            <P>{{  $errors->first('image', '<span style="color:red" class="help-block">:message</span>') }}</p>
                        @endif

                        <label for="image">Image:</label>
                        <textarea  type="text" class="form-control form1"  name="type" aria-describedby="basic-addon1">Image Here</textarea><br>


                        @if($errors->has('type'))
                            <P>{{  $errors->first('type', '<span style="color:red" class="help-block">:message</span>') }}</p>
                        @endif

                        <label for="type">Type:</label>
                        <textarea  type="text" class="form-control form1"  name="type" aria-describedby="basic-addon1">{{{ Input::old('type') }}}</textarea><br>

                        <button type="submit" class="btn btn-default" name="save" value="save">Submit</button>
                	{{ Form::close() }}

                </div>
		</div>
	</div>

@stop

@section('bottom-script')


@stop