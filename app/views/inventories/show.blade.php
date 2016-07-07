@extends('layouts.masters')

@section('top-script')

@stop

@section('content')

<div class="container">
	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="content-wrapper-left">
		<div id="image-container" class="product-images">
			<img class="img-responsive show-images" src="{{{$inventory->image}}}">
		<!---
			@foreach($inventory->size_details as $details)
			<p>{{{$details->size}}}</p>
			@endforeach
		----> 
		</div>
	</div>
	<div class="product-details">
		<h1>{{{$inventory->type}}}</h1>

	</div>

	<div id="ctl00_ContentMainPage_ctlSeparateProduct_pnlTill" class="till">
		
        <div id="separates_till_box"> 
            <a id="hypMoreInfo" href="#" class="more-info" data-di-id="#hypMoreInfo">
                </a>
	        <!--mp_trans_schedule_disable_start-->
                <div id="ctl00_ContentMainPage_ctlSeparateProduct_pnlColour" class="colour select-disabled">
			
                    <div class="select-style">
                    <select name="ctl00$ContentMainPage$ctlSeparateProduct$drpdwnColour" id="ctl00_ContentMainPage_ctlSeparateProduct_drpdwnColour" disabled="disabled" onchange="drpdwnColourChange('ctl00_ContentMainPage_ctlSeparateProduct', arrSzeCol_ctl00_ContentMainPage_ctlSeparateProduct, arrSepImage_ctl00_ContentMainPage_ctlSeparateProduct, '0', event);">
				<option value="-1">First select from 1 colours</option>
				<option selected="selected" value="Black">Black</option>

			</select>
                    </div>
                    
                    <div class="clear"></div>
                
		</div>
		    <!--mp_trans_schedule_disable_end-->

            <div id="ctl00_ContentMainPage_ctlSeparateProduct_pnlSize" class="size">
			
                
            <!--mp_trans_schedule_disable_start-->		               
                        <div class="select-style size-guide">                        
                        <select name="ctl00$ContentMainPage$ctlSeparateProduct$drpdwnSize" id="ctl00_ContentMainPage_ctlSeparateProduct_drpdwnSize" onchange="drpdwnSizeChange(this, 'ctl00_ContentMainPage_ctlSeparateProduct', arrSzeCol_ctl00_ContentMainPage_ctlSeparateProduct, event);">
				

			<option value="-1">Select Size</option><option value="4432">XXS</option><option value="4824">XS</option><option value="4549">S</option><option value="4417">M</option><option value="4915">L</option><option value="4451">XL</option><option value="4494">XXL</option></select>
                        </div>
                        <input type="hidden" name="ctl00$ContentMainPage$ctlSeparateProduct$hidNotAvailableText" id="ctl00_ContentMainPage_ctlSeparateProduct_hidNotAvailableText" value="Not available">
                    <!--mp_trans_schedule_disable_end-->
		        </div>
            
		</div>
        
            <span itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
            <meta itemprop="availability" href="http://schema.org/InStock" content="In Stock">
             </span>
        

        <div class="other-notifications">
            <span id="low-in-stock-message"></span>
            
        </div>
        
        
        
    
	</div>


</div>


@stop

@section('bottom-script')

@stop