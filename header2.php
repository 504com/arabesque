<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Architect Group</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link href="stylesheet/style.css" rel="stylesheet" type="text/css" />
    <link href="stylesheet/gallery-photo.css" rel="stylesheet" type="text/css" />
    <link href="stylesheet/galleriffic-2.css" rel="stylesheet"  type="text/css" />

    <script src="js/jquery.js" type="text/javascript"></script><!-- Insertion de la bibliotheque jQuery -->
    <script type="text/javascript" src="js/localscroll/jquery.localscroll.js"></script>
    <script type="text/javascript" src="js/localscroll/jquery.scrollTo.js"></script>
    <script type="text/javascript" src="js/lancement.js"></script><!-- permet le lancement de la fonction de scroll -->

    <script type="text/javascript" src="js/inc/jquery.min.js"></script>
    <script type="text/javascript" src="js/inc/mbGallery.js"></script>
    <script type="text/javascript" src="js/gallery/gallery.js"></script>
    <script type="text/javascript" src="js/gallery/jquery.galleriffic.js"></script>
    <script type="text/javascript" src="js/gallery/jquery.opacityrollover.js"></script>

    <script type="text/javascript">
        $(function(){
            if (self.location.href == top.location.href){
                $("body").on("contextmenu",".galleryScreen",function(){return false;})
            });
    </script>
</head>
<body>
<div id="main">
<div id="container">
    <div class="headerzone">
       <div class="logozone"> <a href="#"><img src="images/logo.jpg" alt="" border="0" /></a> </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <div class="mainmenu">
        <ul>
            <li><a href="presentation.php#presentation">Pr&eacute;sentation</a></li>
            <li><a href="services.php#metier">M&eacute;tiers</a></li>
            <li><a href="services.php#metier">Services</a></li>
            <li  class="last"><a href="contact.php#contact">Devis & Contact</a></li>
        </ul>
    </div>
    <div class="clear"></div>
    <div class="banner"><img id="banner" src="images/banner_02.jpg" alt="" /></div>
    <div id="cible" class="clear"></div>
    <div class="workzone2">