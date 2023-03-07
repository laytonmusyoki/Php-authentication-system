<?php
session_start();

?>
<!DOCTYPE html>
<html>
    <head>

        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
        <meta name="viewport"content="width=device-width,initial-scale=1.0">
        <title>Home page</title>
        <style>
            .logo h1{
                color: gold;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            }
            .logo span {
                color: red;
            }
            ul li a:hover{
                text-decoration: underline;
            }
            .navbar{
                align-items: center;
            }
            .footer-col-2 h1{
                color: gold;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            }
            .footer-col-2 span{
                color: red;
            }
        </style>
    </head>
    <body>
        <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <h1>LAYTON<span>STORE</span></h1>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li> <a href="#">Home</a></li>
                        <li> <a href="#">Products</a></li>
                        <li> <a href="#">About</a></li>
                        <li> <a href="#">Account</a></li>
                   <li><form method="POST">
                    <button name="logout">LOG OUT</button>
                    </form></li>
                    </ul>
                    <?php
if(isset($_POST['logout'])){
    session_destroy();
    header("location:signin.php");
}
?>
                
                </nav>
                   
                
            </div>
            <div class="row">
                <div class="col-2">
                    <h1>Give Your Workout <br> A New Style!</h1>
                    <p>Success isn't always about greatness.It's about consistency.Consistent <br> hardwork gains success.Greatness will come.</p>
                     <a href=""class="btn">Explore Now &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="img.jpg.png" >
                </div>
            </div>
        </div>
    </div>
<!-------featured categories-------->
              <div class="categories">
                <div class="small-container">
                    <div class="row">
                        <div class="col-3">
                            <img src="img1.jpg.jpg">
                        </div>
                        <div class="col-3">
                            <img src="img2.jpg.jpg" >
                        </div>
                        <div class="col-3">
                            <img src="img3.jpg.jpg" >
                        </div>
                    </div>
                </div>
                
              </div>

             <!---------featured products------->
              <div class="small-container">
                <h2 class="title">Featured Products</h2>
                <div class="row">
                    <div class="col-4">
                        <img src="img4.jpg.jpg"width="450"height="270" >
                        <h4>I Stoke Product</h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                        </div>
                        <P>Ksh.1500</P>
                    </div>
                    
                    <div class="col-4">
                        <img src="img6.jpg.jpg" height="270">
                        <h4>I Stoke Product</h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                        </div>
                        <P>Ksh.1500</P>
                    </div>


                    <div class="col-4">
                        <img src="img7.jpg"height="270" >
                        <h4>I Stoke Product</h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                        </div>
                        <P>Ksh.1500</P>
</div>



                    
                </div>
                <h2 class="title">Latest Products</h2>

                <div class="row">
                    <div class="col-4">
                        <img src="img4.jpg.jpg" height="270">
                        <h4>I Stoke Product</h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                        </div>
                        <P>Ksh.1500</P>
                    </div>
                    
                    <div class="col-4">
                        <img src="img6.jpg.jpg"height="270" >
                        <h4>I Stoke Product</h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                        </div>
                        <P>Ksh.1500</P>
                    </div>

                    <div class="col-4">
                        <img src="img7.jpg"height="270" >
                        <h4>I Stoke Product</h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                        </div>
                        <P>Ksh.1500</P>
</div>
<div class="row">
    <div class="col-4">
        <img src="img4.jpg.jpg"height="270" >
        <h4>I Stoke Product</h4>
        <div class="rating">
            <i class="fa fa-star"></i>
        </div>
        <P>Ksh.1500</P>
    </div>
    
    <div class="col-4">
        <img src="img6.jpg.jpg"height="270" >
        <h4>I Stoke Product</h4>
        <div class="rating">
            <i class="fa fa-star"></i>
        </div>
        <P>Ksh.1500</P>
    </div>

    <div class="col-4">
        <img src="img7.jpg"height="270" >
        <h4>I Stoke Product</h4>
        <div class="rating">
            <i class="fa fa-star"></i>
        </div>
        <P>Ksh.1500</P>
</div>

                
           <!--------- offer------->
<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <img src="img5.jpg.png" class="offer-img">
            </div>
            <div class="col-2">
               <p>Exlusively Available on LaytonStore</p>
                <h1>Smart Band 4</h1>
                <small>The Mi Smart Band 4 feartures a 40.9% Larger (than Mi Band 3)</small><br>
                <a href=""class="btn">Buy Now &#8594;</a>
            </div>
        </div>
    </div>
</div>


<!-------footer----->
   <div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download our app</h3>
                <p>Download App for Android and ios mobile phone.</p>
            </div>
            <div class="footer-col-2">
            <h1>LAYTON<span>STORE</span></h1>
                <p>Our Purpose Is To Sustainably Make the Pleasure and Benefits of Cosmetics to the many.</p>
            </div>
            <div class="footer-col-3">
                <h3>Useful Links</h3>
                <ul>
                    <li>coupons</li>
                    <li>Blog Post</li>
                    <li>Return policy</li>
                    <li>Join Affiliate</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow us </h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>Youtube</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">&copy; copyright 2023-layton softwares </p>
    </div>
   </div>
<!------------js toggle menu------>

<script>
    var MenuItems=document.getElementById("MenuItems");

    MenuItems.style.height="0px";

     function menutoggle(){
        if(MenuItems.style.maxHeight=="0px"){
            MenuItems.style.maxHeight="200px";
        }
        else{
            MenuItems.style.maxHeight="0px";
        }
     }

</script>

</html>
</body>