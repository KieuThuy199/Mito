@extends('user.layout.layout')
@section('content')

    <section class="order-detail">
        <div class="container mt-3">
            <nav aria-label="breadcrumb" >
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Online Class</li>
                </ol>
            </nav>
        </div>
        <div class="container">
        <div class="row detail mb-3">
            <div class="col-lg-7 col-md-12 col-12" id="my-slide">
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators slider_right_section_7">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                        <li data-target="#demo" data-slide-to="3"></li>
                    </ul>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/img_Slider_section_7.png" width="100%" >
                        </div>
                        <div class="carousel-item">
                            <img src="img/img_Slider_section_7.png"  width="100%">
                        </div>
                        <div class="carousel-item">
                            <img src="img/img_Slider_section_7.png" width="100%">
                        </div>
                        <div class="carousel-item">
                            <img src="img/img_Slider_section_7.png" width="100%">
                        </div>
                    </div>
                    <a class="carousel-control-prev " href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>

            <div class="col-lg-5 col-md-12 col-12">
                <div class="online-title-detail">
                    <h5 class="ontitle mb-3">Details</h5>
                    <i class="icon-detail"><img src="img/internet.png"></i>
                    <span>Intermediate</span><br>
                    <i class="icon-detail"><img src="img/icon_1.png"></i>
                    <span>5 Episodes</span><br>
                    <i class="icon-detail"><img src="img/icon_2.png"></i>
                    <span>1h11min</span>
                    <div class="section_7_signup" style="text-align:left"><a href="signin.php" >sign up!</a></div>
                </div>
                <div class="col-lg-12 section_7_title">
                    <button class="btn icon-show collapsed" data-toggle="collapse" data-target="#intro" style="margin:0 10px 3px 0;"></button>
                    <a href="#" class="">ABOUT THE TUTORIAL</a>
                </div>
                <div class="col-lg-12"><hr class="hr mt-0"></div>
                <div id="intro" class="col-lg-12 section_7_content collapse">
                    <h5>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec. In enim justo, rhoncus ut, justo venenatis vitae.</h5>
                    <div class="body-detail">
                    <div class="content-detail pr-4">
                        <div class="row btn-detail">
                            <div class="col-md-6 col-6 btn-trailer">
                                <button type="button" data-toggle="modal" data-target="#videoModal" class="btn text-uppercase">trailer</button>
                            </div>
                            <div class="col-md-6 col-6 btn-buy">
                                <button type="button" onclick="window.location.href='addtocart.php'" class="btn text-uppercase">buy</button>
                            </div>
                            <div class="col-lg-12"><hr class="hr mt-4 mb-0"></div>
                        </div>
                    </div>
                </div>
                </div>

            </div>
        </div>

        <div class="modal fade modal-video" id="videoModal" tabindex="-1" role="dialog">
            <button type="button" class="video-close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/YWW7QG5LBnw"></iframe>
                </div>
            </div>
            </div>
        </div>

        <div class="modal modal-img">
            <span class="close">&times;</span>
            <div id="zoom-slide" class="carousel slide" data-ride="carousel" data-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="modal-content modal-img-content" id="img01" src="img/img_Slider_section_7.png" width="100%" >
                    </div>
                    <div class="carousel-item">
                        <img class="modal-content modal-img-content" id="img01" src="img/img_Slider_section_7.png"  width="100%">
                    </div>
                    <div class="carousel-item">
                        <img class="modal-content modal-img-content" id="img01" src="img/img_Slider_section_7.png" width="100%">
                    </div>
                    <div class="carousel-item">
                        <img class="modal-content modal-img-content" id="img01" src="img/img_Slider_section_7.png" width="100%">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#zoom-slide" data-slide="prev">
                    <i class="fas fa-chevron-left"></i>
                </a>
                <a class="carousel-control-next" href="#zoom-slide" data-slide="next">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </div>
        </div>

        <script>
            var img = document.querySelectorAll('#my-slide img'),
            modal = document.querySelector('.modal-img'),
            modalImg = document.getElementById("img01");

            img.forEach(function (image) {

                image.addEventListener('click', function(event) {

                    modal.style.display = 'block';
                    modalImg.src = this.src;
                });
            });
            var span = document.getElementsByClassName("close")[0];

            span.onclick = function() {
                modal.style.display = "none";
            }
        </script>
        </div>
    </section>

    <section class="container">
        <div class="col-lg-12">
        <div class="row mt-5">
            <div class="col-lg-3 title-related">Related Classes</div>
            <div class="col-lg-9 strong"></div>
        </div>
        </div>
    </section>

    <section class="related">
            <div class="container">
                <div id="mixedSlider">
                    <div class="MS-content">
                        <div class="item">
                            <div class="imgTitle">
                            <div class="card">
                                <img src="img/img_Slider_little_section_7_1.jpg" class="card-img-top" >
                                <h6 class="content_slider">Skill : BEGINER</h6>
                            </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="imgTitle">
                            <div class="card">
                                <img src="img/img_Slider_little_section_7_2.jpg" class="card-img-top">
                                <h6 class="content_slider">Skill : BEGINER</h6>
                            </div>
                            </div>
                        </div>
                        <div class="item">
                        <div class="imgTitle">
                            <div class="card">
                            <img src="img/img_Slider_little_section_7_3.jpg" class="card-img-top" >
                            <h6 class="content_slider">Skill : BEGINER</h6>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="imgTitle">
                        <div class="card">
                            <img src="img/img_Slider_little_section_7_4.jpg" class="card-img-top" >
                            <h6 class="content_slider">Skill : BEGINER</h6>
                        </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="imgTitle">
                        <div class="card">
                            <img src="img/img_Slider_little_section_7_4.jpg" class="card-img-top" >
                            <h6 class="content_slider">Skill : BEGINER</h6>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="MS-controls">
                        <button class="MS-left"><img src="img/arrow_left.png" style="width: 50%;"></button>
                        <button class="MS-right"><img src="img/arrow_right.png" style="width: 50%;"></button>
                    </div>
                </div>
            </div>
    </section>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="js/multislider.js"></script>
    <script>
        $('#basicSlider').multislider({
                continuous: true,
                duration: 2000
            });
            $('#mixedSlider').multislider({
                duration: 500,
                interval: 3000
            });
    </script>

    <section class="container ">
        <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-3 title-related">Trending Tags</div>
            <div class="col-lg-9 strong"></div>
        </div>
        </div>
    </section>

    <section >
        <div class="container">
        <div class="col-lg-12">
            <div class="row section_7_tt">
            <div class="col-md-2 col-6">
                <button>Aliquam Lorem</button>
            </div>
            <div class="col-md-2 col-6">
                <button>Aliquam Lorem</button>
            </div>
            <div class="col-md-2 col-6">
                <button>Aliquam Lorem</button>
            </div>
            <div class="col-md-2 col-6">
                <button>Aliquam Lorem</button>
            </div>
            <div class="col-md-2 col-6">
                <button>Aliquam Lorem</button>
            </div>
            <div class="col-md-2 col-6">
                <button>Aliquam Lorem</button>
            </div>
            <div class="col-md-2 col-6">
                <button>Aliquam Lorem</button>
            </div>
            <div class="col-md-2 col-6">
                <button>Aliquam Lorem</button>
            </div>
            </div>
        </div>

        </div>
    </section>

@endsection
