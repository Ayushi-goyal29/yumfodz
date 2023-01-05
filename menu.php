<?php
	require './includes/common.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/responsive.css" />
    <style>
        
@import url(animate.css);
@import url(font-awesome.min.css);
@import url(superslides.css);
@import url(baguetteBox.min.css);
@import url("https://fonts.googleapis.com/css?family=Arbutus+Slab");
@import url("https://fonts.googleapis.com/css?family=Athiti:400,500,600");
@import url('https://fonts.googleapis.com/css?family=Dancing+Script:400,700&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&family=Lobster&display=swap');
        body
            {
                background-color: #fae4c8;
            }
            a
            {
                text-decoration: none;
                background-color: transparent;
                color:#ededed;
            }
      
            .jumbotron{
                width: auto;
                height: auto;
                background-color:#d69d53;
                
            }
            .jumbotron h1{
                top: 50%;
                text-align: center;
                color:black;
            }
            .heading
            {
                font-style: normal;
                font-family: cursive;
            }
            
            footer
            {
                padding-top:20px;
                font-size:30px;
                background-color:#101010;
                color:#9d9d9d;
                width: 100%;
            }
            .button
            {
                color: #fff;
                background-color: #c9302c;
                border-color: #ac2925;
                box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
                padding: 20px 10px;
                font-size: 18px;
                border-radius: 6px;
            }
            li{
                margin-top:10px;
                font-size:20px;
                border-width:0px 5px 15px 0px;
                padding-bottom:16px;
              }
            
           

            header{
                text-align: center;
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 30px 10%;
            }

      

.heading-title {
  margin-bottom: 20px;
  padding-top: 20px;
  padding-bottom: 20px;
  background-color: #d69d53;
}
.heading-title h2 {
  color: #010101;
  font-size: 38px;
  font-weight: bold;
  font-family: "Arbutus Slab", serif;
}  
.gallery-single {
  margin: 30px 0px;
}

