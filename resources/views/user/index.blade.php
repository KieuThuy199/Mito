@extends('user.layout.main')
@section('content-index')

    <section class="container-fluid ">
        <div class="row background_section_2_big">
          <div class="col-lg-12 khoancach"></div>
          <div class="col-lg-9 col-2">

          </div>
          <div class="col-lg-2 col-8 background_section_2">
            <img src="img/ing_section_2.png" width="50%">
            <h5>Aenean imperdiet</h5>
            <h6>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque ipsum.</h6>
            <a href="onlinedetail.php">see more ></a>
          </div>
          <div class="col-lg-1 col-2">
          </div>
          <div class="col-lg-7">
              <h2 class="title_main_section title_main_section_2">ONLINE CLASSES</h2>
              <h5 class="title_section title_section_2">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</h5>
              <section class="center">
                <button class="button_section_2 button_section" onclick="window.location.href='onlineclass.php'">Discover</button>
              </section>
          </div>
          <div class="col-lg-5">
          </div>
        </div>
    </section>

    <section class="container-fluid ">
      <div class="row background_section_3_big">
        <div class="col-lg-12 khoancach"></div>
        <div class="col-lg-9 col-2">
        </div>
        <div class="col-lg-2 col-8 background_section_3">
          <img src="img/ing_section_3.png" width="50%">
          <h5>Aenean imperdiet</h5>
          <h6>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque ipsum.</h6>
          <a href="handsondetail.php">see more ></a>
        </div>
        <div class="col-lg-1 col-2">
        </div>
        <div class="col-lg-7">
            <h2 class="title_main_section title_main_section_3">HANDS ON CLASSES </h2>
            <h5 class="title_section title_section_3">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</h5>
            <section class="center">
              <button class="button_section_3 button_section" onclick="window.location.href='handsonclass.php'">Discover</button>
            </section>
        </div>
        <div class="col-lg-5">
        </div>
      </div>
    </section>

    <section class="container-fluid ">
      <div class="row background_section_4_big">
        <div class="col-lg-12 khoancach"></div>
        <div class="col-lg-9 col-2">
        </div>
        <div class="col-lg-2 col-8 background_section_4">
          <img src="img/ing_section_4.png" width="50%">
          <h5>Aenean imperdiet</h5>
          <h6>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque ipsum.</h6>
          <a href="orderdetail.php">see more ></a>
        </div>
        <div class="col-lg-1 col-2">
        </div>
        <div class="col-lg-7">
            <h2 class="title_main_section title_main_section_4">Cake odders</h2>
            <h5 class="title_section title_section_4">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</h5>
            <section class="center">
              <button class="button_section_4 button_section" onclick="window.location.href='order.php'">Discover</button>
            </section>
        </div>
        <div class="col-lg-5">
        </div>
      </div>
    </section>

    <section class="container-fluid computer">
      <div class="row">
          <div class="col-lg-7">
              <div class="box_section_1">
                  <h2 class="title_main_section_1 title_main_section">About me</h2>
                  <h5 class="title_section_1 title_section">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</h5>
                  <button class="button_section_1 button_section">Discover</button>
              </div>
          </div>
          <div class="col-lg-5 img_section_1" >
              <img src="img/anh1.png" alt="anh1" width="80%">
          </div>
      </div>
    </section>

    <section class="container-fluid phone">
      <div class="row">
          <div class="col-lg-5 img_section_1" >
              <img src="img/anh1.png" alt="anh1" width="80%">
          </div>
          <div class="col-lg-7">
              <div class="box_section_1">
                  <h2 class="title_main_section_1 title_main_section">About me</h2>
                  <h5 class="title_section_1 title_section">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</h5>
                  <button class="button_section_1 button_section" onclick="window.location.href='aboutme.php'">Discover</button>
              </div>
          </div>

      </div>
    </section>

    <!--Story-->

    <section class="story py-5">
        <div class="container">
            <div class="row">
                <h2 class="col-md-12 text-center text-uppercase" style="font-family:'font-medium';">My Stories</h2>
                <hr class="hr mt-4 mb-0">
            </div>
            <div class="row pt-5">
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/MitoSweets_Homepage_01.jpg" class="card-img-top" >
                        <div class="card-body">
                            <a href="schedules.php">
                              <h5 class="card-title" style="font-family:'font-medium'; font-weight:100;">Schedules &nbsp;<i class="fas fa-angle-right"></i></h5>
                            </a>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                      <div class="card">
                        <img src="img/MitoSweets_Homepage_11.jpg" class="card-img-top">
                        <div class="card-body">
                            <a href="freetutorials.php">
                              <h5 class="card-title" style="font-family:'font-medium';font-weight:100;">Free Tutorials &nbsp;<i class="fas fa-angle-right"></i></h5>
                            </a>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/MitoSweets_Homepage_02.jpg" class="card-img-top">
                        <div class="card-body">
                            <a href="galleries.php">
                              <h5 class="card-title" style="font-family:'font-medium';font-weight:100;">Galleries &nbsp;<i class="fas fa-angle-right"></i></h5>
                            </a>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/MitoSweets_Homepage_08.jpg" class="card-img-top">
                        <div class="card-body">
                            <a href="news.php">
                              <h5 class="card-title" style="font-family:'font-medium'; font-weight:100;">News &nbsp;<i class="fas fa-angle-right"></i></h5>
                            </a>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                      <div class="card">
                        <img src="img/MitoSweets_Homepage_12.png" class="card-img-top">
                        <div class="card-body">
                            <a href="promotions.php">
                              <h5 class="card-title" style="font-family:'font-medium';font-weight:100;">Promotions &nbsp;<i class="fas fa-angle-right"></i></h5>
                            </a>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
    <!--Story-->

    <!--Follow-->
    <section class="album py-5">
        <div class="container">
            <div class="row">
                <h2 class="col-md-12 text-center" style="font-family:'font-medium';">Follow us @mitosweets</h2>
                <hr class="hr mt-4 mb-0">
            </div>
            <div class="row pt-5" id="my-img">
                <div class="col-md-3">
                    <figure>
                      <a href="https://www.instagram.com/mitosweets/?hl=vi&fbclid=IwAR2uPiAxrkcwGLmO1pEKz45nUn3eIguFT01eaLA7wfswHgGesbs-zndMOns" target="_blank">
                        <img src="img/MitoSweets_Homepage_03.png" style="width: 100%; height: 100%;">
                      </a>
                    </figure>
                </div>
                <div class="col-md-3">
                    <figure>
                      <a href="https://www.instagram.com/mitosweets/?hl=vi&fbclid=IwAR2uPiAxrkcwGLmO1pEKz45nUn3eIguFT01eaLA7wfswHgGesbs-zndMOns" target="_blank">
                        <img src="img/MitoSweets_Homepage_05.jpg" style="width: 100%; height: 100%;">
                      </a>
                    </figure>
                </div>
                <div class="col-md-3">
                    <figure>
                      <a href="https://www.instagram.com/mitosweets/?hl=vi&fbclid=IwAR2uPiAxrkcwGLmO1pEKz45nUn3eIguFT01eaLA7wfswHgGesbs-zndMOns" target="_blank">
                        <img src="img/MitoSweets_Homepage_07.jpg" style="width: 100%; height: 100%;">
                      </a>
                    </figure>
                </div>
                <div class="col-md-3">
                    <figure>
                      <a href="https://www.instagram.com/mitosweets/?hl=vi&fbclid=IwAR2uPiAxrkcwGLmO1pEKz45nUn3eIguFT01eaLA7wfswHgGesbs-zndMOns" target="_blank">
                        <img  src="img/MitoSweets_Homepage_09.jpg" style="width: 100%; height: 100%;">
                      </a>
                    </figure>
                </div>
                <div class="col-md-3">
                    <figure>
                      <a href="https://www.instagram.com/mitosweets/?hl=vi&fbclid=IwAR2uPiAxrkcwGLmO1pEKz45nUn3eIguFT01eaLA7wfswHgGesbs-zndMOns" target="_blank">
                        <img  src="img/MitoSweets_Homepage_15.jpg" style="width: 100%; height: 100%;">
                      </a>
                    </figure>
                </div>
                <div class="col-md-3">
                    <figure>
                      <a href="https://www.instagram.com/mitosweets/?hl=vi&fbclid=IwAR2uPiAxrkcwGLmO1pEKz45nUn3eIguFT01eaLA7wfswHgGesbs-zndMOns" target="_blank">
                        <img  src="img/MitoSweets_Homepage_16.jpg" style="width: 100%; height: 100%;">
                      </a>
                    </figure>
                </div>
                <div class="col-md-3">
                    <figure>
                      <a href="https://www.instagram.com/mitosweets/?hl=vi&fbclid=IwAR2uPiAxrkcwGLmO1pEKz45nUn3eIguFT01eaLA7wfswHgGesbs-zndMOns" target="_blank">
                        <img  src="img/MitoSweets_Homepage_17.jpg" style="width: 100%; height: 100%;">
                      </a>
                    </figure>
                </div>
                <div class="col-md-3">
                    <figure>
                      <a href="https://www.instagram.com/mitosweets/?hl=vi&fbclid=IwAR2uPiAxrkcwGLmO1pEKz45nUn3eIguFT01eaLA7wfswHgGesbs-zndMOns" target="_blank">
                        <img src="img/MitoSweets_Homepage_18.jpg" style="width: 100%; height: 100%;">
                      </a>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!--Follow-->

@endsection

