<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="UTF-8">
    <title>Morgan COULM, web designer</title>
    <!-- // ----------------- Meta http-equiv ----------------- // -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- // Meta Name Mobile Specifics Android and Other system // -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" > -->
    <meta name="viewport" content="width=device-width, maximum-scale=2.0, initial-scale=1.0, user-scalable=yes">
    <!--[if IEMobile]><meta http-equiv="cleartype" content="on"><![endif]-->
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=yes">
    <!-- Convertir les numéros de téléphone en liens pour mobiles Yes ou No -->
    <meta name="mobile-agent" content="format=html5; url=index.php">
    <!-- // ----------- Meta Name Mobile Specifics APPLE ------------- // -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-touch-fullscreen" content="yes">
    <!-- // Meta Name Robots and Spyder // -->
    <meta name="robots" content="noodp">
    <!-- // ------------- Shortcut Icon Desktop --------------- // -->
    <link rel="shortcut icon" href="./asset/image/Favicon.ico">
    <link rel="icon" href="./asset/image/Favicon.ico">
    <!-- // Shortcut Icon APPLE (mettre les images à la racine du site !) // -->
    <link rel="apple-touch-icon" sizes="58x58" href="./images/touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./images/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./images/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="167x167" href="./images/touch-icon-ipad-retina.png">
    <!-- // ------------- Optimised SEO pour Google --------------- // -->
    <meta name="description" content="Personnal website of Morgan COULM">
    <meta name="author" content="Morgan COULM">
    <meta name="designer" content="Morgan COULM">
    <meta name="web_author" content="Morgan COULM">
    <meta name="keywords"
        content="Morgan COULM, Brest, Finistère, web developper, développeur web, frontend, backend, web mobile, javascript, PHP, CSS, junior web developper">
    <!-- Supporter par les moteurs de recherche, SAUF GOOGLE ! -->
    <meta name="news_keywords"
        content="Morgan COULM, Brest, Finistère, web developper, développeur web, frontend, backend, web mobile, javascript, PHP, CSS, junior web developper">
    <!-- GOOGLE UNIQUEMENT ! -->
    <link type="text/plain" rel="author" href="Morgan COULM">
    <link rel="canonical" href="https://morgan-c.schoolofweb.tech/">
    <link rel="shortlink" href="https://morgan-c.schoolofweb.tech/">
    <!-- // ------------ Open Graph pour Facebook ------------- // -->
    <meta property="og:locale" content="fr_FR">
    <!-- <meta property="og:type" content="" > -->
    <meta property="og:title" content="Morgan COULM, web designer">
    <meta property="og:description" content="Personnal website of Morgan COULM">
    <meta property="og:url" content="https://morgan-c.schoolofweb.tech/">
    <meta property="og:site_name" content="Morgan COULM, web designer">
    <meta property="og:image" content="./asset/image/profil.jpg">
    <meta property="og:image:width" content="400">
    <meta property="og:image:height" content="400">


    <link href="./asset/css/style.css" rel="stylesheet" type="text/css">
    <link href="./asset/css/nav.css" rel="stylesheet" type="text/css">
    <link href="./asset/css/page_volet.css" rel="stylesheet" type="text/css">
    <link href="./asset/css/page_1.css" rel="stylesheet" type="text/css">
    <link href="./asset/css/page_2.css" rel="stylesheet" type="text/css">
    <link href="./asset/css/page_3.css" rel="stylesheet" type="text/css">
    <link href="./asset/css/page_4.css" rel="stylesheet" type="text/css">
    <link href="./asset/css/page_5.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="nav_bar">
        <div class="nav_main" onclick="volet_code(0)">
            <a id="a_nav_main" href="#" >
                <p id="code_text_2"> code source de la page </p>
                <p id="code"> < c o d e > </p>
            </a>
        </div>

        <nav>
            <div class="nav_boutton" onclick="page(1)"><div class="boutton first"><p>home</p></div><div class="boutton deuxieme"><img src="./asset/image/design_icon_home.png"></div></div>
            <div class="nav_boutton" onclick="page(2)"><div class="boutton first"><p>CV</p></div><div class="boutton deuxieme"><img src="./asset/image/design_icon_cv.png"></div></div>
            <div class="nav_boutton" onclick="page(3)"><div class="boutton first"><p>listes</p></div><div class="boutton deuxieme"><img src="./asset/image/design_icon_liste.png"></div></div>
            <div class="nav_boutton" onclick="page(4)"><div class="boutton first"><p>LANG</p></div><div class="boutton deuxieme"><img src="./asset/image/design_icon_exo.png"></div></div>
            <div class="nav_boutton" onclick="page(5)"><div class="boutton first"><p>mail</p></div><div class="boutton deuxieme"><img src="./asset/image/design_icon_mail.svg"></div></div>
            
        </nav>
        <div class="nav_lien">
            <div class="nav_lien_gauche">
                <a href="https://www.schoolofweb.tech/"><span>shoolofweb</span></a>
                <a href="https://github.com/redhox"><span>github</span></a>
                <a href="#" onclick="page(5)"><span>mail</span></a>
            </div>

            <div class="nav_lien_droite"> 
                <a href="https://www.schoolofweb.tech/"><img src="./asset/image/design_icon_home.png"></a>
                <a href="https://github.com/redhox"><img src="./asset/image/design_icon_git.svg"></a>
                <a href="#" onclick="page(5)"><img src="./asset/image/design_icon_mail.svg"></a>
            </div>
        </div>
    </div>
    <div id="page_code">
        <div id="code_html">
            <p class="titre_page_code">html</p>
