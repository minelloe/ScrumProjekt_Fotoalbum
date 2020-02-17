<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Fotoalbum</title>
        <meta name="description" content="Thumbnail Grid with Expanding Preview" />
        <meta name="keywords" content="thumbnails, grid, preview, google image search, jquery, image grid, expanding, preview, portfolio" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/default.css" />
        <link rel="stylesheet" type="text/css" href="css/component.css" />
        <script src="js/modernizr.custom.js"></script>
    </head>
    <body>

        <?php
        header("Location: index1.php");
        ?>
        <div class="container">	
            <!-- Codrops top bar -->
            <div class="codrops-top clearfix">
                <a ><strong>Made with  </strong>love</a>
                <span class="right">
                    <a>Made by Verzweiflung © </a>
                    <a ><strong></strong></a>
                </span>
            </div><!--/ Codrops top bar -->
            <header class="clearfix">
                <h1>Fotoalbum <span>mit Thumbnails</span></h1>	
            </header>
            <div class="main">
                <ul id="og-grid" class="og-grid">
                    <li>
                        <a  data-largesrc="Bilder/crying1.jpg" data-title="Name from Database" data-description="Description from Database">
                            <img src="Bilder/thumbs/crying1.jpg" style="width: auto; height: 250px;"  alt="img01"/>
                        </a>
                    </li>
                    <li>
                        <a  data-largesrc="Bilder/crying2.jpg" data-title="Picture Name" data-description="Description from Database">
                            <img src="Bilder/thumbs/crying2.jpg" style="width: auto; height: 250px;"  alt="img02"/>
                        </a>
                    </li>
                    <li>
                        <a  data-largesrc="Bilder/crying3.jpg" data-title="Name of picture from Database" data-description="Description from Database">
                            <img src="Bilder/thumbs/crying3.jpg" style="width: auto; height: 250px;"  alt="img03"/>
                        </a>
                    </li>
                    <li>
                        <a  data-largesrc="Bilder/crying4.jpg" data-title="Name from Database" data-description="Description from Database">
                            <img src="Bilder/thumbs/crying4.jpg"  style="width: auto; height: 250px;" alt="img01"/>
                        </a>
                    </li>
                    <li>
                        <a  data-largesrc="Bilder/crying5.jpg" data-title="Picture Name" data-description="Description from Database">
                            <img src="Bilder/thumbs/crying5.jpg" style="width: auto; height: 250px;"  alt="img02"/>
                        </a>
                    </li>
                    <li>
                        <a  data-largesrc="Bilder/crying6.jpg" data-title="Name of picture from Database" data-description="Description from Database">
                            <img src="Bilder/thumbs/crying6.jpg" style="width: auto; height: 250px;"  alt="img03"/>
                        </a>
                    </li>
                    <li>
                        <a  data-largesrc="Bilder/crying7.jpg" data-title="Name from Database" data-description="Description from Database">
                            <img src="Bilder/thumbs/crying7.jpg"  style="width: auto; height: 250px;"  alt="img01"/>
                        </a>
                    </li>
                    <li>
                        <a  data-largesrc="Bilder/ScaredyKat.jpg" data-title="Picture Name" data-description="Description from Database">
                            <img src="Bilder/thumbs/ScaredyKat.jpg" style="width: auto; height: 250px;" alt="img02"/>
                        </a>
                    </li>
                    <li>
                        <a  data-largesrc="Bilder/crying2.jpg" data-title="Name of picture from Database" data-description="Description from Database">
                            <img src="Bilder/thumbs/crying2.jpg" style="width: auto; height: 250px;" alt="img03"/>
                        </a>
                    </li>
                    <li>
                        <a  data-largesrc="Bilder/crying6.jpg" data-title="Name of picture from Database" data-description="Description from Database">
                            <img src="Bilder/thumbs/crying6.jpg" style="width: auto; height: 250px;"  alt="img03"/>
                        </a>
                    </li>
                    <li>
                        <a  data-largesrc="Bilder/crying7.jpg" data-title="Name from Database" data-description="Description from Database">
                            <img src="Bilder/thumbs/crying7.jpg"  style="width: auto; height: 250px;"  alt="img01"/>
                        </a>
                    </li>
                    <li>
                        <a  data-largesrc="Bilder/ScaredyKat.jpg" data-title="Picture Name" data-description="Description from Database">
                            <img src="Bilder/thumbs/ScaredyKat.jpg" style="width: auto; height: 250px;" alt="img02"/>
                        </a>
                    </li>
                    <li>
                        <a  data-largesrc="Bilder/crying2.jpg" data-title="Name of picture from Database" data-description="Description from Database">
                            <img src="Bilder/thumbs/crying2.jpg" style="width: auto; height: 250px;" alt="img03"/>
                        </a>
                    </li>






                </ul>
                <p>Filler text </p>
                <!--<a id="og-additems" href="#">add more</a>-->
            </div>
        </div><!-- /container -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="js/grid.js"></script>
        <script>
            $(function () {
                Grid.init();
            });
        </script>
    </body>
</html>