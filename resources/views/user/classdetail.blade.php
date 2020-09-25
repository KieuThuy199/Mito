<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <link rel='stylesheet' type='text/css' media='screen' href='css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/bootstrap.min.css'>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
    <script src="js/bootstrap.min.js" rel="stylesheet"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
</head>
<body>
  <section>
    <div style="background: black">
        <div class="class_box_video" id="class_box_video">
          <a href="#" class="class_icon_menu" id="class_icon_menu" onclick="click_navbar_vertical()" ><img src="img/icon_show_menu.png" alt="icon_show_menu" width="30px"></a>
          <a href="profile.php" class="class_icon_share" ><img src="img/icon_share.png" alt="icon_show_menu" width="30px"></a>
          <iframe width="100%" class="embed-responsive-item" id="class_video" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen style="border: none"></iframe>
          <div class="class_subscription_box" style="background-color:#cef0cd">
                <h5>Ready To Watch More ?</h5>
                <h6>Unlock everything wwith a subscription!</h6>
                <button class="class_button">Subscribe</button>
          </div>
          <div class="class_subscription_box" style="background-color:#ffd1dc; ">
            <h5>Miniature French Desserts: Macarons, Madeleines & More </h5>
            <h6>Madeleines:</h6>
            <h4>Colette Christian</h4>
          </div>
        </div>
        <div class="navbar_vertical class_dem" id="navbar_vertical" style="padding: 0;">
            <div class="col-lg-12" >
              <div class="row class_box_close" id="class_navbar_nav" style="padding: 0 8px; background-color:#ffd1dc ">
                <div onclick="onclick_class(this.id)" class="col-lg-4 col-4 class_menu_box active2" id="class_overview">
                  <a style="cursor: pointer;" >overview</a>
                </div>
                <div onclick="onclick_class(this.id)" class="col-lg-4 col-4 class_menu_box" id="class_episodes">
                  <a style="cursor: pointer;" >episodes</a>
                </div>
                <div onclick="onclick_class(this.id)" class="col-lg-4 col-4 class_menu_box" id="class_comments">
                  <a style="cursor: pointer;" >comments</a>
                </div>
              </div>
            </div>
              <script>
                // Add active class to the current button (highlight it)
                var header = document.getElementById("class_navbar_nav");
                var btns = header.getElementsByClassName("class_menu_box");
                for (var i = 0; i < btns.length; i++) {
                  btns[i].addEventListener("click", function() {
                  var current = document.getElementsByClassName("active2");
                  current[0].className = current[0].className.replace(" active2", "");
                  this.className += " active2";
                  });
                }
                function onclick_class( name_id ){
                  var header = document.getElementById("navbar_vertical");
                  var btns = header.getElementsByClassName("class_close");
                  for (var i = 0; i < btns.length; i++) {
                    var current1 = document.getElementsByClassName("class_close");
                    current1[i].classList.add('content_none');
                  }
                  if( name_id == "class_overview"){
                    document.getElementById("class_overview_content").classList.remove('content_none');
                  }
                  if( name_id == "class_episodes"){
                    document.getElementById("class_episodes_content").classList.remove('content_none');
                  }

                  if( name_id == "class_comments"){
                    document.getElementById("class_comments_content").classList.remove('content_none');
                  }

                }
                </script>
            <div id="class_overview_content" class="class_close" >
                <div class="col-lg-12">
                  <div class="row" id="show_image_video" style="background-color: white; padding: 0 8px;">
                    <div class="col-lg-12 class_title_1">
                      <h5>Miniature French Desserts: Macarons, Madeleines & More</h5>
                    </div>
                    <div class="col-lg-4 class_icon">
                      <img src="img/class_level.png" alt="level">
                      <h5>Advanced</h5>
                    </div>
                    <div class="col-lg-4 class_icon">
                      <img src="img/class_episode.png" alt="episode">
                      <h5>Episodes</h5>
                    </div>
                    <div class="col-lg-4 class_icon">
                      <img src="img/class_time.png" alt="time">
                      <h5>3h 36min</h5>
                    </div>
                    <div class="col-lg-12 class_title_2">
                      <h5>Make popular miniature French desserts - from macarons to madeleines - and master accessible pastry techniques that will transform your baking!</h5>
                    </div>
                    <div class="col-lg-12 class_title_3">
                      <h5>Episode descriptions</h5>
                    </div>
                    <div class="col-lg-12 class_box_menu_video">
                       <img src="img/video-01.png" width="100%">
                       <h5 style="padding-top: 8px">1. Madeleines</h5>
                       <h5 style="display: inline;">Meet your instructor, pastry chef Colette Christian, as she previews the four </h5>
                      <span id="dots">...</span><span id="more"><h5 style="display: inline;">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. </h5></span>
                       <a onclick="functionreadmore()" id="myRead">READ MORE >></a>
                       <script type="text/javascript">
                         function functionreadmore() {
                          var dots = document.getElementById("dots");
                          var moreText = document.getElementById("more");
                          var btnText = document.getElementById("myRead")

                          if (dots.style.display === "none") {
                            dots.style.display = "inline";
                            btnText.innerHTML = "READMORE >>";
                            moreText.style.display = "none";
                          } else {
                            dots.style.display = "none";
                            btnText.innerHTML = "HIDE";
                            moreText.style.display = "inline";
                          }
                        }
                       </script>
                    </div>
                    <div class="col-lg-12 class_box_menu_video">
                       <img src="img/video-02.png" width="100%">
                       <h5 style="padding-top: 8px">2. Citrus Madeleines</h5>
                       <h5 style="display: inline;">Discover an alternative method for making citrus madeleines </h5>
                       <span id="dots1">...</span><span id="more1"><h5 style="display: inline;">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. </h5></span>
                       <a onclick="functionreadmore1()" id="myRead1">READ MORE >></a>
                       <script type="text/javascript">
                         function functionreadmore1() {
                          var dots = document.getElementById("dots1");
                          var moreText = document.getElementById("more1");
                          var btnText = document.getElementById("myRead1")

                          if (dots.style.display === "none") {
                            dots.style.display = "inline";
                            btnText.innerHTML = "READMORE >>";
                            moreText.style.display = "none";
                          } else {
                            dots.style.display = "none";
                            btnText.innerHTML = "HIDE";
                            moreText.style.display = "inline";
                          }
                        }
                       </script>
                    </div>
                    <div class="col-lg-12 class_box_menu_video">
                       <img src="img/video-03.png" width="100%">
                       <h5 style="padding-top: 8px">3. Lemon Tartlets</h5>
                       <h5 style="display: inline;">Create the perfect combination of sweet and tart with the next dessert, a lemon </h5>
                       <span id="dots2">...</span><span id="more2"><h5 style="display: inline;">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. </h5></span>
                       <a onclick="functionreadmore2()" id="myRead2">READ MORE >></a>
                       <script type="text/javascript">
                         function functionreadmore2() {
                          var dots = document.getElementById("dots2");
                          var moreText = document.getElementById("more2");
                          var btnText = document.getElementById("myRead2")

                          if (dots.style.display === "none") {
                            dots.style.display = "inline";
                            btnText.innerHTML = "READMORE >>";
                            moreText.style.display = "none";
                          } else {
                            dots.style.display = "none";
                            btnText.innerHTML = "HIDE";
                            moreText.style.display = "inline";
                          }
                        }
                       </script>
                    </div>
                    <div class="col-lg-12 class_box_menu_video">
                       <img src="img/video-04.png" width="100%">
                       <h5 style="padding-top: 8px">4. Basic French Macaron</h5>
                       <h5 style="display: inline;">Master the quintessential French sweet, the macaron. Find out how to prepare </h5>
                       <span id="dots3">...</span><span id="more3"><h5 style="display: inline;">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. </h5></span>
                       <a onclick="functionreadmore3()" id="myRead3">READ MORE >></a>
                       <script type="text/javascript">
                         function functionreadmore3() {
                          var dots = document.getElementById("dots3");
                          var moreText = document.getElementById("more3");
                          var btnText = document.getElementById("myRead3")

                          if (dots.style.display === "none") {
                            dots.style.display = "inline";
                            btnText.innerHTML = "READMORE >>";
                            moreText.style.display = "none";
                          } else {
                            dots.style.display = "none";
                            btnText.innerHTML = "HIDE";
                            moreText.style.display = "inline";
                          }
                        }
                       </script>
                    </div>
                    <div class="col-lg-12 class_box_menu_video">
                       <img src="img/video-05.png" width="100%">
                       <h5 style="padding-top: 8px">5. Customizing & Filling Macarons</h5>
                       <h5 style="display: inline;">Colette will show you how to infuse your macarons with even more flavor and </h5>
                       <span id="dots4">...</span><span id="more4"><h5 style="display: inline;">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. </h5></span>
                       <a onclick="functionreadmore4()" id="myRead4">READ MORE >></a>
                       <script type="text/javascript">
                         function functionreadmore4() {
                          var dots = document.getElementById("dots4");
                          var moreText = document.getElementById("more4");
                          var btnText = document.getElementById("myRead4")

                          if (dots.style.display === "none") {
                            dots.style.display = "inline";
                            btnText.innerHTML = "READMORE >>";
                            moreText.style.display = "none";
                          } else {
                            dots.style.display = "none";
                            btnText.innerHTML = "HIDE";
                            moreText.style.display = "inline";
                          }
                        }
                       </script>
                    </div>
                    <div class="col-lg-12 class_box_menu_video">
                       <img src="img/video-06.png" width="100%">
                       <h5 style="padding-top: 8px">6. Classic Opera Cake</h5>
                       <h5 style="display: inline;">Build on several of the techniques you've already learned as you make the </h5>
                       <span id="dots5">...</span><span id="more5"><h5 style="display: inline;">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. </h5></span>
                       <a onclick="functionreadmore5()" id="myRead5">READ MORE >></a>
                       <script type="text/javascript">
                         function functionreadmore5() {
                          var dots = document.getElementById("dots5");
                          var moreText = document.getElementById("more5");
                          var btnText = document.getElementById("myRead5")

                          if (dots.style.display === "none") {
                            dots.style.display = "inline";
                            btnText.innerHTML = "READMORE >>";
                            moreText.style.display = "none";
                          } else {
                            dots.style.display = "none";
                            btnText.innerHTML = "HIDE";
                            moreText.style.display = "inline";
                          }
                        }
                       </script>
                    </div>
                    <div class="col-lg-12 class_box_menu_video">
                       <img src="img/video-07.png" width="100%">
                       <h5 style="padding-top: 8px">7. Assembling the Opera Cake</h5>
                       <h5 style="display: inline;">It's time to raise the curtain on your Opera cake! Discover how this cake</h5>
                       <span id="dots6">...</span><span id="more6"><h5 style="display: inline;">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. </h5></span>
                       <a onclick="functionreadmore6()" id="myRead6">READ MORE >></a>
                       <script type="text/javascript">
                         function functionreadmore6() {
                          var dots = document.getElementById("dots6");
                          var moreText = document.getElementById("more6");
                          var btnText = document.getElementById("myRead6")

                          if (dots.style.display === "none") {
                            dots.style.display = "inline";
                            btnText.innerHTML = "READMORE >>";
                            moreText.style.display = "none";
                          } else {
                            dots.style.display = "none";
                            btnText.innerHTML = "HIDE";
                            moreText.style.display = "inline";
                          }
                        }
                       </script>
                    </div>
                    <div class="col-lg-12  class_title_4">
                      <h5>Related Classes</h5>
                    </div>
                    <div class="col-md-6 col-sm-6 col-12">
                      <figure class="img_section_7 class_menu_image" style="background: url(img/01_MitoSweets_OnlineClass_03.jpg) no-repeat center; background-size: cover;" >
                          <div class="hover_section_7">
                              <a href="onlinedetail.php">LEARN MORE</a>
                          </div>
                          <div class="hover_title_section_7">
                              <a href="#">SKILL: INTERMEDIATE</a>
                          </div>
                      </figure>
                    </div>
                    <div class="col-md-6 col-sm-6 col-12">
                        <figure class="img_section_7 class_menu_image" style="background: url(img/01_MitoSweets_OnlineClass_05.jpg) no-repeat center; background-size: cover; " >
                            <div class="hover_section_7">
                                <a href="onlinedetail.php">LEARN MORE</a>
                            </div>
                            <div class="hover_title_section_7">
                                <a href="#">SKILL: INTERMEDIATE</a>
                            </div>
                        </figure>
                    </div>
                    <div class="col-md-6 col-sm-6 col-12">
                        <figure class="img_section_7 class_menu_image" style="background: url(img/01_MitoSweets_OnlineClass_07.jpg) no-repeat center; background-size: cover; " >
                            <div class="hover_section_7">
                                <a href="onlinedetail.php">LEARN MORE</a>
                            </div>
                            <div class="hover_title_section_7">
                                <a href="#">SKILL: INTERMEDIATE</a>
                            </div>
                        </figure>
                    </div>
                    <div class="col-md-6 col-sm-6 col-12">
                        <figure class="img_section_7 class_menu_image" style="background: url(img/01_MitoSweets_OnlineClass_12.jpg) no-repeat center; background-size: cover; " >
                            <div class="hover_section_7">
                                <a href="onlinedetail.php">LEARN MORE</a>
                            </div>
                            <div class="hover_title_section_7">
                                <a href="#">SKILL: INTERMEDIATE</a>
                            </div>
                        </figure>
                    </div>
                    <div class="col-lg-12 class_title_5">
                      <h5>Related Classes</h5>
                    </div>
                    <div class="col-md-4 col-4 class_al">
                      <button>Aliquam Lorem</button>
                    </div>
                    <div class="col-md-4 col-4 class_al">
                      <button>Aliquam Lorem</button>
                    </div>
                    <div class="col-md-4 col-4 class_al">
                      <button>Aliquam Lorem</button>
                    </div>
                    <div class="col-md-4 col-4 class_al">
                      <button>Aliquam Lorem</button>
                    </div>
                    <div class="col-md-4 col-4 class_al">
                      <button>Aliquam Lorem</button>
                    </div>
                  </div>
                </div>
            </div>
            <div id="class_episodes_content" class="class_close content_none" style="background-color: white" >
              <div class="col-lg-12 class_category_box">
                <div class="class_category_main">
                  <h5>1. Madeleines <span> (18 min) </span><button  class="btn icon-show1 collapsed" data-toggle="collapse" data-target="#intro2" style="margin:-10px 10px 3px 0; float: right;"></button></h5>
                  <div class="class_category collapse" id="intro2">
                    <a class="col-lg-12" href="" >Clickable Dropdown</a>
                    <a class="col-lg-12" href="" >Clickable Dropdown</a>
                    <a class="col-lg-12" href="" >Clickable Dropdown</a>
                    <a class="col-lg-12" href="" >Clickable Dropdown</a>
                    <a class="col-lg-12" href="" >Clickable Dropdown</a>
                  </div>
                </div>
              </div>
               <div class="col-lg-12 class_category_box">
                <div class="class_category_main">
                  <h5>2. Citrus Madeleines <span> (25 min) </span><button  class="btn icon-show1 collapsed" data-toggle="collapse" data-target="#intro3" style="margin:-10px 10px 3px 0; float: right;"></button></h5>
                  <div class="class_category collapse" id="intro3">
                    <a class="col-lg-12" href="" >Clickable Dropdown</a>
                    <a class="col-lg-12" href="" >Clickable Dropdown</a>
                    <a class="col-lg-12" href="" >Clickable Dropdown</a>
                    <a class="col-lg-12" href="" >Clickable Dropdown</a>
                    <a class="col-lg-12" href="" >Clickable Dropdown</a>
                  </div>
                </div>
              </div>
               <div class="col-lg-12 class_category_box">
                <div class="class_category_main">
                  <h5>3. Lemon Tartlets <span> (22 min) </span><button  class="btn icon-show1 collapsed" data-toggle="collapse" data-target="#intro4" style="margin:-10px 10px 3px 0; float: right;"></button></h5>
                  <div class="class_category collapse" id="intro4">
                    <a class="col-lg-12" href="" >Clickable Dropdown</a>
                    <a class="col-lg-12" href="" >Clickable Dropdown</a>
                    <a class="col-lg-12" href="" >Clickable Dropdown</a>
                    <a class="col-lg-12" href="" >Clickable Dropdown</a>
                    <a class="col-lg-12" href="" >Clickable Dropdown</a>
                  </div>
                </div>
              </div>
            </div>
            <div id="class_comments_content" class="class_close content_none" style="background-color: white" >
              <h3 style="margin:0px">comments_content</h3>
            </div>
            <div class="col-lg-12" style="text-align: center; display: block; background-color:#ffd1dc ">
              <a href="index.php" class="class_logo_footer" >
                <img  src="img/MITO SWEETS.png" width="200px">
              </a>
              <div class="row class_title_6">
                <div class="col-lg-7" style="text-align: center;">
                  <h5>© Copyright 2020 bởi MITO SWEETS</h5>
                </div>
                <div class="col-lg-5" style="text-align: center;">
                  <a href="#"><img src="img/class_YOUTUBE.png" alt="youtube"></a>
                  <a href="#"><img src="img/class_FACEBOOK.png" alt="facebook"></a>
                  <a href="#"><img src="img/class_INSTAGRAM.png" alt="instagram"></a>
                </div>
              </div>
            </div>
        </div>
    </div>
  </section>
          <script type="text/javascript">
             if(window.matchMedia("(max-width: 768px)").matches)
              {
                document.getElementById("navbar_vertical").classList.add('col-lg-12');
                document.getElementById("class_box_video").classList.add('col-lg-l2');
                document.getElementById("navbar_vertical").style.position = "relative";
                document.getElementById("navbar_vertical").style.transform = "none";
                document.getElementById("navbar_vertical").style.overflow = "inherit";
                document.getElementById("class_close").style.marginTop="1px";
                document.getElementById("class_icon_menu").style.display="none";
                document.getElementById("class_icon_menu").style.display="none";
              }
             if(window.matchMedia("(max-width: 500px)").matches)
              {
                document.getElementById("navbar_vertical").classList.add('col-lg-12');
                document.getElementById("class_box_video").classList.add('col-lg-l2');
                document.getElementById("navbar_vertical").style.position = "relative";
                document.getElementById("navbar_vertical").style.transform = "none";
                document.getElementById("navbar_vertical").style.overflow = "inherit";
                document.getElementById("class_close").style.marginTop="1px";
                document.getElementById("class_icon_menu").style.display="none";
                document.getElementById("class_icon_menu").style.display="none";
              }

          </script>
          <script>
            function click_navbar_vertical(){
                var classnameopen= document.getElementsByClassName("class_dem");
                if(classnameopen.length == 1){
                  document.getElementById("navbar_vertical").style.WebkitTransform = "translateX(0px)";
                    // Code for IE9
                  document.getElementById("navbar_vertical").style.msTransform = "translateX(0px)";
                  // Standard syntax
                  document.getElementById("navbar_vertical").style.transform = "translateX(0px)";
                  document.getElementById("class_box_video").style.paddingLeft = "450px";
                  document.getElementById("class_box_video").style.paddingRight = "0";
                  document.getElementById("class_video").style.height = "433px";
                  document.getElementById("class_icon_menu").style.left = "470px";
                  document.getElementById("class_icon_menu").classList.add('class_dem');
                }
                else{
                   document.getElementById("navbar_vertical").style.WebkitTransform = "translateX(-450px)";
                // Code for IE9
                  document.getElementById("navbar_vertical").style.msTransform = "translateX(-450px)";
                  // Standard syntax
                  document.getElementById("navbar_vertical").style.transform = "translateX(-450px)";
                  document.getElementById("class_box_video").style.paddingLeft = "0";
                  document.getElementById("class_icon_menu").style.left = "20px";
                  document.getElementById("class_box_video").style.paddingRight = "0";
                  document.getElementById("class_icon_menu").classList.remove('class_dem');
                  document.getElementById("class_video").style.height = "600px";
                }
              }
          </script>

</body>
</html>
