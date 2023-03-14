
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

<html>
    <head>
        <title>Product Details</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <?php
        include "head.inc.php";
    ?>
    
    <?php
        include "link.inc.php";
    ?>
 
    <?php
        include "nav.inc.php";
    ?>
    <body>
        <div class="small-container single-cake">
            <div class="row">
                <div class="col-2">
                    <p>Home / Cheesecakes / Red Velvety Cheesecake</p>
                    <img src="images/red_velvet.jpg" alt="Red Velvety Cheesecake">
                </div>
                
                <div class="details">
                    <h1>Red Velvety Cheesecake</h1>
                    <h4>$60.00</h4>                   
                    <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span>(20 reviews)</span>
                    </div>
                    <h2>Contains dairy, eggs and gluten</h2>
                    <div class="quantity-select">
                            <p>Quantity</p>
                            <input type="number" min="1" max="5" value="1">
                    </div>
                    <a href="shoppingCart.php" class="btn">Add to Cart</a>
                </div>
                <div class="description">
                    <h3>Product Description</h3>
                    <br>
                    <p>Experience the ultimate in indulgence with our classic red velvet cake!
                    <br>
                    Our cake is made with the perfect blend of buttermilk, cocoa powder, and vanilla, resulting in a luscious and velvety texture that simply melts in your mouth.                   
                    <br>
                    Each bite is a heavenly experience that's hard to resist.</p>
                    
                    <h5>Serving Directions</h5>
                    <p>*Serve within 2 days from thawing
                    <br>
                    1. Refrigerate cake in freezer (<-8°C) immediately.
                    <br>
                    2. Thaw in chiller (<4°C) for 1.5 hours and serve chilled.
                    <br>
                    <br>
                    Do not leave cake unrefrigerated for more than one hour.
                    <br>
                    Do not re-freeze after thawing.
                    <br>
                    If stored frozen (< -8°C), serve within 2 weeks.</p>
                </div>
            </div>
        </div>
    </body>
    <?php
        include "footer.inc.php";
    ?>
</html>
