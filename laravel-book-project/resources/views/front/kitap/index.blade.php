@extends("layouts.app")
@section("content")
    <!--start-breadcrumbs-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-main">
                <ol class="breadcrumb">
                    <li><a href="{{route("index")}}">Anasayfa</a></li>
                    <li class="active">{{$data[0]['name']}}</li>
                </ol>
            </div>
        </div>
    </div>
    <!--end-breadcrumbs-->
    <!--start-single-->
    <div class="single contact">
        <div class="container">
            <div class="single-main">
                <div class="col-md-12 single-main-left">
                    <div class="sngl-top">
                        <div class="col-md-3 single-top-left">
                            <div class="flexslider">
                                <ul class="slides">

                                    <li data-thumb="{{asset(\App\Helper\mHelper::largeImage($data[0]['image']))}}">
                                        <div class="thumb-image"><img
                                                src="{{asset(\App\Helper\mHelper::largeImage($data[0]['image']))}}"
                                                data-imagezoom="true"
                                                class="img-responsive" alt=""/></div>
                                    </li>

                                </ul>
                            </div>
                            <!-- FlexSlider -->
                            <script src="{{asset("frontend_css/js/imagezoom.js")}}"></script>
                            <script defer src="{{asset("frontend_css/js/jquery.flexslider.js")}}"></script>
                            <link rel="stylesheet" href="{{asset("frontend_css/css/flexslider.css")}}" type="text/css"
                                  media="screen"/>

                            <script>
                                // Can also be used with $(document).ready()
                                $(window).load(function () {
                                    $('.flexslider').flexslider({
                                        animation: "slide",
                                        controlNav: "thumbnails"
                                    });
                                });
                            </script>
                        </div>
                        <div class="col-md-9 single-top-right">
                            <div class="single-para simpleCart_shelfItem">
                                <h2>{{$data[0]['name']}}</h2>
                                <div class="star-on">
                                    <div class="review">
                                        <a href="#"> 1 customer review </a>

                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <h5 class="item_price">₺ {{$data[0]['fiyat']}}</h5>
                                <p>{{$data[0]['aciklama']}}</p>
                                <div class="available">
                                    <ul>
                                        <li>
                                            Kategori: {{\App\Models\Kategoriler::getField($data[0]['kategoriid'],"name")}}</li>
                                        <li>Yayın
                                            Evi: {{\App\Models\YayinEvi::getField($data[0]['yayineviid'],"")}}</li>
                                        <li>Yazar:</li>
                                        <div class="clearfix"></div>
                                    </ul>
                                </div>
                                <ul class="tag-men">
                                    <li><span>TAG</span>
                                        <span class="women1">: Women,</span></li>
                                    <li><span>SKU</span>
                                        <span class="women1">: CK09</span></li>
                                </ul>
                                <a href="#" class="add-cart item_add">ADD TO CART</a>

                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="tabs">
                        <ul class="menu_drop">
                            <li class="item1"><a href="#"><img src="{{asset("frontend_css/images/arrow.png")}}" alt="">Description</a>
                                <ul>
                                    <li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                            elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                            aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                                            tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                                            consequat.</a></li>
                                    <li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in
                                            vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla
                                            facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                                            praesent luptatum zzril delenit augue duis dolore</a></li>
                                    <li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc
                                            putamus parum claram, anteposuerit litterarum formas humanitatis per seacula
                                            quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur
                                            parum clari, fiant sollemnes </a></li>
                                </ul>
                            </li>
                            <li class="item2"><a href="#"><img src="{{asset("frontend_css/images/arrow.png")}}" alt="">Additional
                                    information</a>
                                <ul>
                                    <li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in
                                            vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla
                                            facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                                            praesent luptatum zzril delenit augue duis dolore</a></li>
                                    <li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc
                                            putamus parum claram, anteposuerit litterarum formas humanitatis per seacula
                                            quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur
                                            parum clari, fiant sollemnes </a></li>
                                </ul>
                            </li>
                            <li class="item3"><a href="#"><img src="{{asset("frontend_css/images/arrow.png")}}" alt="">Reviews
                                    (10)</a>
                                <ul>
                                    <li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                            elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                            aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                                            tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                                            consequat.</a></li>
                                    <li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in
                                            vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla
                                            facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                                            praesent luptatum zzril delenit augue duis dolore</a></li>
                                    <li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc
                                            putamus parum claram, anteposuerit litterarum formas humanitatis per seacula
                                            quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur
                                            parum clari, fiant sollemnes </a></li>
                                </ul>
                            </li>
                            <li class="item4"><a href="#"><img src="{{asset("frontend_css/images/arrow.png")}}" alt="">Helpful
                                    Links</a>
                                <ul>
                                    <li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in
                                            vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla
                                            facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                                            praesent luptatum zzril delenit augue duis dolore</a></li>
                                    <li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc
                                            putamus parum claram, anteposuerit litterarum formas humanitatis per seacula
                                            quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur
                                            parum clari, fiant sollemnes </a></li>
                                </ul>
                            </li>
                            <li class="item5"><a href="#"><img src="{{asset("frontend_css/images/arrow.png")}}" alt="">Make
                                    A Gift</a>
                                <ul>
                                    <li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                            elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                            aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                                            tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                                            consequat.</a></li>
                                    <li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in
                                            vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla
                                            facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                                            praesent luptatum zzril delenit augue duis dolore</a></li>
                                    <li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc
                                            putamus parum claram, anteposuerit litterarum formas humanitatis per seacula
                                            quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur
                                            parum clari, fiant sollemnes </a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="latestproducts">
                        <div class="product-one">
                            <div class="col-md-4 product-left p-left">
                                <div class="product-main simpleCart_shelfItem">
                                    <a href="single.html" class="mask"><img class="img-responsive zoom-img"
                                                                            src="{{asset("frontend_css/images/p-1.png")}}"
                                                                            alt=""/></a>
                                    <div class="product-bottom">
                                        <h3>Smart Watches</h3>
                                        <p>Explore Now</p>
                                        <h4><a class="item_add" href="#"><i></i></a> <span
                                                class=" item_price">$ 329</span></h4>
                                    </div>
                                    <div class="srch">
                                        <span>-50%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 product-left p-left">
                                <div class="product-main simpleCart_shelfItem">
                                    <a href="single.html" class="mask"><img class="img-responsive zoom-img"
                                                                            src="{{asset("frontend_css/images/p-2.png")}}"
                                                                            alt=""/></a>
                                    <div class="product-bottom">
                                        <h3>Smart Watches</h3>
                                        <p>Explore Now</p>
                                        <h4><a class="item_add" href="#"><i></i></a> <span
                                                class=" item_price">$ 329</span></h4>
                                    </div>
                                    <div class="srch">
                                        <span>-50%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 product-left p-left">
                                <div class="product-main simpleCart_shelfItem">
                                    <a href="single.html" class="mask"><img class="img-responsive zoom-img"
                                                                            src="{{asset("frontend_css/images/p-3.png")}}"
                                                                            alt=""/></a>
                                    <div class="product-bottom">
                                        <h3>Smart Watches</h3>
                                        <p>Explore Now</p>
                                        <h4><a class="item_add" href="#"><i></i></a> <span
                                                class=" item_price">$ 329</span></h4>
                                    </div>
                                    <div class="srch">
                                        <span>-50%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--end-single-->
@endsection
