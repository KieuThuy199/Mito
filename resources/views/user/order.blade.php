@extends('user.layout.layout')
@section('content')

    <section class="container-fluid">
        <div class="row">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators slider_right">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="img/img_section_4_backgroud_big.jpg" alt="New York" width="100%">
                <div class="carousel-caption slider slider_section_5">
                    <h3 class="title_slider_1 title_slider_1_section_5">Quisque Rutrum </h3>
                    <p class="title_slider_2 title_slider_2_section_5">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                    <button class="button_slider button_slider_section_5 pink" onclick="window.location.href='order.php'">Discover</button>
                </div>
                </div>
                <div class="carousel-item">
                <img src="img/img_section_4_backgroud_big.jpg" alt="Chicago" width="100%">
                <div class="carousel-caption slider slider_section_5">
                    <h3 class="title_slider_1 title_slider_1_section_5">Quisque Rutrum </h3>
                    <p class="title_slider_2 title_slider_2_section_5">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                    <button class="button_slider button_slider_section_5 pink" onclick="window.location.href='handsonclass.php'" >Discover</button>
                </div>
                </div>
                <div class="carousel-item ">
                <img src="img/img_section_4_backgroud_big.jpg" alt="Los Angeles" width="100%" >
                <div class="carousel-caption slider slider_section_5">
                    <h3 class="title_slider_1 title_slider_1_section_5">Quisque Rutrum </h3>
                    <p class="title_slider_2 title_slider_2_section_5">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                    <button class="button_slider button_slider_section_5 pink" onclick="window.location.href='onlineclass.php'">Discover</button>
                </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
            </div>
        </div>
    </section>
    <section class="bg-product">
        <div class="container">
            <div class="row pb-3">
                <nav class="col-md-9 col-md-8 col-sm-7 col-6 navbar navbar-expand-lg navbar-light bg-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarorder" aria-controls="navbarorder" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarorder">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                        <a class="nav-link text-uppercase" href="#">All<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link text-uppercase" href="#">Vivamus</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" href="#">Vivamus</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" href="#">Vivamus</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" href="#">Vivamus</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" href="#">Vivamus</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><img src="img/arrow_more.png"></a>
                        </li>
                    </ul>
                    </div>
                </nav>
                <div class="col-lg-3 col-md-4 col-sm-5 col-6 sortby">
                    <div class="col-lg-6 sortby_left">

                    </div>
                    <div class="col-lg-6 sortby_right">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sort by
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            <div class="row product-category">
                <div class="col-md-3">
                    <div class="card">
                        <img src="img/03_MitoSweets_Orders_03.jpg" class="card-img-top" >
                        <div class="card-body">
                            <h5 class="card-title" style="font-family:'font-thin';">Vivamus elementum</h5>
                            <button type="button"  onclick="window.location.href='orderdetail.php'" class="btn btn-contact text-uppercase">contact</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="img/03_MitoSweets_Orders_05.jpg" class="card-img-top" >
                        <div class="card-body">
                            <h5 class="card-title" style="font-family:'font-thin';">Vivamus elementum</h5>
                            <button type="button" onclick="window.location.href='orderdetail.php'" class="btn btn-contact text-uppercase">contact</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="img/03_MitoSweets_Orders_07.jpg" class="card-img-top" >
                        <div class="card-body">
                            <h5 class="card-title" style="font-family:'font-thin';">Vivamus elementum</h5>
                            <button type="button" onclick="window.location.href='orderdetail.php'" class="btn btn-contact text-uppercase">contact</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="img/03_MitoSweets_Orders_09.jpg" class="card-img-top" >
                        <div class="card-body">
                            <h5 class="card-title" style="font-family:'font-thin';">Vivamus elementum</h5>
                            <button type="button" onclick="window.location.href='orderdetail.php'" class="btn btn-contact text-uppercase">contact</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="img/03_MitoSweets_Orders_15.jpg" class="card-img-top" >
                        <div class="card-body">
                            <h5 class="card-title" style="font-family:'font-thin';">Vivamus elementum</h5>
                            <button type="button"  onclick="window.location.href='orderdetail.php'" class="btn btn-contact text-uppercase">contact</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="img/03_MitoSweets_Orders_16.jpg" class="card-img-top" >
                        <div class="card-body">
                            <h5 class="card-title" style="font-family:'font-thin';">Vivamus elementum</h5>
                            <button type="button" onclick="window.location.href='orderdetail.php'" class="btn btn-contact text-uppercase">contact</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="img/03_MitoSweets_Orders_17.jpg" class="card-img-top" >
                        <div class="card-body">
                            <h5 class="card-title" style="font-family:'font-thin';">Vivamus elementum</h5>
                            <button type="button" onclick="window.location.href='orderdetail.php'" class="btn btn-contact text-uppercase">contact</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="img/03_MitoSweets_Orders_18.jpg" class="card-img-top" >
                        <div class="card-body">
                            <h5 class="card-title" style="font-family:'font-thin';">Vivamus elementum</h5>
                            <button type="button" onclick="window.location.href='orderdetail.php'" class="btn btn-contact text-uppercase">contact</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="img/03_MitoSweets_Orders_23.jpg" class="card-img-top" >
                        <div class="card-body">
                            <h5 class="card-title" style="font-family:'font-thin';">Vivamus elementum</h5>
                            <button type="button"  onclick="window.location.href='orderdetail.php'" class="btn btn-contact text-uppercase">contact</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="img/03_MitoSweets_Orders_24.jpg" class="card-img-top" >
                        <div class="card-body">
                            <h5 class="card-title" style="font-family:'font-thin';">Vivamus elementum</h5>
                            <button type="button" onclick="window.location.href='orderdetail.php'" class="btn btn-contact text-uppercase">contact</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="img/03_MitoSweets_Orders_25.jpg" class="card-img-top" >
                        <div class="card-body">
                            <h5 class="card-title" style="font-family:'font-thin';">Vivamus elementum</h5>
                            <button type="button" onclick="window.location.href='orderdetail.php'" class="btn btn-contact text-uppercase">contact</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="img/03_MitoSweets_Orders_26.jpg" class="card-img-top" >
                        <div class="card-body">
                            <h5 class="card-title" style="font-family:'font-thin';">Vivamus elementum</h5>
                            <button type="button"  onclick="window.location.href='orderdetail.php'" class="btn btn-contact text-uppercase">contact</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-md-center">
                <ul class="pagination modal-1">
                    <li> <a href="#"><</a></li>
                    <li><a href="#" class="active">1</a></li>
                    <li> <a href="#">2</a></li>
                    <li> <a href="#">3</a></li>
                    <li> <a href="#">...</a></li>

                    <li> <a href="#">10</a></li>
                    <li> <a href="#">></a></li>

                </ul>
            </div>
        </div>
    </section>

@endsection
