<?php

if(!isset($_REQUEST['login']))
    {
        include('../vue/public/boutique.php');
    }

    else
    {
        switch($_REQUEST['login'])
        {
            case md5('connexion') : 
                include('../vue/admin/connexion_vue.php');
            break;
            
            case md5('boutique') : 
                include('../vue/public/boutique.php');
            break;
            case md5('articles') : 
                include('../vue/public/article.php');
            break;
            case md5('showarticle') : 
                include('../vue/public/showarticle.php');
            break;
            case md5('panier') : 
                include('../vue/public/panier.php');
            break;
            case md5('admin') : 
                include('../vue/admin/admin_vue.php');
            break;
            case md5('membres') : 
                include('../vue/admin/membre_vue.php');
            break;
          
            default: 
                include('../vue/public_vue/accueil.php');
        }
    }