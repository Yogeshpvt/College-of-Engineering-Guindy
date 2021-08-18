<?php
include('C:\xampp\htdocs\project\HOME PAGE\backend\project.php');
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>College of Engineering Guindy</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="sliders.css">
    <link rel="stylesheet" href="project.css">
    <link rel="shortcut icon" href="AU_logo.ico">
        <meta charset ="UTF-8"/>
		    <meta name ="keywords" content="html, css, js"/>
		    <meta name ="author" content="YOGESH V, 2020115107" />
		    <meta name ="robots" content="index,follow"/>
        <meta http-equiv ="refresh" content="30"/>
        <meta name ="language" content="EN_US"/>
        <meta name ="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>
              <header>
                <div class="container">
                        <div id="brand">
                                <img src="AU_logo.jpg" alt="logo" height="100" width="100">
                                <h1>College of Engineering Guindy</h1>
                        </div>
                        <nav>
                            <ul>
                                <li><a href="http://localhost/project/HOME%20PAGE/frontend/project%20(1).html"><span class="highlight">Home</span></a></li>
                                <li><a href="http://localhost/project/DEPARTMENTS%20PAGE/frontend/department_project.php">Departments</a></li>
                                <li><a href="http://localhost/project/CLUBS_PAGE/frontend/clubs_login.php" target="_blank">Clubs</a></li>
                                <li><a href="http://localhost/project/STUDENTS%20PAGE/frontend/students_project.php">students</a></li>
                                <li><a href="http://localhost/project/NEWS%20PAGE/index3.php">News</a></li>
                            </ul>
                        </nav>

              </div>
              </header>
              <br><br>
              <div class="body-container">
                      <div class="slider-ctr">
                                  <figure class="slide"><img src="ceg_image4.jpg" />
                                    <figcaption>
                                      <div class="title">Anna University</div>
                                      <div class="author">Path for many successful engineers</div>
                                    </figcaption>
                                  </figure>
                                  <figure class="slide"><img src="ceg_image4.jpg" />
                                    <figcaption>
                                      <div class="title">Anna University</div>
                                      <div class="author">Path for many successful engineers</div>
                                    </figcaption>
                                  </figure>
                                  <figure class="slide"><img src="ceg_images3.jpg"/>
                                    <figcaption>
                                      <div class="title">Main Gallery</div>
                                      <div class="author">Powerful people come from powerful places</div>
                                    </figcaption>
                                  </figure>
                                  <figure class="slide"><img src="ceg_images3.jpg"/>
                                    <figcaption>
                                      <div class="title">Main Gallery</div>
                                      <div class="author">Powerful people come from powerful places</div>
                                    </figcaption>
                                  </figure>
                                  <figure class="slide text-on"><img src="ceg_image.jpg" />
                                    <figcaption>
                                      <div class="title">Our Vision</div>
                                      <div class="author">Progress Through Knowledge</div>
                                    </figcaption>
                                  </figure>
                                  <div class="slider-control">
                                    <div class="control prev disabled">
                                      <div class="fa fa-chevron-left"></div>
                                    </div>
                                    <div class="control next">
                                      <div class="fa fa-chevron-right"></div>
                                    </div>
                                  </div>
                    </div>
                    <section id="boxes">
                        <h1 style="padding:15px; background-color:#941212; color:#ffeded; padding-left:170px; border-bottom: #4d0d0d 5px solid;"> STUDY AT CEG </h1>
                        <div class="container">
                        <div class="box">
                        <h3 style="color: #4d0d0d; font-size:22px;">Online BSC Programme</h3>
                        <img src="home1.jpg" alt="img1">
                        <p>A completely online programme aimed at creating a traibned programmer, proficient in application development, data science and machine learning.</p>
                        </div>
                        <div class="box">
                        <h3 style="color: #4d0d0d; font-size:22px;">Undergraduate Programmes</h3>
                        <img src="home2.jpg" alt="img2">
                        <p>The B Tech programmes at CEG encourage interdiscipilinary studies and caters to the changing scientific and technoligical needs.</p>
                        </div>
                        <div class="box">
                        <h3 style="color: #4d0d0d; font-size:22px;">Postgraduate programmes</h3>
                        <img src="home3.jpg" alt="img3">
                        <p>The post graduate programmes are specialized programmes aimed at engaging the students in learning, teaching and research.</p>
                        </div>
                    </section>
                    <section id="forms">
                          <h1>Your Queries</h1>
                          <form action = " " method = "post">
                          <input type="text" size="80" name="question" placeholder="Type Here...">
                          <button type="submit" name="submit" class="button_1">SUBMIT</button>
                          </form>
                          </div>
                    </div>
                    </div>
                    </section>
                    <section>

                  <script src="project.js"></script>
                  <script>
                    var sliderControl = document.querySelector(".slider-control");
                    var slides = document.querySelectorAll(".slide"),
                        slidesLength = slides.length;
                    var slidesArr = [].slice.call(slides);
                    slidesArr = slidesArr.reverse();
                    var slideCurrent = 0;
                    sliderControl.addEventListener("click", function(e){
                      target = e.target;
                      if(target.classList.contains("next")){
                        next = e.target,
                        prev = next.previousElementSibling,
                        nextSlide = slidesArr[slideCurrent + 1],
                        slide = slidesArr[slideCurrent];

                        slide.classList.add("slide-on");
                        slide.classList.remove("text-on");
                        nextSlide.classList.add("text-on");

                        slideCurrent += 1;
                        if(slideCurrent > 0) {
                          prev.classList.remove("disabled");
                        }
                        if(slideCurrent === slidesLength - 1){
                          next.classList.add("disabled");
                        }
                  }
                      if(target.classList.contains("prev")){
                      slideCurrent -= 1;
                      prev = e.target,
                      next = prev.nextElementSibling,
                      prevSlide = slidesArr[slideCurrent + 1],
                      slide = slidesArr[slideCurrent];
                      prevSlide.classList.remove("text-on");
                      slide.classList.remove("slide-on");
                      slide.classList.add("text-on");
                      if(slideCurrent === slidesLength - 2){
                          next.classList.remove("disabled");
                      }
                      if(slideCurrent === 0){
                          prev.classList.add("disabled");
                      }
                }
              });
              balapaCop("Image Slide", "#999");
        </script>
        </div>
        <section id="showcase">
           <div class="container">
              <h1>Follow your dreams @CEG</h1>
              <p>An institute of eminence. 228 years of quality. Top ranked institute in our country.</p>
           </div>
        </section>
   <section style="background-color:  #941212; color:#ffeded; text-align:center; padding:15px;">
      <p>Copyright  &copy  2021 <a style="color:#00a8b8; text-decoration:none;" href="http://localhost/project/HOME%20PAGE/frontend/project.php">CEG</a>. All  rights  reserved.</p>
   </section>
</body>
</html>
