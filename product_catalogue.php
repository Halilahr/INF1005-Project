<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.checked {
  color: orange;
}
</style>

<html>
    <head>
        <title>Product Catalogue</title>
        <?php
        include "head.inc.php";
        ?>
    </head>
 
    <?php
        include "link.inc.php";
    ?>
    
    <?php
        include "nav.inc.php";
    ?>
       
    <body>        
            <section class="hero-category mt-3 mb-4">
                <div class="container">
                    <div class="text-center">
                        <h2 class="heading mb-3">Cheesecakes</h2>
                        <div class="row">
                        
                
                        </figure>   
                        </div>
                        <div id="read-more" class="row">
                            <div class="col-xl-8 offset-xl-2"><h2 style="margin-right: 4px; margin-left: 4px; text-align: -webkit-center;">Best Cheesecake Flavours – ideal for your next birthday cake!</h2><p style="margin-right: 4px; margin-left: 4px; text-align: -webkit-center;">Our cheesecake flavours starts with 6 classics. Some of our classic cheesecakes includes The Classic Basque Cheesecake, Oreo Cheesecake and Strawberry Cheesecake. For those craving a little Singaporean in each bite, our Milo Dinosaur, Red Velvet and Tiramisu cheesecake options are to die for. Next time you look for your birthday cake, take a pick from cheesecake flavours!</p><p style="margin-right: 4px; margin-left: 4px; text-align: -webkit-center;">
                                  &nbsp;<br><br></p><h2 style="margin-right: 4px; margin-left: 4px; text-align: -webkit-center;">Reviews</h2><p style="margin-right: 4px; margin-left: 4px; text-align: -webkit-center;">Lifestyle Asia – “One of best cheesecakes spots to visit in Singapore”</p>
                                    <p style="margin-right: 4px; margin-left: 4px; text-align: -webkit-center;">Goodyfeed Singapore – “Cheesecake so good till you forget your calories”<br><br></p><h2 style="margin-right: 4px; margin-left: 4px; text-align: -webkit-center;">Collection and Delivery</h2><p style="margin-right: 4px; margin-left: 4px; text-align: -webkit-center;">You can have your cheesecake delivered to you or you can choose to self-collect. We also cater to same day delivery requests in Singapore.</p><p style="margin-right: 4px; margin-left: 4px; text-align: -webkit-center;">Please note that free delivery is only applicable for orders above $90.<br><br></p><p style="margin-right: 4px; margin-left: 4px; text-align: -webkit-center;"><span style="color: inherit; font-family: inherit; font-size: 30px;">More About Our Chef</span><br></p><p style="margin-right: 4px; margin-left: 4px; text-align: -webkit-center;">Chef Tan’s creativity speaks volumes and is displayed in our range of cheesecake flavours, making them an ideal option for a birthday cake. With close to 20 years of professional experience, along with a gallery of awards, he opened Up The Cakes.</a></p><style></style></div>
                        </div>
                        <figure>
                            <img class="img-thumbnail popup" src="images/Baker.jpg" alt="baker">
                    </div>
                </div>
            </section>
            
            <section id="product_catalogue" class ="text-center">
                <h2>Product Catalog</h2>
                    <div class="container">
                        <div class="row">
                            
                            <div class="col-sm">
                            <img src="images/Classic.jpg" alt="Product 1" a href="classic_cheesecake.php"
                                 width="150"
                                 height="150">
                            <h2><a href="classic_cheesecake.php">Basque Cheesecake</a></h2>
                            <p>This is our Classic Basque Cheesecake. </p>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="reviews">(73)</span>
                            <p class="price">$60.00</p>
                            </div>

                            <div class="col-sm">
                            <img src="images/red_velvet.jpg" alt="Product 2" 
                                 width="150"
                                 height="150">
                            <h2><a href="red_velvet_cheesecake.php">Red Velvety Cheesecake</a></h2>
                            <p>This is our Red Velvet Cheesecake. </p>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="reviews">(55)</span>
                            <p class="price">$60.00</p>
                            </div>

                            <div class="col-sm">
                            <img src="images/chocolate.jpg" alt="Product 3" 
                                 width="150"
                                 height="150">
                            <h2><a href="milo_dinosaur_cheesecake.php">Milo Dinosaur Cheesecake</a></h2>
                            <p>This is our Special Milo Dinosaur Cheesecake.</p>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span> 
                            <span class="reviews">(57)</span>
                            <p class="price">$60.00</p>
                            </div>

                            <div class="w-100"></div>
                            <div class="col-sm">
                            <img src="images/strawberry.jpg" alt="Product 4"
                                 width="150"
                                 height="150">                                     
                            <h2><a href="strawberry_cheesecake.php">Fresh Strawbery Cheesecake</a></h2>
                            <p>This is our Strawberry Cheesecake. </p>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="reviews">(40)</span>
                            <p class="price">$60.00</p>
                            </div>

                            <div class="col-sm">
                                <img src="images/oreo.jpg" alt="Product 5"
                                     width="150"
                                     height="150">
                                <h2><a href="oreo_cheesecake.php">Cookies & Cream</a></h2>
                                <p>This is our Oreo Cheesecake.</p>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star "></span>
                                <span class="reviews">(31)</span>
                                <p class="price">$60.00</p>
                            </div>  

                            <div class="col-sm">
                            <img src="images/tiramisu.jpg" alt="Product 6"
                                 width="150"
                                 height="150">
                            <h2><a href="tiramisu_cheesecake.php">Tiramisu Cheesecake</a></h2>
                            <p>This is our Tiramisu Cheesecake.</p>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="reviews">(18)</span>
                            <p class="price">$60.00</p>
                            </div>

                        </div>
                    </div>
            </section>
        <?php
            include "footer.inc.php";
        ?>
    </body>
</html>
