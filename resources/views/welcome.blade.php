@extends('front.layouts.master')
@section('title', 'Dashboard')
@section('content')

    <div class="site-wrap">
        <div class="site-blocks-cover" style="background-image: url(images/1.webp);" data-aos="fade">
            <div class="container">
                <div class="row align-items-start align-items-md-center justify-content-end">
                    <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
                        <h1 class="mb-2">Finding Your Perfect Shoes</h1>
                        <div class="intro-text text-center text-md-left">
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis
                                quam. Integer accumsan tincidunt fringilla. </p>
                            <p>
                                <a href="" class="btn btn-sm btn-primary">Shop Now</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section site-section-sm site-blocks-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
                        <div class="icon mr-4 align-self-start">
                            <span class="icon-truck"></span>
                        </div>
                        <div class="text">
                            <h2 class="text-uppercase">Free Shipping</h2>
                            <p>Free shipping is a popular marketing strategy used by ecommerce
                                websites to attract and retain customers.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon mr-4 align-self-start">
                            <span class="icon-refresh2"></span>
                        </div>
                        <div class="text">
                            <h2 class="text-uppercase">Free Returns</h2>
                            <p>Free returns is another popular marketing strategy used by ecommerce
                                websites to build trust and confidence with their customers.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon mr-4 align-self-start">
                            <span class="icon-help"></span>
                        </div>
                        <div class="text">
                            <h2 class="text-uppercase">Customer Support</h2>
                            <p>Customer support is a critical aspect of any ecommerce website,
                                as it helps businesses to build trust and loyalty with their customers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section site-blocks-2">
            <div class="container">

                <div class="row">
                    @foreach ($category as $cate)
                        <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
                            <a class="block-2-item" href="#">
                                <figure class="image">
                                    <img src="{{ asset('uploads/' . $cate->image) }}" width="320px" height="217.14px"
                                        alt="">

                                </figure>
                                <div class="text">
                                    <span class="text-uppercase">Collections</span>
                                    <h3>{{ $cate->title }}</h3>
                                </div>
                            </a>
                        </div>
                        {{-- <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
            <a class="block-2-item" href="{{$cate->title}}">
              <figure class="image">
                <img src="images/children.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <span class="text-uppercase">Collections</span>
                <h3>Children</h3>
              </div>
            </a>
          </div> --}}
                        {{-- <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            <a class="block-2-item" href="#">
              <figure class="image">
                <img src="images/men.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <span class="text-uppercase">Collections</span>
                <h3>Men</h3>
              </div>
            </a>
          </div> --}}
                    @endforeach
                </div>
            </div>

        </div>

        <div class="site-section block-3 site-blocks-2 bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 site-section-heading text-center pt-4">
                        <h2>Featured Products</h2>
                    </div>
                </div>
                <div class="row">


                    <div class="col-md-12">
                        <div class="nonloop-block-3 owl-carousel">
                            @foreach ($products as $product)
                                <div class="item">
                                    <div class="block-4 text-center">
                                        <figure class="block-4-image">
                                            <a href="{{route('frontend.productview',$product->id)}}">

                                            <img src="{{ asset('uploads/' . $product->image) }}" width="320px"
                                                height="217.14px"></a>
                                        </figure>
                                        <div class="block-4-text p-4">
                                            <h3><a href="{{route('frontend.productview',$product->id)}}">{{ $product->title }}</a></h3>
                                            <p class="mb-0">{!! $product->description !!}</p>
                                            <p class="text-primary font-weight-bold">₹ 50</p>
{{-- cart code --}}
                                            <a  class="site-cart" id="quantity" data-id="{{ $product->id }}">
                                                {{-- below class give and id also ,data id="product->id" --}}
                                                <span class="icon icon-shopping_cart"></span>

                                          <a class="addtowishlist" data-id="{{ $product->id }}" ><span class="icon icon-heart-o"></span></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section block-8">
            <div class="container">
                <div class="row justify-content-center  mb-5">
                    <div class="col-md-7 site-section-heading text-center pt-4">
                        <h2>Big Sale!</h2>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-7 mb-5">
                        <a href="#"><img src="{{ asset('uploads/' . $img->image) }}" alt="Image placeholder"
                                class="img-fluid rounded"></a>
                    </div>
                    <div class="col-md-12 col-lg-5 text-center pl-md-5">
                        <h2><a href="#">50% less in all items</a></h2>
                        <p class="post-meta mb-4">By <a href="#">Carl Smith</a> <span
                                class="block-8-sep">&bullet;</span> September 3, 2018</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam iste dolor accusantium facere
                            corporis ipsum animi deleniti fugiat. Ex, veniam?</p>
                        <p><a href="#" class="btn btn-primary btn-sm">Shop Now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script>

    	$(document).on("click", ".addtowishlist", function(event) {

		event.preventDefault();
        const base_url = "http://127.0.0.1:85";
		const id = $(this).data('id');
        // alert('hrllo');

		$.ajax({
			type : 'GET',
            url: '/add_to_wishlist/' + id,
			dataType:"json",

			success: function (response) {
				var msgType = response.msgType;
				var msg = response.msg;

				if (msgType == "success") {
					onSuccessMsg(msg);
				} else {
					onErrorMsg(msg);
				}
				onWishlist();
			}
		});
    });


    $(document).on("click", ".site-cart", function(event) { //classname
		event.preventDefault();

		const qty = $("#quantity").val();//idname
		const id = $(this).data('id');
// alert('hello');
// console.log("success");
		// if((qty == undefined) || (qty == '') || (qty <= 0)){
		// 	onErrorMsg(TEXT['Please enter quantity.']);
		// 	return;
		// }
		// if(is_stock == 1){
		// 	var stockqty = $(this).data('stockqty');
		// 	if(is_stock_status == 1){
		// 		if(qty > stockqty){
		// 			onErrorMsg(TEXT['The value must be less than or equal to']);
		// 			return;
		// 		}
		// 	}else{
		// 		onErrorMsg(TEXT['This product out of stock.']);
		// 		return;
		// 	}
		// }

		$.ajax({
			type : 'GET',
			url: '/add_to_cart/' + id,
			dataType:"json",

			success: function (response) {
				var msgType = response.msgType;
				var msg = response.msg;
  alert('msg');
				if (msgType == "success") {
					onSuccessMsg(msg);
				} else {
					onErrorMsg(msg);
				}
				onViewCart();
			}
		});
    });

//cart grocery [public/frontend /pages/cart.js]
function onRemoveToCart(id) {
	var rowid = $("#removetocart_"+id).data('id');

	$.ajax({
		type : 'GET',
		url: base_url + '/frontend/remove_to_cart/'+rowid,
		dataType:"json",
		success: function (response) {

			var msgType = response.msgType;
			var msg = response.msg;

			if (msgType == "success") {
				onSuccessMsg(msg);
			} else {
				onErrorMsg(msg);
			}

			onViewCart();
		}

	});
}
    function onRemoveToWishlist(id) {
	var rowid = $("#removetowishlist_"+id).data('id');

	$.ajax({
		type : 'GET',
		url: base_url + '/frontend/remove_to_wishlist/'+rowid,
		dataType:"json",
		success: function (response) {

			var msgType = response.msgType;
			var msg = response.msg;

			if (msgType == "success") {
				onSuccessMsg(msg);
			} else {
				onErrorMsg(msg);
			}

			onViewCart();
		}
	});
}
</script>
