<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORSC</title>
    <link rel="stylesheet" href="css/biblio.css">
    <link rel="stylesheet" href="css/Standard.css">
    <script src="js/script.js" defer></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                    <a href="/evenement">NOS EVENEMENTS</a>
                    <a href="/aboutus">Qui-Sommes nous?</a>
                    <a href="/contactus">CONTACT US</a>
                </li>
            </ul>
        </nav>
    </section>
    <div class="container">
        <div class="search">
            <form action="" method="GET">
                <div class="bar">
                    <label for="bar">Trouvez Votre Document</label>
                    <input type="text" id="sbar" placeholder="Recherche Par Mots Clés">
                    <button id="search" type="submit"><img src="/src/Vector.svg" >
                    </button>
                </div>
                <div class="checks">
                    <label id="sort">Sort By:</label>
                    <input type="checkbox" id="date">
                    <label for="date">Date</label>
                    <input type="checkbox" id="alpha">
                    <label for="alpha">Alphabétique</label>
                    <input type="checkbox" id="charge">
                    <label for="charge">Les plus téléchargés</label>
                </div>
            </form>
        </div>
            <div class="eh">
                <div class="first">
                    @foreach($livres as $livre)
                    <div class="list">
                        <div class="sep">
                            <a href=""><img src="/src/Rectangle 130.svg" id="rect"></a>
                        </div>
                        <div class="memoire">
                            <h5>{{ $livre->title }}</h5>
                            <img src="/src/bookmark.svg" class="reserver">
                            <a class="reserver">réserver</a>
                            <button id="okk">télécharger</button>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="reserv" id="reserv">
                    <h5>Vos réservations</h5>

                </div>
        </div>



        <div class="navi">
            <a href=""><img src="/src/Shape.svg" alt=""></a>
            <h1>1</h1>
            <a href=""><img src="/src/Shape (1).svg" alt=""></a>
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
</body>
</html>
