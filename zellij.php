<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Architect Group</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link href="stylesheet/style.css" rel="stylesheet" type="text/css" />
    <link href="stylesheet/gallery-photo.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="js/inc/jquery.min.js"></script>
    <script type="text/javascript" src="js/inc/mbGallery.js"></script>

    <script type="text/javascript">
        $(function(){
            if (self.location.href == top.location.href){
            $("body").on("contextmenu",".galleryScreen",function(){return false;})
        });
    </script>
</head>
<body>
<div id="container">
    <div class="headerzone">
        <div class="logozone"> <a href="#"><img src="images/logo.jpg" alt="" border="0" /></a> </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <div class="mainmenu">
        <ul>
            <li><a href="presentation.php">Pr&eacute;sentation</a></li>
            <li><a href="services.php#metier">M&eacute;tiers</a></li>
            <li><a href="clients.php">Clients</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="support.php">Support</a></li>
            <li><a href="presentation.php">Qualifications</a></li>
            <li><a href="contact.php">Devis</a></li>
            <li  class="last"><a href="contact.php">Contact nous</a></li>
        </ul>
    </div>
    <div class="banner"><img src="images/insidebanner.jpg" alt="" /></div>
    <div  id="zellij" class="workzone">
        <div>
            <h1>L'Art de <span class="redheading">Zellij</span></h1>
        </div>
        <div>
                <span class="firstletter">L</span>e <strong>Zellige</strong>, <strong>zillij</strong> ou <strong>zelliges</strong>est le carrelage en terre cuite recouverte d'&eacute;mail sous la forme de jetons en pl&acirc;tre. Il est l'une des principales caract&eacute;ristiques de l'architecture <strong>marocaine</strong>.
                Il se compose de mosa&iuml;ques g&eacute;om&eacute;triques en c&eacute;ramique utilis&eacute;es principalement comme un ornement pour les <strong>murs</strong>, les <strong>plafonds</strong>, <strong>fontaines</strong>, <strong>dallages</strong>, des <strong>piscines</strong>, des <strong>tableaux</strong>, etc.
        </div>
        <br/>
        <div class="imgRightWithoutLeftZone" ><img al src="images/zellij/zellige-accueil_01.jpg"   /></div>
        <div>
            <h4>Histoire:</h4>
            <span class="firstletter">L</span>'art du zellige s'est &eacute;panoui &agrave; la p&eacute;riode <strong>hispano-mauresque</strong> (Azulejo) du <strong>Maroc</strong>. L'art est rest&eacute; tr&egrave;s limit&eacute; en usage jusqu'&agrave; la dynastie m&eacute;rinide qui lui a donn&eacute; plus d'importance dans le <strong>14&egrave;me</strong> si&egrave;cle et a introduit les couleurs bleu, vert et jaune. Red a &eacute;t&eacute; ajout&eacute; au 17&egrave;me si&egrave;cle. Les &eacute;maux anciens aux couleurs naturelles ont &eacute;t&eacute; utilis&eacute;s jusqu'au d&eacute;but du 20e si&egrave;cle et les couleurs n'avaient probablement pas beaucoup &eacute;volu&eacute; depuis l'&eacute;poque des M&eacute;rinides.
            Les villes de <strong>F&egrave;s</strong> et <strong>Mekn&egrave;s</strong> restent les centres de cet art.<br><br/>
            Patrons de l'art zellige utilis&eacute;s historiquement pour d&eacute;corer leurs maisons comme une d&eacute;claration de luxe et de la sophistication des habitants.<br><br>
            Zellige est typiquement une s&eacute;rie de mod&egrave;les utilisant des formes g&eacute;om&eacute;triques color&eacute;es. Ce cadre d'expression est n&eacute;e de la n&eacute;cessit&eacute; d'artistes islamiques pour cr&eacute;er des d&eacute;corations spatiales qui ont &eacute;vit&eacute; les repr&eacute;sentations de choses vivantes, en accord avec les enseignements de la loi islamique.
        </div>
        <br/><br/><br/><br/>

        <div class="imgRightWithoutLeftZone" ><img al src="images/zellij/zellige-accueil.jpg"   /></div>
        <div>
            <span class="firstletter">L</span>es motifs manifest&eacute;s dans les mosa&iuml;ques est actuellement un int&eacute;r&ecirc;t dans la <strong>recherche universitaire en math&eacute;matiques</strong>.
            Des recherches consid&eacute;rables dans la mod&eacute;lisation de ces mod&egrave;les a eu lieu.
            Ces &eacute;tudes n&eacute;cessitent une expertise non seulement dans les domaines des math&eacute;matiques, art et histoire de l'art, mais aussi de l'informatique, la mod&eacute;lisation informatique et d'ing&eacute;nierie ainsi, comme cela a &eacute;t&eacute; fait dans la <strong>mosqu&eacute;e Hassan II</strong>.

        </div>

        <div class="imgCenterWithoutLeftZone" ><img al src="images/zellij/zellige-accueil_04.jpg"   /></div>
        <br/><br/>
        <div>
            <div class="wrapper">
                <table align="left" border="0" width="550">
                    <tr>
                        <td rowspan="2" align="left"><h4>D&eacute;couvrez la gallery Zellij :</h4></td>
                        <td class="cell"><a href="#" onclick="$('#g1').mbGallery({maskBgnd:'#ccc',minWidth: 30, minHeight: 30, overlayOpacity:.9,startFrom: 1,addRaster:true, printOutThumbs:false,galleryTitle:'Salles de bain'});">Salles de bain</a></td>
                        <td class="cell"><a href="#" onclick="$('#g2').mbGallery({maskBgnd:'#ccc',minWidth: 30, minHeight: 30, overlayOpacity:.9,startFrom: 1,addRaster:true, printOutThumbs:false,galleryTitle:'Cuisines'});">Cuisines</a></td>
                        <td class="cell"><a href="#" onclick="$('#g4').mbGallery({maskBgnd:'#ccc',minWidth: 30, minHeight: 30, overlayOpacity:.9,startFrom: 1,addRaster:true, printOutThumbs:false,galleryTitle:'Sols et Murs'});">Sols et Murs</a></td>
                        </tr>
                    <tr>
                        <td class="cell"><a href="#" onclick="$('#g5').mbGallery({maskBgnd:'#ccc',minWidth: 30, minHeight: 30, overlayOpacity:.9,startFrom: 1,addRaster:true, printOutThumbs:false,galleryTitle:'Fontainrs & Escaliers'});">Fontainrs & Escaliers</a></td>
                        <td class="cell"><a href="#" onclick="$('#g3').mbGallery({maskBgnd:'#ccc',minWidth: 30, minHeight: 30, overlayOpacity:.9,startFrom: 1,addRaster:true, printOutThumbs:false,galleryTitle:'Tables D&eacute;co'});">Tables D&eacute;co</a></td>
                    </tr>
                </table>
                <br/><br/><br/> <br/><br/><br/> <br/><br/><br/>
                <table align="left" border="0" width="999">
                    <tr>
                     <td width="88%"><h3>D&eacute;couvrez nos m&eacute;tiers</h3></td>
                     <td><div class="more" align="left"><a href="services.php#metier">nos m&eacute;tiers</a></div></td>
                    </tr>
                </table>
                <div  id="g1" class="galleryCont">
                    <a class="imgThumb" href="images/zellij/gallery1/LR/01.jpg"></a>
                    <a class="imgFull" href="images/zellij/gallery1/HR/01.jpg"></a>

                    <a class="imgThumb" href="images/zellij/gallery1/LR/02.jpg"></a>
                    <a class="imgFull" href="images/zellij/gallery1/HR/02.jpg"></a>

                    <a class="imgThumb" href="images/zellij/gallery1/LR/03.jpg"></a>
                    <a class="imgFull" href="images/zellij/gallery1/HR/03.jpg"></a>

                    <a class="imgThumb" href="images/zellij/gallery1/LR/04.jpg"></a>
                    <a class="imgFull" href="images/zellij/gallery1/HR/04.jpg"></a>

                    <a class="imgThumb" href="images/zellij/gallery1/LR/05.jpg"></a>
                    <a class="imgFull" href="images/zellij/gallery1/HR/05.jpg"></a>

                    <a class="imgThumb" href="images/zellij/gallery1/LR/06.jpg"></a>
                    <a class="imgFull" href="images/zellij/gallery1/HR/06.jpg"></a>

                    <a class="imgThumb" href="images/zellij/gallery1/LR/07.jpg"></a>
                    <a class="imgFull" href="images/zellij/gallery1/HR/07.jpg"></a>


                    <a class="imgThumb" href="images/zellij/gallery1/LR/08.jpg"></a>
                    <a class="imgFull" href="images/zellij/gallery1/HR/08.jpg"></a>

                    <a class="imgThumb" href="images/zellij/gallery1/LR/09.jpg"></a>
                    <a class="imgFull" href="images/zellij/gallery1/HR/09.jpg"></a>


                    <a class="imgThumb" href="images/zellij/gallery1/LR/10.jpg"></a>
                    <a class="imgFull" href="images/zellij/gallery1/HR/10.jpg"></a>

                    <a class="imgThumb" href="images/zellij/gallery1/LR/11.jpg"></a>
                    <a class="imgFull" href="images/zellij/gallery1/HR/11.jpg"></a>
                </div>

                <div  id="g2" class="galleryCont">
                    <a class="imgThumb" href="images/zellij/gallery2/LR/01.jpg"></a>
                    <a class="imgFull" href="images/zellij/gallery2/HR/01.jpg"></a>

                    <a class="imgThumb" href="images/zellij/gallery2/LR/02.jpg"></a>
                    <a class="imgFull" href="images/zellij/gallery2/HR/02.jpg"></a>

                    <a class="imgThumb" href="images/zellij/gallery2/LR/03.jpg"></a>
                    <a class="imgFull" href="images/zellij/gallery2/HR/03.jpg"></a>

                    <a class="imgThumb" href="images/zellij/gallery2/LR/04.jpg"></a>
                    <a class="imgFull" href="images/zellij/gallery2/HR/04.jpg"></a>

                    <a class="imgThumb" href="images/zellij/gallery2/LR/05.jpg"></a>
                    <a class="imgFull" href="images/zellij/gallery2/HR/05.jpg"></a>
                </div>

                <div  id="g3" class="galleryCont">
                    <a class="imgThumb" href="images/zellij/gallery3/LR/01.jpg"></a>
                    <a class="imgFull" href="images/zellij/gallery3/HR/01.jpg"></a>

                    <a class="imgThumb" href="images/zellij/gallery3/LR/02.jpg"></a>
                    <a class="imgFull" href="images/zellij/gallery3/HR/02.jpg"></a>

                    <a class="imgThumb" href="images/zellij/gallery3/LR/03.jpg"></a>
                    <a class="imgFull" href="images/zellij/gallery3/HR/03.jpg"></a>

                    <a class="imgThumb" href="images/zellij/gallery3/LR/04.jpg"></a>
                    <a class="imgFull" href="images/zellij/gallery3/HR/04.jpg"></a>

                    <a class="imgThumb" href="images/zellij/gallery3/LR/05.jpg"></a>
                    <a class="imgFull" href="images/zellij/gallery3/HR/05.jpg"></a>

                    <a class="imgThumb" href="images/zellij/gallery3/LR/06.jpg"></a>
                    <a class="imgFull" href="images/zellij/gallery3/HR/06.jpg"></a>

                    <a class="imgThumb" href="images/zellij/gallery3/LR/07.jpg"></a>
                    <a class="imgFull" href="images/zellij/gallery3/HR/07.jpg"></a>

                    <a class="imgThumb" href="images/zellij/gallery3/LR/08.jpg"></a>
                    <a class="imgFull" href="images/zellij/gallery3/HR/08.jpg"></a>

                    <a class="imgThumb" href="images/zellij/gallery3/LR/09.jpg"></a>
                    <a class="imgFull" href="images/zellij/gallery3/HR/09.jpg"></a>
                </div>

                <div  id="g4" class="galleryCont">
                    <a class="imgThumb" href="images/zellij/gallery4/LR/01.jpg"></a>
                    <a class="imgFull" href="images/zellij/gallery4/HR/01.jpg"></a>

                    <a class="imgThumb" href="images/zellij/gallery4/LR/02.jpg"></a>
                    <a class="imgFull" href="images/zellij/gallery4/HR/02.jpg"></a>

                    <a class="imgThumb" href="images/zellij/gallery4/LR/03.jpg"></a>
                    <a class="imgFull" href="images/zellij/gallery4/HR/03.jpg"></a>

                    <a class="imgThumb" href="images/zellij/gallery4/LR/04.jpg"></a>
                    <a class="imgFull" href="images/zellij/gallery4/HR/04.jpg"></a>

                    <a class="imgThumb" href="images/zellij/gallery4/LR/05.jpg"></a>
                    <a class="imgFull" href="images/zellij/gallery4/HR/05.jpg"></a>

                    <a class="imgThumb" href="images/zellij/gallery4/LR/06.jpg"></a>
                    <a class="imgFull" href="images/zellij/gallery4/HR/06.jpg"></a>

                    <a class="imgThumb" href="images/zellij/gallery4/LR/07.jpg"></a>
                    <a class="imgFull" href="images/zellij/gallery4/HR/07.jpg"></a>
                </div>

                <div  id="g5" class="galleryCont">
                    <a class="imgThumb" href="images/zellij/gallery5/LR/01.jpg"></a>
                    <a class="imgFull" href="images/zellij/gallery5/HR/01.jpg"></a>

                    <a class="imgThumb" href="images/zellij/gallery5/LR/02.jpg"></a>
                    <a class="imgFull" href="images/zellij/gallery5/HR/02.jpg"></a>

                    <a class="imgThumb" href="images/zellij/gallery5/LR/03.jpg"></a>
                    <a class="imgFull" href="images/zellij/gallery5/HR/03.jpg"></a>

                    <a class="imgThumb" href="images/zellij/gallery5/LR/04.jpg"></a>
                    <a class="imgFull" href="images/zellij/gallery5/HR/04.jpg"></a>

                    <a class="imgThumb" href="images/zellij/gallery5/LR/05.jpg"></a>
                    <a class="imgFull" href="images/zellij/gallery5/HR/05.jpg"></a>

                    <a class="imgThumb" href="images/zellij/gallery5/LR/06.jpg"></a>
                    <a class="imgFull" href="images/zellij/gallery5/HR/06.jpg"></a>

                </div>
            </div>
        </div>
        <div style="clear: both;"></div>
    </div>
<?php include "footer.php" ?>