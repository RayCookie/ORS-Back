<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORSC</title>
    <link rel="stylesheet" href="css/Home.css">
    <link rel="stylesheet" href="css/StandardStyle.css">
    <link rel="stylesheet" href="css/suite.css">
</head>
<body>
    <section id="navbar">
        <nav>
            <a href=""><img src="src/Logo 1.svg" alt="Logo"></a>
            <ul>
                <li>
                    <a href="/Acceuil">HOME</a>
                    <a href="/biblio">Bibliothèque</a>
                    <a href="/blog">BLOG</a>
                    <a href="/events">NOS EVENEMENTS</a>
                    <a href="/aboutus">Qui-Sommes nous?</a>
                    <a href="/contactus">CONTACT US</a>
                </li>
            </ul>
        </nav>
    </section>
    <div class="container">
            <div class="slideshow-container">
            <div class="mySlides fade">
              <img class = "bg" src="image/1st.jpg" style="width:100%">
              <div class="text">
                <h1>Happening Now - Article</h1>
                <h2>La création d’une méthode exacte pour</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in.</p>
              </div>
              <button class="lire">LIRE PLUS</button>

            </div>

            <div class="mySlides fade">
              <img class="bg" src="image/2nd.jpg" style="width:100%">
              <div class="text">
                  <h1>Happening Now - Article</h1>
                  <h2>La création d’une méthode exacte pour</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in.</p>
              </div>
              <button class="lire">LIRE PLUS</button>

            </div>

            <div class="mySlides fade">
              <img class="bg" src="image/3rd.jpg" style="width:100%">
              <div class="text"><h1>Happening Now - Article</h1>
                <h2>La création d’une méthode exacte pour</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod nnnnnntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in.</p>
            </div>
            <button class="lire">LIRE PLUS</button>
            </div>
            <a class="prev" onclick="plusSlides(-1)"><img class = "navi" src="src/Shape (2).svg" alt="" srcset=""></a>
            <a class="next" onclick="plusSlides(1)"><img class  = "navi" src="src/arrow right.svg" alt="" srcset=""></a>
            <!-- <div class = "dots" style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
              </div> -->
            </div>
            <div class="nous">
                <div id="overlay">
                    <h1>Qui somme-nous ?</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in.</p>
                    <button class="lirenous">LIRE PLUS</button>

                </div>
                <img src=".image/1st.jpg" alt="" srcset="">
            </div>
            <div class="align">
                <div class="hi">
                    <div class = "mimi">
                    <h1>Nos événements</h1>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
                                            </p>

                    </div>
                    <div class="globe">

                    <div class="mySlidess fade">
                      <img class="imge" src="image/3rd.jpg" style="width:100%">
                    </div>

                    <div class="mySlidess fade">
                      <img class = "imge" src="image/1st.jpg" style="width:100%">
                    </div>

                    <div class="mySlidess fade">
                      <img class="imge" src="image/3rd.jpg" style="width:100%">
                    </div>


                    </div>
            </div>

                        <button class="btn">LIRE PLUS</button>

                    <br>
                    <script>
                        var slideIndex = 1;
                        showSlidess(slideIndex);

                        function plusSlidess(n) {
                          showSlidess(slideIndex += n);
                        }

                        function currentSlide(n) {
                          showSlidess(slideIndex = n);
                        }

                        function showSlidess(n) {
                          var i;
                          var slides = document.getElementsByClassName("mySlidess");
                          if (n > slides.length) {slideIndex = 1}
                          if (n < 1) {slideIndex = slides.length}
                          for (i = 0; i < slides.length; i++) {
                              slides[i].style.display = "none";
                          }
                          slides[slideIndex-1].style.display = "block";
                        }
                        </script>
            </div>
            <div class="align">
                <div class="hi">
                  <div class="globe">

                    <img src="src/Vector (2).svg" alt="" srcset="">
                    </div>
                    <div class = "mimi">
                    <h1>Bibliothèque en ligne</h1>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
                                            </p>

                    </div>


            </div>
            <button class="btn">LIRE PLUS</button>

                <br>
                <script>
                    var slideIndex = 1;
                    showSlidessss(slideIndex);

                    function plusSlidessss(n) {
                      showSlidessss(slideIndex += n);
                    }

                    function currentSlide(n) {
                      showSlidessss(slideIndex = n);
                    }

                    function showSlidessss(n) {
                      var i;
                      var slides = document.getElementsByClassName("mySlidessss");
                      if (n > slides.length) {slideIndex = 1}
                      if (n < 1) {slideIndex = slides.length}
                      for (i = 0; i < slides.length; i++) {
                          slides[i].style.display = "none";
                      }
                      slides[slideIndex-1].style.display = "block";
                    }
                    </script>
        </div>
        <div class="align">
            <div class="hi">
                <div class = "mimi">
                <h1>BLOG</h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
                                        </p>

                </div>
                <div class="globe">
                <img src="src/Vector (3).svg" alt="">
                </div>
        </div>
            <button class="btn" >LIRE PLUS</button>

            <br>
            <script>
                var slideIndex = 1;
                showSlidesss(slideIndex);

                function plusSlidesss(n) {
                  showSlidesss(slideIndex += n);
                }

                function currentSlide(n) {
                  showSlidesss(slideIndex = n);
                }

                function showSlidesss(n) {
                  var i;
                  var slides = document.getElementsByClassName("mySlidesss");
                  if (n > slides.length) {slideIndex = 1}
                  if (n < 1) {slideIndex = slides.length}
                  for (i = 0; i < slides.length; i++) {
                      slides[i].style.display = "none";
                  }
                  slides[slideIndex-1].style.display = "block";
                }
                </script>
    </div>
    </div>
    <footer>
        <div class="contenu">
            <div class="logo">
                <a href=""><img src="src/Logo 4.svg" alt=""></img></a>
            </div>
            <div class="rect">
                <img src="/src/Rectangle 9.svg" alt="">
            </div>
            <div class="social">
                <ul>
                    <li>
                        <a href="https://www.linkedin.com/company/orsocietyclub?fbclid=IwAR38yLH5DUF9r7oUhyzPtgQT6vG_tffAkvamrm_drarF-7ug9V2Krnuazsk"><img src="src/in.svg" alt=""></a>
                        <a href="https://www.instagram.com/orsocietyclub/?utm_medium=copy_link&fbclid=IwAR39nGZ4w474f2mymOJ7iQd-xC8xuw_J2aKJpy0qL7p0CNDfFPukeu2jf1I"><img src="src/ig.svg" alt=""></a>
                        <a href="https://www.facebook.com/orsocietyclub"><img src="src/fb.svg" alt=""></a>
                        <a href="https://www.youtube.com/c/OperationsResearchSocietyClub" alt=""><img src="src/yt.svg" alt=""></a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
<script src="js/nav.js" defer></script>
<script src="js/carous.js" defer></script>
</body>
</html>
