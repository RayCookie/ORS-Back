<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORSC</title>
    <link rel="stylesheet" href="css/Standard.css">
    <link rel="stylesheet" href="css/checkout.css">
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
        <div class="texte">
            <h5>Compléter votre réservation</h5>
            <p>Priére de ramener une piéce d’identité et/ou le badge étudiant et/ou une certificat de scolarité*</p>
        </div>
        <div class="infos">
            <div class="reserv">

            </div>
            <div class="form">
                   <div class="name">
                    <label for="name">Nom & Prénom</label>
                   <input type="text" id="name" placeholder="Nom & Prénom" required>
                   </div>
                   <div class="email">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" placeholder="Email">
                   </div>
                   <div class="fonction">

                        <div class="left">
                            <h5>Statut</h5>
                            <div class="etud">
                                <label for="etudiant">Etudiant</label>
                                <input type="checkbox">
                            </div>
                            <div class="prof">
                                <label for="prof">Enseignant/Professeur</label>
                                <input type="checkbox">
                            </div>
                        </div>
                        <div class="right">
                            <div class="employe">
                                <label for="employe">Employé</label>
                                <input type="checkbox">
                            </div>
                            <div class="autre">
                                <label for="autre">Autre</label>
                                <input type="checkbox">
                            </div>
                        </div>
                    </div>
                    <div class="get">
                        <h5>Vous passerez le </h5>
                        <h4>05/05/2025</h4>
                    </div>
                    <button type="submit" href="contactus2.html">Réserver</button>
        </div>
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
