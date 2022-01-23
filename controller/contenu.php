<?php

if (!isset($_REQUEST['pg'])) {
    include_once('../vue/public/boutique.php');
} else {
    switch ($_REQUEST['pg']) {
        case md5('connexion'):
            include_once('../vue/admin/connexion_vue.php');
            break;

        case md5('boutique'):
            include_once('../vue/public/boutique.php');
            break;
        case md5('articles'):
            include_once('../vue/public/article.php');
            break;
        case md5('showarticle'):
            include_once('../vue/public/showarticle.php');
            break;
        case md5('panier'):
            include_once('../vue/public/panier.php');
            break;
        case md5('admin'):
            include_once('../vue/admin/admin_vue.php');
            break;
        case md5('membres'):
            include_once('../vue/admin/membre_vue.php');
            break;

        default:
            include_once('../vue/public_vue/accueil.php');
    }
}