<pre>
    <?php  
        include ('./index.txt');
    ?>
</pre>
        </div>
        <div id="code_externe">
            <div class="class_code_externe ">
                <p class="titre_page_code">css</p>
<pre>
    
    <?php
    include ('./asset/css/style.css');
    include ('./asset/css/nav.css');
    include ('./asset/css/page_volet.css');
    include ('./asset/css/page_1.css');
    include ('./asset/css/page_2.css');
    include ('./asset/css/page_3.css');
    include ('./asset/css/page_4.css');
    include ('./asset/css/page_5.css');
    ?>

</pre>
            </div>
            <div class="class_code_externe" >
                <p class="titre_page_code">js</p>
<pre>
    
<?php 
        include ('./asset/js/scripte.js');
?>
</pre>
            </div>
        </div>
        <div id="langette" onclick="volet_code(1)"></div>
    </div>
    <div id="main">

        <div class="contenu" id="page_1">
            <div id="page_1_block">
                <div id="bonjour">
                    <div>
                        <div class="lettre" id="lettre_b">B</div>
                        <div class="lettre" id="lettre_o">o</div>
                        <div class="lettre" id="lettre_n">n</div>
                        <div class="lettre" id="lettre_j">j</div>
                        <div class="lettre" id="lettre_o2">o</div>
                        <div class="lettre" id="lettre_u">u</div>
                        <div class="lettre" id="lettre_r">r</div>

                        <div class="lettre" id="lettre_f">F</div>
                        <div class="lettre" id="lettre_o3">o</div>
                        <div class="lettre" id="lettre_l">l</div>
                        <div class="lettre" id="lettre_i">i</div>
                        <div class="lettre" id="lettre_o4">o</div>
                        <div class="lettre" id="ligne_1"></div>
                    </div>
                    <div>
                        <div class="lettre" id="lettre_d">d</div>
                        <div class="lettre" id="lettre_e">e</div>
                        <div class="lettre" id="ligne_2"></div>
                    </div>
                    <div>
                        <div class="lettre" id="lettre_m">M</div>
                        <div class="lettre" id="lettre_o5">o</div>
                        <div class="lettre" id="lettre_r2">r</div>
                        <div class="lettre" id="lettre_g">g</div>
                        <div class="lettre" id="lettre_a">a</div>
                        <div class="lettre" id="lettre_n2">n</div>
                        <div class="lettre" id="ligne_3"></div>
                    </div>
                    <div>
                        <div class="lettre" id="lettre_c">C</div>
                        <div class="lettre" id="lettre_o6">O</div>
                        <div class="lettre" id="lettre_u2">U</div>
                        <div class="lettre" id="lettre_l2">L</div>
                        <div class="lettre" id="lettre_m2">M</div>
                        <div class="lettre" id="ligne_4"></div>
                    </div>
                        
                </div>
                    <div id="page_1_image"> 
                    </div>
            </div> 
        </div>
    
        <div class="contenu" id="page_2">
            <p id="page_2_titre"></p>
            <p id="page_2_zone_de_text">
            </p>
            <div id="page_2_cv">
                <div class="cv" id="petit_cv">
                    <div class="petit_cv_block_large" id="petit_cv_haut">
                        <div id="petit_cv_info"><p>Morgan COULM <br> 133 rue Paul Masson <br> 29200 Brest <br>25 ans (1995) <br>Permis B</p></div>
                        <div id="petit_cv_image"></div>
                    </div>

                    <div class="petit_cv_block_large">
                        <p>Compétences</p>
                        <li>Langage Html Css Js Php</li>
                        <li>Résoudre les dysfonctionnements</li>
                        <li>Guider l'utilisateur</li>
                        <li>Anglais technique</li>
                        <li id="faux_lien">voir plus</li>
                        
                    </div>

                    <div class="petit_cv_block_large">
                        <p>Expériences professionnelles</p>
                        <div class="petit_cv_text"><span class="petit_cv_gauche">technicien courant faible</span><span class="petit_cv_date">2016</span></div>
                        <div class="petit_cv_text"><span class="petit_cv_gauche">Agent de maintenance de réseau</span><span class="petit_cv_date">2015</span></div>
                        <div class="petit_cv_text"><span class="petit_cv_gauche">Technicien Réseau</span><span class="petit_cv_date">2013-2014</span></div>
                        <div class="petit_cv_text"><span class="petit_cv_gauche" id="faux_lien">voir plus</span></div>
                    </div>

                    <div class="petit_cv_block_large">
                        <p>formation</p>
                        <div class="petit_cv_text"><span class="petit_cv_gauche">développeur web et web mobile, afpa</span><span class="petit_cv_date">2020-2021</span></div>
                        <div class="petit_cv_text"><span class="petit_cv_gauche">Grande école du numérique</span><span class="petit_cv_date">2017-2018</span></div>
                        <div class="petit_cv_text"><span class="petit_cv_gauche">BTS Système Numérique</span><span class="petit_cv_date">2014-2016</span></div>
                        <div class="petit_cv_text"><span class="petit_cv_gauche">Baccalauréat professionnel</span><span class="petit_cv_date">2014</span></div>
                    </div>

                </div>

                <div class="cv" id="grand_cv">
                    <div class="grand_cv_block_large" id="grand_cv_haut">
                        <div id="grand_cv_haut_gauche"><p>Morgan COULM  <br>25 ans (1995) <br>Permis B <br> morganXXXXXX@gmail.com</p></div>
                        <div id="grand_cv_haut_milieu">
                            <img src="./asset/image/profil.png" alt="">
                        </div>
                        <div id="grand_cv_haut_droite"> 133 rue Paul Masson <br> 29200 Brest <br>06 14 XX XX XX</div>
                    </div>

                    <div class="grand_cv_block_large" >
                        <p>Compétences</p>
                        <li>Langage Html Css Js Php</li>
                        <li>Résoudre les dysfonctionnements</li>
                        <li>Guider l'utilisateur</li>
                        <li>Changer ou réparer un élément</li>
                        <li>Configurer le poste de travail</li>
                        <li>Effectuer les tests de fonctionnement</li>
                        <li>Effectuer les opérations de nettoyage et de réglage</li>
                        <li>Renseigner les supports de suivi d'intervention</li>
                        <li>Anglais technique</li>

                    </div>

                    <div class="grand_cv_block_large" >
                        <p>Expériences professionnelles</p>
                        <div class="grand_cv_text"><span class="grand_cv_gauche">technicien courant faible, Maintenance Resaux Câblés,Brest</span><span class="grand_cv_date">2016</span></div>
                        <div class="grand_cv_text"><span class="grand_cv_gauche">Agent de maintenance de réseau, LASER SYMAG, Brest</span><span class="grand_cv_date">2015</span></div>
                        <div class="grand_cv_text"><span class="grand_cv_gauche">Technicien Réseau, SNCF services télécommunications</span><span class="grand_cv_date">2013-2014</span></div>
                        <div class="grand_cv_text"><span class="grand_cv_gauche">Agent de maintenance domotique, VINCI, Brest</span><span class="grand_cv_date">2012-2013</span></div>
                        <div class="grand_cv_text"><span class="grand_cv_gauche">Installateur de logiciel, DIRISI, Brest</span><span class="grand_cv_date">2012</span></div>
                    </div>

                    <div class="grand_cv_block_large" >
                        <p>formation</p>
                        <div class="grand_cv_text"><span class="grand_cv_gauche"> </span>Formation developeur web/web-mobile , afpa Brest<span class="grand_cv_date">2020-2021</span></div>
                        <div class="grand_cv_text"><span class="grand_cv_gauche">Grande école du numérique , les petits débrouillards</span><span class="grand_cv_date">2017-2018</span></div>
                        <div class="grand_cv_text"><span class="grand_cv_gauche">1ere année de BTS Système Numérique, Lycée Saint Joseph, Lorient</span><span class="grand_cv_date">2014-2016</span></div>
                    </div>
                    <div class="grand_cv_block_large" >
                        <p>Centres d'intérêts</p>
                        <div class="grand_cv_text"><span class="grand_cv_gauche">Veille autour des nouvelles technologies</span></div>
                        <div class="grand_cv_text"><span class="grand_cv_gauche">Jeux de stratégies en équipe</span></div>
                        <div class="grand_cv_text"><span class="grand_cv_gauche">Cinéma (Gareth Edwards, Neill Blomkamp, etc.)</span></div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="contenu" id="page_3">
            <div id="page_3_contenu">
                <div id="page_3_list" onclick="page_3('list')">
                    <div class="page_3_text" id="text_list">
                        <p>
                            <?php include('./text/liste.txt') ?>        
                        </p>
                    </div>
                    <p class="page_3_titre" id="list_titre">liste</p>
                </div>
                <div id="page_3_index" onclick="page_3('index')">
                    <div class="page_3_text" id="text_index">
                        <p>
                        <?php include('./text/index.txt') ?>
                        </p>
                    </div>
                    <p class="page_3_titre" id="index_titre">index</p>
                    
                </div>
            </div>
        </div>
    
        <div class="contenu" id="page_4">
            <div id="page_4_block">
                <div class="page_4_colonne" >
                    <div class="page_4_in_colonne" id="page_colonne_2">
                        <div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_html">Html/Css</div><div class="block_competance_core">Création d’un menu horizontal sticky</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_html">Html/Css</div><div class="block_competance_core">Création d’un menu déroulant</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_html">Html/Css</div><div class="block_competance_core">Créer un diaporama en HTML et CSS</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_html">Html/Css</div><div class="block_competance_core">Création d’un menu flex</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_html">Html/Css</div><div class="block_competance_core">Création d’un menu déroulant responsive</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_html">Html/Css</div><div class="block_competance_core">Création d’un site personnel monopage</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_html">Html/Css</div><div class="block_competance_core"> Création d’une page à 3 colonnes avec des éléments flexibles</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_html">Html/Css</div><div class="block_competance_core">Mise en forme des exercices en format documentation</div></div>

                        </div>
                    </div>
                </div>
                <div class="page_4_colonne" >
                    <div class="page_4_in_colonne" id="page_colonne_3">
                        <div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_bootstrap">Bootstrap</div><div class="block_competance_core">CLASSES BOOTSTRAP ET PROPRIÉTÉS CSS</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_bootstrap">Bootstrap</div><div class="block_competance_core">TYLISER DES ÉLÉMENTS COMPLEXES AVEC BOOTSTRAP</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_bootstrap">Bootstrap</div><div class="block_competance_core">LES COMPOSANTS DE NAVIGATION BOOTSTRAP</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_bootstrap">Bootstrap</div><div class="block_competance_core">LES COMPOSANTS INFORMATIFS BOOTSTRAP</div></div>
                        </div>
                    </div>
                </div>
                <div class="page_4_colonne" >
                    <div class="page_4_in_colonne" id="page_colonne_4">
                        <div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_algo">Algorithmie</div><div class="block_competance_core">LES VARIABLES</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_algo">Algorithmie</div><div class="block_competance_core">LECTURE ET ECRITURE</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_algo">Algorithmie</div><div class="block_competance_core">LES TESTS </div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_algo">Algorithmie</div><div class="block_competance_core">LES BOUCLES</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_algo">Algorithmie</div><div class="block_competance_core">LES TABLEAUX</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_algo">Algorithmie</div><div class="block_competance_core">LES TABLEAUX MULTIDIMENSIONNELS</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_algo">Algorithmie</div><div class="block_competance_core">LES FONCTIONS</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_algo">Algorithmie</div><div class="block_competance_core">LES FONCTIONS PERSONNALISEES</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_algo">Algorithmie</div><div class="block_competance_core">LE TRI A BULLE</div></div>
                        </div>
                    </div>
                </div>
                <div class="page_4_colonne" >
                    <div class="page_4_in_colonne" id="page_colonne_5">
                        <div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_js">Javascript</div><div class="block_competance_core">LES VARIABLES ET TYPES DE VALEURS JAVASCRIPT</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_js">Javascript</div><div class="block_competance_core"> LES STRUCTURES DE CONTRÔLE JAVASCRIPT</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_js">Javascript</div><div class="block_competance_core">LES FONCTIONS EN JAVASCRIPT</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_js">Javascript</div><div class="block_competance_core"> L’ORIENTÉ OBJET EN JAVASCRIPT</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_js">Javascript</div><div class="block_competance_core">VALEURS PRIMITIVES ET OBJETS GLOBAUX JAVASCRIPT</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_js">Javascript</div><div class="block_competance_core"> MANIPULATION DU BOM EN JAVASCRIPT</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_js">Javascript</div><div class="block_competance_core">MANIPULATION DU DOM EN JAVASCRIPT</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_js">Javascript</div><div class="block_competance_core">UTILISATION DES EXPRESSIONS RÉGULIÈRES EN JAVASCRIPT</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_js">Javascript</div><div class="block_competance_core">AFFICHER ET CACHER UN ELEMENT</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_js">Javascript</div><div class="block_competance_core">TRI DYNAMIQUE D'UN TABLEAU</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_js">Javascript</div><div class="block_competance_core">GESTION DES ERREURS ET MODE STRICT EN JAVASCRIPT</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_js">Javascript</div><div class="block_competance_core">L’ASYNCHRONE EN JAVASCRIPT</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_js">Javascript</div><div class="block_competance_core"> SYMBOLES, ITÉRATEURS ET GÉNÉRATEURS EN JAVASCRIPT</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_js">Javascript</div><div class="block_competance_core">STOCKAGE DE DONNÉES DANS LE NAVIGATEUR EN JAVASCRIPT</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_js">Javascript</div><div class="block_competance_core"> L’ÉLÉMENT HTML CANVAS ET L’API CANVAS</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_js">Javascript</div><div class="block_competance_core">JSON, AJAX ET FETCH EN JAVASCRIPT</div></div>

                        
                        </div>
                    </div>
                </div>
                <div class="page_4_colonne" >
                    <div class="page_4_in_colonne" id="page_colonne_6">
                        <div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_php">Php</div><div class="block_competance_core">LES STRUCTURES DE CONTRÔLE EN PHP</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_php">Php</div><div class="block_competance_core">FONCTIONS EN PHP</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_php">Php</div><div class="block_competance_core"> VARIABLES TABLEAUX EN PHP</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_php">Php</div><div class="block_competance_core">MANIPULER DES DATES EN PHP</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_php">Php</div><div class="block_competance_core">LES VARIABLES SUPERGLOBALES PHP</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_php">Php</div><div class="block_competance_core">MANIPULER DES FICHIERS EN PHP</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_php">Php</div><div class="block_competance_core">UTILISER LES EXPRESSIONS RÉGULIÈRES OU RATIONNELLES EN PHP</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_php">Php</div><div class="block_competance_core">PROGRAMMATION ORIENTÉE OBJET PHP</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_php">Php</div><div class="block_competance_core">FILTRES ET GESTION DES ERREURS EN PHP</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_php">Php</div><div class="block_competance_core">BASES DE DONNÉES, SQL ET À MYSQL</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_php">Php</div><div class="block_competance_core">BASES DE DONNÉES, AU SQL ET À MYSQL</div></div>
                            <div class="block_competance"> <div class="block_competance_titre" id="contenu_color_php">Php</div><div class="block_competance_core">GESTION DES FORMULAIRES HTML AVEC PHP</div></div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    
        <div class="contenu" id="page_5">
            <div id="block_page_5">
            <div class="formulaire">
                <form method="post" action="_Sendmail.php">
                <div class="form_large">
                    <div class="form_moitie">
                        <label for="name">Nom</label>
                        <input type="text" name="nom" id="name" maxlength="30" placeholder="Votre Nom" required="">
                    </div>

                    <div class="form_moitie">
                        <label for="name">Prénom</label>
                        <input type="text" name="prenom" id="name" maxlength="30" placeholder="Votre Prénom" required="">
                    </div>
                </div>
                <div class="form_large">
                    <div class="form_moitie">
                        <label for="email">Courriel</label>
                        <input type="text" name="email" id="email" placeholder="Nom@example.com" maxlength="40" required="">
                    </div>

                    <div class="form_moitie">
                        <label for="name">Téléphone</label>
                        <input type="text" name="telephone" id="tel-company" maxlength="10" pattern="^0[0-9]{9}" placeholder="+xx x xx xx xx xx" required="">
                    </div>
                </div>
                <div class="form_large">
                    
                </div>


                <div class="form_large">
                    <select name="categorie" id="category" required="">
                        <option value="">Choisissez un thème </option>
                        <option value="1">Informations complémentaires</option>
                        <option value="2">Obtenir mon CV</option>
                        <option value="3">ne se prononce pas</option>
                    </select>
                </div>


                <div class="form_large">
                    <textarea name="message" id="message" rows="4" maxlength="500" onpaste="return false;" oncopy="return false;" placeholder="Taper votre message ici (si vous voulez hein !!! Pas de pression )" required=""></textarea>
                </div>
                    
                <div class="form_large" id="form_action">
                    <div class="form_moitie" id="form_check">
                        
                        <label for="human">Je ne suis <br> pas un robot</label>
                        <input type="checkbox" id="human" name="robot" required="checked">
                    </div>
                    <div class="form_moitie">
                        <button type="submit" value="Envoyer le Message" class="primary" id="envoie">envoyé</button>
                    </div>
                </div>
                </form>
            </div>
            </div>




        </div>

    </div>

    </div>
    <script src="./asset/js/scripte.js"></script>
</body>
</html>