@extends('user.layout.layout')
@section('content')

    <section class="order-detail">
        <div class="container">
            <nav aria-label="breadcrumb" >
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Cake Orders</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Vivamus elementum</li>
                </ol>
            </nav>
            <div class="row detail mb-3">
                <div class="col-lg-6 col-md-12 col-12" id="my-img">
                    <figure>
                        <img src="img/06_MitoSweets_OrderDetails_05.png" style="width: 100%; height: 100%;">
                    </figure>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="title-detail">
                        <h5>Vivamus elementum</h5>
                    </div>
                    <hr class="hr mt-4">
                    <div class="body-detail">
                        <div class="content-detail pr-4">
                            <p><b>Code:</b> A135</p>
                            <p><b>Cake-size:</b> 17/20/24cm</p>
                            <p><b>Description:</b> Maecenas tempus, tellus eget condimentum rhoncus,
                                sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
                                Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
                            </p>
                            <p><b>Notes:</b> Maecenas nec odio et ante tincidunt tempus.
                                Donec vitae sapien ut libero venenatis faucibus.</p>
                        </div>

                        <div class="row btn-detail">
                            <div class="col-md-6 col-6">
                                <button type="button" onclick="window.location.href='formorder.php'" class="btn btn-order text-uppercase">order</button>
                            </div>
                            <div class="col-md-6 col-6">
                                <!-- <button type="button" class="btn btn-contact text-uppercase">contact</button> -->
                            </div>
                        </div>
                        <hr class="hr mt-4">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal modal-img">
                <span class="close">&times;</span>
                <img class="modal-content modal-img-content" id="img01">
            </div>

            <script>
                var img = document.querySelectorAll('#my-img img'),
                modal = document.querySelector('.modal'),
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
        <div class="row">
            <div class="col-lg-3 title-related">Related Cakes</div>
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
                            <img src="img/img_Slider_little_section_8_1.jpg" class="card-img-top" >
                            <div class="card-body">
                                <h5 class="card-title" style="font-family:'font-thin';">Vivamus elementum</h5>
                                <button type="button" class="btn btn-contact text-uppercase">contact</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="imgTitle">
                        <div class="card">
                            <img src="img/img_Slider_little_section_8_2.jpg" class="card-img-top" >
                            <div class="card-body">
                                <h5 class="card-title" style="font-family:'font-thin';">Vivamus elementum</h5>
                                <button type="button" class="btn btn-contact text-uppercase">contact</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="item">
                    <div class="imgTitle">

                        <div class="card">
                        <img src="img/img_Slider_little_section_8_3.jpg" class="card-img-top" >
                        <div class="card-body">
                            <h5 class="card-title" style="font-family:'font-thin';">Vivamus elementum</h5>
                            <button type="button" class="btn btn-contact text-uppercase">contact</button>
                        </div>
                    </div>
                    </div>

                </div>
                <div class="item">
                    <div class="imgTitle">
                    <div class="card">
                        <img src="img/img_Slider_little_section_8_4.jpg" class="card-img-top" >
                        <div class="card-body">
                            <h5 class="card-title" style="font-family:'font-thin';">Vivamus elementum</h5>
                            <button type="button" class="btn btn-contact text-uppercase">contact</button>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="item">
                    <div class="imgTitle">
                    <div class="card">
                        <img src="img/img_Slider_little_section_8_4.jpg" class="card-img-top" >
                        <div class="card-body">
                            <h5 class="card-title" style="font-family:'font-thin';">Vivamus elementum</h5>
                            <button type="button" class="btn btn-contact text-uppercase">contact</button>
                        </div>
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

@endsection
