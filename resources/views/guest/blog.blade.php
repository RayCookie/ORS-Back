<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORSC</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/Standard.css">
    <link rel="stylesheet" href="css/events.css">

    <link rel="stylesheet" href="fontawesome5.15/css/all.css">
</head>
<section id="navbar">
        <nav>
            <a href=""><img src="src/Logo 1.svg" alt="Logo"></a>
            <ul>
                <li>
                    <a href="/Acceuil">HOME</a>
                    <a href="/biblio">Bibliothèque</a>
                    <a href="/blog">BLOG</a>
                    <a href="/evenement">NOS EVENEMENTS</a>
                    <a href="/aboutus">Qui-Sommes nous?</a>
                    <a href="/contactus">CONTACT US</a>
                </li>
            </ul>
        </nav>
    </section>
<body>
<div class="container" style="overflow: hidden;">




        <div class="happening" >
        <img class="bg" src="../image/9.jpg">
              <div class="text">
                <h1>Dernier article</h1>
                <h2>Article titre titre titre</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in.</p>
              </div>
              <button class="lire">LIRE</button>
        </div>



        <div class="search">
            <form action="" method="GET">
                <div class="bar">
                    <label for="bar">Trouvez Votre Article</label>
                    <input type="text" id="sbar" placeholder="Search">
                    <button id="search" type="submit" ><img src="/src/Vector.svg" >
                    </button>
                </div>
                <div class="checks">
                    <label id="sort">Sort By</label>
                    <input type="checkbox" id="date">
                    <label for="date">Date</label>
                    <input type="checkbox" id="alpha">
                    <label for="alpha">Alphabétique</label>
                    <input type="checkbox" id="charge">
                    <label for="charge">Les plus aimés</label>

                </div>
            </form>

            </div>
                            <!--articles-->


        @foreach($posts as $post)                    <!-- NOTRE HISTOIRE-->
        <div class="row">
            <div class ="col-md-5 articleimg">
            <img class="" src="{{ asset('images/'.$post->image) }}">
            </div>

            <div class ="col-md-7 txt">
                <h1>{{ $post->title }}</h1>

                <p> {{ $post->body }}</p>
                <i class="far fa-2x fa-heart heart"></i><i class="far fa-2x fa-comment comment"></i>
                <i class="far fa-2x fa-paper-plane"></i>
            </div>
        </div>
        @endforeach
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

</body>
</html>