.gallery-single {
  position: relative;
  overflow: hidden;
}
img{
    width: 500px;
    height: 300px;
}
.why-text {
  position: absolute;
  left: 0;
  bottom: -100%;
  right: 0;
  height: 100%;
  background: rgba(207, 166, 113, 0.9);
  padding: 12px 12px;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.why-text h4 {
  color: #ffffff;
  font-size: 24px;
  font-weight: 500;
  font-family: "Arbutus Slab", serif;
}
.why-text p {
  color: #ffffff;
  font-size: 18px;
  border-bottom: 1px dashed #010101;
  margin: 0px;
  padding-bottom: 15px;
  margin-top: 15px;
  margin-bottom: 15px;
}
.why-text h5 {
  font-size: 28px;
  font-weight: 600;
  color: #ffffff;
}
.why-text button {
  background-color: #e9af45; /* Green */
  border: none;
  color: black;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  font-weight: bold;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.gallery-single:hover .why-text {
  bottom: 0px;
}
            .nav_links{
                list-style: none;
            }

            .nav_links li{
                display: inline-block;
                padding: 0px 20px;
            }

            .nav_links li a{
                font-size: 26px;
                color: #101010;
                font-family: 'Fredoka One', cursive;
            }

            .nav_links li a:hover{
               color: #255784;
               background: rgb(252, 38, 0);
               box-shadow: 0 0 10px rgb(252, 38, 0), 0 0 40px rgb(252, 38, 0), 0 0 80px rgb(252, 38, 0);
            }
        </style>
</head>
<body>

    <?php
	require './includes/header.php';
	require './includes/check-if-added.php';
    ?>

    <div class="container">
        <center>
    <header>
    <nav>
    <ul class="nav_links">
        <li><a href="#FAST FOOD">FAST FOOD</a>
    </li>
        <li><a href="#INDIAN">INDIAN</a></li>
        <li><a href="#DESSERTS">DESSERTS</a></li>
        <li><a href="#CHINESE">CHINESE</a></li>
        <li><a href="#BEVEGRAGES">BEVEGRAGE</a></li>
    </ul>
    </nav>
</center>
</div>
    </header>
    <div class="container">
        <div class="row"> 
            
            <div class="container">
                <a name="FAST FOOD"></a>
                <div class="row">
                    <div class="col-lg-12">
                      <div class="heading-title text-center">
                        <h2>FAST FOOD - SATISFY YOUR SNACK ATTACK</h2>
                      </div>
                    </div>
                  </div>
            </div>
            

            <div class="col-lg-4 col-md-6">
                <div class="gallery-single fix">
                  <img src="https://us.123rf.com/450wm/dolgachov/dolgachov1603/dolgachov160305233/55283534-fast-food-and-unhealthy-eating-concept-close-up-of-fast-food-snacks-and-cola-drink-on-wooden-table.jpg?ver=6" class="img-fluid" alt="Image" />
                  <center>
                    <div class="why-text">
                        <h3 style="font-weight:bold";>COMBO BURGER PACK</h3>
                        <h4><p>Price: Rs. 399.00</p></h4>
                            <?php if(!isset($_SESSION["email_id"])){ ?>
                            <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                                <?php }else{ ?>
                                <?php if(check_if_added_to_cart(1)){ ?>
                                <a href="#" class="btn btn-success btn-block">Added to cart</a>
                                <?php }else{ ?>
                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                                <?php }
                                } ?>
                    </div>
                    </center>
                </div>
              </div>
              
              <div class="col-lg-4 col-md-6">
                <div class="gallery-single fix">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhig8FqUAiT1zxwUR1mFKQuzXrJ5NTm4smNQ&usqp=CAU">
                <center>
                <div class="why-text">
                    <h3 style="font-weight:bold";>LA PINO'Z PIZZA</h3>
                    <h4><p>Price: Rs. 150.00</p></h4>
                        <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                            <?php }else{ ?>
                            <?php if(check_if_added_to_cart(2)){ ?>
                            <a href="#" class="btn btn-success btn-block">Added to cart</a>
                            <?php }else{ ?>
                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php }
                            } ?>
                    </div>
                </center>
            </div>
            </div>
              
            <div class="col-lg-4 col-md-6">
                <div class="gallery-single fix">
                <img src ="https://images.hindustantimes.com/rf/image_size_630x354/HT/p2/2018/06/02/Pictures/assorted-junk-food_1b488780-6635-11e8-b4a9-2154dcd09999.jpg">
                <center>
                <div class="why-text">
                    <h3 style="font-weight:bold";>COMBO FRENCH FRIES</h3>
                    <h4><p>Price: Rs. 199.00</p></h4>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                            <?php }else{ ?>
                            <?php if(check_if_added_to_cart(3)){ ?>
                            <a href="#" class="btn btn-success btn-block">Added to cart</a>
                            <?php }else{ ?>
                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php }
                            } ?>
                        </div>
                </center>
            </div>
            </div>             
               
            <div class="col-lg-4 col-md-6">
                <div class="gallery-single fix">
                <img src="https://hungryfinger.com/wp-content/uploads/2020/05/Veg-momos.png">
                <center>
                <div class="why-text">
                    <h3 style="font-weight:bold";>MOMOS</h3>
                    <h4><p>Price: Rs. 60.00</p></h4>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                            <?php }else{ ?>
                            <?php if(check_if_added_to_cart(4)){ ?>
                            <a href="#" class="btn btn-success btn-block">Added to cart</a>
                            <?php }else{ ?>
                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php }
                            } ?>
                    </div>
                </center>
            </div>
            </div>
                       
            <div class="col-lg-4 col-md-6">
                <div class="gallery-single fix">
                <img src="https://www.foreverwallpapers.com/wp-content/uploads/2018/12/Fast-Food.jpg">
                <center>
                <div class="why-text">
                    <h3 style="font-weight:bold";>VEG PANEER ROLLS</h3>
                    <h4><p>Price: Rs. 100.00</p></h4>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                            <?php }else{ ?>
                            <?php if(check_if_added_to_cart(5)){ ?>
                            <a href="#" class="btn btn-success btn-block">Added to cart</a>
                            <?php }else{ ?>
                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php }
                            } ?>
                    </div>
                </center>
            </div>
            </div>
                   
            <div class="col-lg-4 col-md-6">
                <div class="gallery-single fix">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrDYY8goQt320i_edyjy0gsG1sL-tdx51fqw&usqp=CAU"> 
                <center>
                <div class="why-text">
                    <h3 style="font-weight:bold";>CHOW MEIN</h3>
                    <h4><p>Price: Rs. 80.00</p></h4>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(6)){ ?>
                        <a href="#" class="btn btn-success btn-block">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>
            
        </div>
              
<br><br>
        
        <div class="row"> 
                
            <div class="container">
                <a name = "INDIAN"></a>
                <div class="row">
                    <div class="col-lg-12">
                      <div class="heading-title text-center">
                        <h2>INDIAN FOOD</h2>
                      </div>
                    </div>
                  </div>
            </div>
              
            <div class="col-lg-4 col-md-6">
                <div class="gallery-single fix">
                <img src="https://images.pexels.com/photos/2474661/pexels-photo-2474661.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
                <center>
                <div class="why-text">
                    <h3 style="font-weight:bold";><center>KADAI PANEER</h3>
                    <h4><p>Price: Rs. 250.00</p></h4>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(7)){ ?>
                        <a href="#" class="btn btn-success btn-block">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>
                
            <div class="col-lg-4 col-md-6">
                <div class="gallery-single fix">
                <img src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_508,h_320,c_fill/plcgmwy4a4peop7eebr6">
                <center>
                <div class="why-text">
                    <h3 style="font-weight:bold">IDLI SAMBAR</h3>
                    <h4><p>Price: Rs. 100.00</p></h4>
                        <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(8)){ ?>
                        <a href="#" class="btn btn-success btn-block">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>
                
            <div class="col-lg-4 col-md-6">
                <div class="gallery-single fix">
                <img src="https://images.pexels.com/photos/958547/pexels-photo-958547.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
                <center>
                <div class="why-text">
                    <h3 style="font-weight:bold">DRY KOFTE</h3>
                    <h4><p>Price: Rs. 175.00</p></h4>
                        <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(9)){ ?>
                        <a href="#" class="btn btn-success btn-block">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>         
               
            <div class="col-lg-4 col-md-6">
                <div class="gallery-single fix">
                <img src="https://images.pexels.com/photos/2233729/pexels-photo-2233729.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
                <center>
                <div class="why-text">
                    <h3 style="font-weight:bold">TANDORI CHICKEN</h3>
                    <h4><p>Price: Rs. 300.00</p></h4>
                        <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(10)){ ?>
                        <a href="#" class="btn btn-success btn-block">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>        
                  
            <div class="col-lg-4 col-md-6">
                <div class="gallery-single fix">
                <img src="https://images.pexels.com/photos/62097/pexels-photo-62097.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
                <center>
                <div class="why-text">
                    <h3 style="font-weight:bold";>FRENCH FRIES</h3>
                    <h4><p>Price: Rs. 100.00</p></h4>
                        <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(11)){ ?>
                        <a href="#" class="btn btn-success btn-block">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>
                
            <div class="col-lg-4 col-md-6">
                <div class="gallery-single fix">
                <img src="https://miro.medium.com/max/2400/1*InlgltnGNwj7W93dJ_oQ_g.jpeg">
                <center>
                <div class="why-text">
                    <h3 style="font-weight:bold";>STUFFED DOSA</h3>
                    <h4><p>Price: Rs. 125.00</p></h4>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(12)){ ?>
                        <a href="#" class="btn btn-success btn-block">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>
                  
        </div>      
           
        <br><br>
              
        <div class="row">
                
            <div class="container">
                <a name = "DESSERTS"></a>
                <div class="row">
                    <div class="col-lg-12">
                      <div class="heading-title text-center">
                        <h2>MOUTH WATERING DESSERTS</h2>
                      </div>
                    </div>
                  </div>
            </div>
                 
            <div class="col-lg-4 col-md-6">
                <div class="gallery-single fix">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKjJYLlRtRbIfOUIEWJn6bPS_UKmJIIGkoBA&usqp=CAU">
                <center>
                <div class="why-text">
                    <h3 style="font-weight:bold";><center>CRUMBLE BALL</h3>
                    <h4><p>Price: Rs. 100.00</p></h4>
                        <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(13)){ ?>
                        <a href="#" class="btn btn-success btn-block">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>
                           
            <div class="col-lg-4 col-md-6">
                <div class="gallery-single fix">
                <img src="https://i.pinimg.com/originals/2e/91/07/2e9107a35faf761aab735c1552498484.jpg">
                <center>
                <div class="why-text">
                    <h3 style="font-weight:bold";><center>CHOCOLATE TRUFFLE</h3>
                    <h4><p>Price: Rs. 150.00</p></h4>
                        <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(14)){ ?>
                        <a href="#" class="btn btn-success btn-block">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=14" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>
                  
            <div class="col-lg-4 col-md-6">
                <div class="gallery-single fix">
                <img src="https://lh3.googleusercontent.com/CaLq1cEKRajjyDaF4K4h0LOFYuCtZcQ1qkc19veXcT5Xzhx78pQatiR1_kv8KNxa-gmRjyDd88BfrXzkKreQwOuqWbWlK6MFGO33n1w=s1200-p">
                <center>
                <div class="why-text">
                    <h3 style="font-weight:bold";><center>STRAWBERRY TRUFFLE</h3>
                    <h4><p>Price: Rs. 200.00</p></h4>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(15)){ ?>
                        <a href="#" class="btn btn-success btn-block">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=15" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>        
      
            <div class="col-lg-4 col-md-6">
                <div class="gallery-single fix">
                <img src="https://images.herzindagi.info/image/2019/Oct/gulab-jamuns.jpg">
                <center>
                <div class="why-text">
                    <h3 style="font-weight:bold";><center>GULAM JAMUN</h3>
                    <h4><p>Price: Rs. 150.00</p></h4>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(16)){ ?>
                        <a href="#" class="btn btn-success btn-block">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>  
              
            <div class="col-lg-4 col-md-6">
                <div class="gallery-single fix">
                <img src="https://media.gettyimages.com/photos/chocolate-glazed-cake-vanilla-ice-cream-picture-id183041544?k=6&m=183041544&s=612x612&w=0&h=8c0Zh1BWj0d65lJlCa_vJoflwQHmsjznw4UF9li6bxw=">
                <center>
                <div class="why-text">
                    <h3 style="font-weight:bold";><center>CHOCOLATE PUDDING</h3>
                    <h4><p>Price: Rs. 250.00</p></h4>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(17)){ ?>
                        <a href="#" class="btn btn-success btn-block">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=17" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>
              
            <div class="col-lg-4 col-md-6">
            <div class="gallery-single fix">
                <img src="https://i.pinimg.com/originals/ba/d6/85/bad685d0f45eb5652aafc91aa3c98bd5.jpg">
                <center>
                <div class="why-text">
                    <h3 style="font-weight:bold";><center>VANILLA WAFFLES</h3>
                    <h4><p>Price: Rs. 200.00</p></h4>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(18)){ ?>
                        <a href="#" class="btn btn-success btn-block">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=18" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>
        
        </div>
    <br><br>
        
        <div class="row">    
            
            <div class="container">
                <a name = "CHINESE"></a>
                <div class="row">
                    <div class="col-lg-12">
                      <div class="heading-title text-center">
                        <h2>CHINESE FOOD</h2>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-md-6">
            <div class="gallery-single fix">
                <img src="https://images.pexels.com/photos/2347311/pexels-photo-2347311.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260">
                <center>
                <div class="why-text">
                    <h3 style="font-weight:bold";><center>CHOW MEIN</center></h3>
                    <h4><p>Price: Rs. 150.00</p></h4>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(19)){ ?>
                        <a href="#" class="btn btn-success btn-block">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=19" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>
                           
            <div class="col-lg-4 col-md-6">
            <div class="gallery-single fix">
                <img src="https://images.chinahighlights.com/allpicture/2019/11/a47d9323b7ae409ba96e628d_894x596.jpg">
                <center>
                <div class="why-text">
                    <h3 style="font-weight:bold"><center>CHICKEN MANCHURIAN</center></h3>
                    <h4><p>Price: Rs. 250.00</p></h4>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(20)){ ?>
                        <a href="#" class="btn btn-success btn-block">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=20" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>
                    
            <div class="col-lg-4 col-md-6">
            <div class="gallery-single fix">
                <img src="https://images.chinahighlights.com/allpicture/2019/11/31acb7b302ec4b48b17443ed_893x595.jpg">
                <center>
                <div class="why-text">
                    <h3 style="font-weight:bold";><center> TSO'S CHICKEN</center></h3>
                    <h4><p>Price: Rs. 350.00</p></h4>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(21)){ ?>
                        <a href="#" class="btn btn-success btn-block ">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=21" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
            <div class="gallery-single fix">
                <img src="https://www.ocregister.com/wp-content/uploads/2020/10/OCR-L-BP-Chinese-Meizhou-1016.jpg">
                <center>
                <div class="why-text">
                    <h3 style="font-weight:bold";><center>NOODLES</center></h3>
                    <h4><p>Price: Rs. 150.00</p></h4>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(22)){ ?>
                        <a href="#" class="btn btn-success btn-block">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=22" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>
                  
            <div class="col-lg-4 col-md-6">
            <div class="gallery-single fix">
                <img src="https://townsquare.media/site/696/files/2020/10/Zen-Chinese-Bistro-Portland-Facebook.jpg?w=980&q=75">
                <center>
                <div class="why-text">
                    <h3 style="font-weight:bold";><center>KUNG PAO CHICKEN</center></h3>
                    <h4><p>Price: Rs. 400.00</p></h4>
                        <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(23)){ ?>
                        <a href="#" class="btn btn-success btn-block">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=23" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>
                    
            <div class="col-lg-4 col-md-6">
            <div class="gallery-single fix">
                <img src="https://www.kinki.ca/wp-content/uploads/2018/06/Canadian-Chinese-Food-10-Greatest-Dishes-800x444.jpg">
                <center>
                <div class="why-text">
                    <h3 style="font-weight:bold";><center>DUMPLINGS</center></h3>
                   <h4><p>Price: Rs. 350.00</p></h4>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(24)){ ?>
                        <a href="#" class="btn btn-success btn-block">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=24" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>
                    
        </div>
        <br><br>
                      
        <div class="row">    
                    
            <div class="container">v
                <a name="BEVEGRAGES"></a>
                <div class="row">
                    <div class="col-lg-12">
                      <div class="heading-title text-center">
                        <h2>BEVEGRAGE</h2>
                      </div>
                    </div>
                  </div>
            </div>
               
            <div class="col-lg-4 col-md-6">
            <div class="gallery-single fix">
                <img src="https://images.unsplash.com/photo-1536935338788-846bb9981813?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=686&q=80">
                <center>
                <div class="why-text">
                    <h3 style="font-weight:bold";><center>POMEGRANATE JUICE</center></h3>
                    <h4><p>Price: Rs. 40.00</p></h4>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(25)){ ?>
                        <a href="#" class="btn btn-success btn-block">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=25" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>        
                    
            <div class="col-lg-4 col-md-6">
            <div class="gallery-single fix">
                <img src="https://images.pexels.com/photos/452737/pexels-photo-452737.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
                <center>
                <div class="why-text">
                    <h3 style="font-weight:bold";><center>MANGO SHAKE</center></h3>
                    <h4><p>Price: Rs. 80.00</p></h4>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(26)){ ?>
                        <a href="#" class="btn btn-success btn-block">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=26" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
            <div class="gallery-single fix">
                <img src="https://media.gettyimages.com/photos/closeup-of-drink-pouring-in-drinking-glass-against-black-background-picture-id989381534?s=612x612">
                <center>
                <div class="why-text">
                    <h3 style="font-weight:bold";><center>COLA<center></h3>
                    <h4><p>Price: Rs. 70.00</p></h4>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(27)){ ?>
                        <a href="#" class="btn btn-success btn-block">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=27" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>

            <div class="col-lg-4 col-md-6">
            <div class="gallery-single fix">
                <img src="https://dynaimage.cdn.cnn.com/cnn/c_fill,g_auto,w_1200,h_675,ar_16:9/https%3A%2F%2Fcdn.cnn.com%2Fcnnnext%2Fdam%2Fassets%2F150929101049-black-coffee-stock.jpg">     
                <div class="why-text">
                    <h3 style="font-weight:bold";><center>BLACK COFFEE</center></h3>
                    <center><h4><p>Price: Rs. 60.00</p></h4></center>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(28)){ ?>
                        <a href="#" class="btn btn-success btn-block">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=28" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
            </div>
            </div>
                 
            <div class="col-lg-4 col-md-6">
            <div class="gallery-single fix">
                <img src="https://www.incimages.com/uploaded_files/image/1920x1080/getty_500740897_200013331653767347294_333325.jpg">
                <center>
                <div class="why-text">
                    <h3 style="font-weight:bold"><center>CAPPUCCINO</center></h3>
                    <h4><p>Price: Rs. 90.00</p></h4>
                <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(29)){ ?>
                        <a href="#" class="btn btn-success btn-block">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=29" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                    
                     
                </div>
                </center>
            </div>
            </div>
                 
            <div class="col-lg-4 col-md-6">
            <div class="gallery-single fix">
                <img src="http://www.baileys.com/media/oiylzg43/baileys-irish-coffee-hero.jpg">
                <center>
                <div class="why-text">
                    <h3 style="font-weight:bold"><center>ICE TEA</center></h3>
                    <h4><p>Price: Rs. 30.00</p></h4>
                        <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(30)){ ?>
                        <a href="#" class="btn btn-success btn-block ">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=30" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>     
            </div>             
    </div>
    </div>
            
    <footer>
        <div class="container-fluid">
        <center>
            <p style="font-weight:bolder;font-size:20px";>Copyright @ Our website delivers the best customer experience. All Rights 
                            Reserved | Contact Us: +91 8573843441</p>
        </center>
        </div>
    </footer>

</body>
</html>
