@extends('front.layouts.master')
@section('content')
    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong
                        class="text-black">About</strong></div>
            </div>
        </div>
    </div>

    <div class="site-section border-bottom" data-aos="fade">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6">
                    <div class="block-16">
                        <figure>
                            <img src="{{ asset('uploads/' . $product->image) }}"alt="Image placeholder"
                                class="img-fluid rounded">
                            <a href="https://vimeo.com/channels/staffpicks/93951774" class=""><span
                                    class="ion-md-play"></span></a>

                        </figure>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">


                    <div class="site-section-heading pt-3 mb-4">
                        <h2 class="text-black">{{ $product->title }}</h2>
                    </div>
                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius repellat, dicta at laboriosam,
                    nemo exercitationem itaque eveniet architecto cumque, deleniti commodi molestias repellendus
                    quos sequi hic fugiat asperiores illum. Atque, in, fuga excepturi corrupti error corporis
                    aliquam unde nostrum quas.</p> --}}
                    <p class="text-black">{!! $product->description !!}</p>


                </div>
            </div>
        </div>
    </div>

    <div class="site-section border-bottom" data-aos="fade">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 site-section-heading text-center pt-4">
                    <h2>The Team</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3">

                    <div class="block-38 text-center">
                        <div class="block-38-img">
                            <div class="block-38-header">
                                <img src="images/sw.jpg" alt="Image placeholder" class="mb-4">
                                <h3 class="block-38-heading h4">Swapnil Yadav</h3>
                                <p class="block-38-subheading">CEO/CO-FOUNDER</p>
                            </div>
                            <div class="block-38-body">
                                <p>CEO provide overall direction and leadership to the organization.
                                    This includes setting the company's vision, mission, and goals, developing
                                    and implementing strategies</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="block-38 text-center">
                        <div class="block-38-img">
                            <div class="block-38-header">
                                <img src="images/ku.jpg" alt="Image placeholder" class="mb-4">
                                <h3 class="block-38-heading h4">Kajal Upakar</h3>
                                <p class="block-38-subheading">Co-Founder</p>
                            </div>
                            <div class="block-38-body">
                                <p>Co-founder is to work alongside other founders to establish and grow the company.
                                    This includes developing the initial idea or concept, creating a business plan, and
                                    securing funding. </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="block-38 text-center">
                        <div class="block-38-img">
                            <div class="block-38-header">
                                <img src="images/sb.jpg" alt="Image placeholder" class="mb-4">
                                <h3 class="block-38-heading h4">Shubhangi Borkar</h3>
                                <p class="block-38-subheading">Marketing</p>
                            </div>
                            <div class="block-38-body">
                                <p>Marketing is a critical aspect of any business, and there are many ways to approach
                                    it.marketing plan that includes identifying target customers,
                                    developing messaging.</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-md-6 col-lg-3">
                    <div class="block-38 text-center">
                        <div class="block-38-img">
                            <div class="block-38-header">
                                <img src="images/sb.jpg" alt="Image placeholder" class="mb-4">
                                <h3 class="block-38-heading h4">Shubhangi Borkar</h3>
                                <p class="block-38-subheading">Marketing</p>
                            </div>
                            <div class="block-38-body">
                                <p>Marketing is a critical aspect of any business, and there are many ways to approach
                                    it.marketing plan that includes identifying target customers,
                                    developing messaging.</p>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-md-6 col-lg-3">
                    <div class="block-38 text-center">
                        <div class="block-38-img">
                            <div class="block-38-header">
                                <img src="images/kk.jpg" alt="Image placeholder" class="mb-4">
                                <h3 class="block-38-heading h4">kavi katekhaye</h3>
                                <p class="block-38-subheading">Sales Manager</p>
                            </div>
                            <div class="block-38-body">
                                <p>Sales Manager is to lead the sales team and develop strategies to meet sales targets .
                                    Recruiting, training, coaching, and managing the sales team to ensure they are
                                    motivated, effective. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section site-section-sm site-blocks-1 border-0" data-aos="fade">
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
@endsection
