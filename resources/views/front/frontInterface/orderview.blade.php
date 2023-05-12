{{-- @extends('front.layouts.master')
@section('title', 'Cart')
@section('content')
<main class="main">
	<!-- Page Breadcrumb -->
	<div class="breadcrumb-section">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="{{ url('/') }}">{{ __('Home') }}</a></li>
							<li class="breadcrumb-item active"
							aria-current="page">{{ $data->title }}</li>
						</ol>
					</nav>
				<div class="col-lg-6">
					<div class="page-title">
						<h1>{{ $data->title }}</h1>

				</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- /Page Breadcrumb/ -->

	<!-- Inner Section -->
	<section class="inner-section inner-section-bg">
		<div class="container">
			<div class="row">
				<div class="col-xl-5">
					<div class="product-details-slider pd-slider-for">

						<div class="item">
							<img src="{{ asset('uploads/'.$data->image) }}">
						</div>

					</div>
					{{-- <div class="thumbnail-card pd-slider-nav">
						@if(count($pro_images)>0)
						@foreach ($pro_images as $key => $row)
						<img src="{{ asset('public/media/'.$row->thumbnail) }}" alt="{{ $key }}" />
						@endforeach
						@else
						<img src="{{ asset('public/media/'.$data->f_thumbnail) }}" alt="{{ $data->title }}" />
						@endif
					</div> --}}
				</div>
				<div class="col-xl-7">
					 <div class="pr_details">
						<h4 class="product_title">{{$data->title }}</h4>

						{{-- @if($data->short_desc != '') --}}
						{{-- <p>{{ $data->short_desc }}</p> --}}
						{{-- @endif --}}
						{{-- @if($data->shop_name != '') --}}
						{{-- <div class="pr_extra">--}}
							<strong>{{ __('Description') }}:</strong>
							<label>{{$data->description}}</label><br>
							<strong>{{ __('Sold By') }}:</strong>
							<label>janki</label>
		 {{-- <a href="{{ route('frontend.stores', [$data->seller_id)]) }}"> --}}
			<a>{{ $data->shop_name }}</a></div>
						{{-- @endif --}}
						<strong><label for="quantity">Price:</label></strong>
					<label>200</label>
						{{-- <div class="product_price">{{$data->sale_price}} --}}
							{{-- @if($data->sale_price != '')
								@if($gtext['currency_position'] == 'left')
								<div class="item-price">{{ $gtext['currency_icon'] }}
									{{ number_format($data->sale_price) }}</div>
								@else
								<div class="item-price">{{ number_format($data->sale_price) }}
									{{ $gtext['currency_icon'] }}</div>
								@endif
							@endif --}}
							{{-- @if(($data->is_discount == 1) && ($data->old_price !=''))

								@php
			$discount = number_format((($data->old_price - $data->sale_price)*100)/$data->old_price)
								@endphp

								@if($gtext['currency_position'] == 'left')
								<div class="old-item-price">{{ $gtext['currency_icon'] }}{{ number_format($data->old_price) }}</div><span class="discount">-{{ $discount }}%</span>
								@else
								<div class="old-item-price">{{ number_format($data->old_price) }}{{ $gtext['currency_icon'] }}</div><span class="discount">-{{ $discount }}%</span>
								@endif
							@endif --}}
						{{-- </div> --}}
						{{-- @if($data->variation_size != '')--}}
						{{-- <div class="pr_widget">
							 <label class="widget-title">{{ __('Unit') }}</label>
							<ul class="widget-size">
								<li class="unit active">kg</li>
							</ul>
						</div> --}}

						{{-- @endif --}}
						<div class="pr_quantity">
							<strong><label for="quantity">Quantity:</label></strong>
							<input name="quantity" id="quantity" type="number"
							min="1"value="1">
							 {{-- max="{{ $data->is_stock == 1 ? $data->stock_qty : 999 }}"  --}}

						</div>
						<div class="pr_buy_cart">
							<a  class="site-cart" id="quantity" data-id="{{ $data->id }}">
								{{-- below class give and id also ,data id="product->id" --}}
								<span class="icon icon-shopping_cart"></span>

						  <a class="addtowishlist" data-id="{{ $data->id }}" >
							<span class="icon icon-heart-o"></span></a>

							{{-- <a class="btn btn-primary theme-btn cart product_addtocart" data-id="{{ $data->id }}" data-stockqty="{{ $data->is_stock == 1 ? $data->stock_qty : 999 }}" href="javascript:void(0);">{{ __('Add To Cart') }}</a>--}}
							 {{-- <a class="btn btn-primary theme-btn cart product_buy_now"
							 data-id="{{ $data->id }}" data-stockqty="{{ $data->is_stock == 1 ? $data->stock_qty : 999 }}"
							  href="{{route('checkout')}}">{{ __('Buy Now') }}</a> --}}
							{{-- <a class="btn btn-primary theme-btn cart product_wistlist" data-id="{{ $data->id }}" data-stockqty="{{ $data->is_stock == 1 ? $data->stock_qty : 999 }}" href="javascript:void(0);">{{ __('Add To Wishlist') }}</a> --}}


						{{-- @if($data->is_stock == 1)
							@if($data->stock_status_id == 1)--}}
							{{-- <div class="pr_extra"><strong>{{ __('Availability') }}:

							</strong><span class="instock">{{ $data->stock_qty }} {{ __('In Stock') }}
								</span></div> --}}
							{{-- @else
							<div class="pr_extra"><strong>{{ __('Availability') }}:</strong><span class="stockout">{{ __('Out Of Stock') }}</span></div>
							@endif - --}}
						{{-- @endif
						@if($data->is_stock == 1)
							@if($data->sku != '')
							<div class="pr_extra"><strong>{{ __('SKU') }}:</strong>
								{{ $data->sku }}</div>
							@endif
						@endif
						@if($data->brandname != '')--}}
						{{-- <div class="pr_extra"><strong>{{ __('Brand') }}:
							 </strong>
							 <a href="{{ route('frontend.brand',$data->id}}">
							 {{ $data->name }}</a></div> --}}
						{{-- @endif
						<div class="pr_extra"><strong>{{ __('Category') }}: </strong> <a href="{{ route('frontend.product-category', [$data->cat_id, $data->cat_slug]) }}">{{ $data->cat_name }}</a></div>

						<div class="pr_widget">
							<label class="widget-title">{{ __('Share this') }}</label>
							<div class="social-media">
								<a href="https://www.facebook.com/sharer/sharer.php?u={{ route('frontend.product', [$data->id, $data->slug]) }}" target="_blank"><i class="bi bi-facebook"></i></a>
								<a href="https://twitter.com/intent/tweet?text={{ $data->title }}&url={{ route('frontend.product', [$data->id, $data->slug]) }}" target="_blank"><i class="bi bi-twitter"></i></a>
								<a href="http://www.linkedin.com/shareArticle?mini=true&url={{ route('frontend.product', [$data->id, $data->slug]) }}&title={{ $data->title }}&summary={{ $data->short_desc }}" target="_blank"><i class="bi bi-linkedin"></i></a>
								<a href="https://wa.me/?text={{ route('frontend.product', [$data->id, $data->slug]) }}" target="_blank"><i class="bi bi-whatsapp"></i></a>
							</div> --}}
						</div>
					</div>
				</div>
			</div>


		</div>
	</section>
	<!-- /Inner Section/ -->

	<!-- Popular Products -->

	<!-- /Popular Products/ -->
</main>
@endsection --}}
