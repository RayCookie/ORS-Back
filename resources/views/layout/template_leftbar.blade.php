<div class="span3" >
    <div class="sidebar" >
        <ul class="widget widget-menu unstyled">
            <li>
                <a href="{{ URL::route('home') }}">
                    <i class="menu-icon icon-home"></i>Acceuil
                </a>
            </li>
            <li>
                <a href="{{ URL::route('students-for-approval') }}">
                    <i class="menu-icon icon-filter"></i>Etudiants en attente
                </a>
            </li>
            <li>
                <a href="{{ URL::route('registered-students') }}">
                    <i class="menu-icon icon-group"></i>Etudiants approuvés
                </a>
            </li>
            <li>
                <a href="{{ URL::route('all-books') }}">
                    <i class="menu-icon icon-th-list"></i>Toutes les memoires
                </a>
            </li>
            <li>
                <a href="{{ URL::route('add-book-category') }}">
                    <i class="menu-icon icon-folder-open-alt"></i>Ajouter une categorie
                </a>
            </li>
            <li>
                <a href="{{ URL::route('add-books') }}">
                    <i class="menu-icon icon-folder-open-alt"></i>Ajouter memoire
                </a>
            </li>
            <li>
                <a href="{{ URL::route('settings') }}">
                    <i class="menu-icon icon-cog"></i>Ajouter options
                </a>
            </li>

            <li>
                <a href="{{ URL::route('issue-return') }}">
                    <i class="menu-icon icon-signout"></i>Publier / retourner memoires
                </a>
            </li>



            <li>
                <a href="{{ route('all_posts') }}">
                    <i class="menu-icon icon-signout"></i>Articles
                </a>
            </li>

            <li>
                <a href="{{ route('image') }}">
                    <i class="menu-icon icon-signout"></i>Gallerie
                </a>
            </li>

            <li>
                <a href="{{ URL::route('currently-issued') }}">
                    <i class="menu-icon icon-list-ul"></i>toutes les memoires publiées
                </a>
            </li>
        </ul>

        <ul class="widget widget-menu unstyled">
            <li><a href="{{ URL::route('account-sign-out') }}"><i class="menu-icon icon-wrench"></i>deconnexion </a></li>
        </ul>
    </div>
</div>
