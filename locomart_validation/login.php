<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locomart /Signup</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
    

<?php
$db_hostname="127.0.0.1";
$db_username="root";
$db_password="";
$db_database="locomart";

$conn= mysqli_connect($db_hostname,$db_username,$db_password,$db_database);
?>

<?php
if(!$conn){
    echo "connection failed".mysqli_connect_error();
    exit;
}




$email=$_POST["Email"];
$password=$_POST["Password"];

$sql= "SELECT * FROM users WHERE Email='$email' and password='$password'";

$result=mysqli_query($conn,$sql);
if(!$result){
    echo "error find in query ==> " .mysqli_error($conn);
    exit;
}
?>
 <div class="main">
        <div class="fixed">

<div class="navbar" style="background-color: rgb(77, 77, 240);">

<div class="logo">
    <img src="pics/shop_crop-removebg-preview.png" alt="">
    <div class="logotxt">
        <h1>Loco<span>Mart</span></h1>
        <p><i>Buy Products with Local shop.</i></p>
    </div>
</div>
<div class="menu">

    <i class="fa fa-search">
        <input type="text" placeholder="Search Your Product Here"></i>
   
</div>


<div class="cart">
<i class="fa fa-user"></i>
<p class="name">
<?php

while($row=mysqli_fetch_assoc($result)){
    echo" Welcome....".$row['Name'];
}
?>
</p>
<i class="fa fa-cart-plus" id="ab"></i> <a href="#" class="my-cart">My Cart</a>
</div>
</div>




<div class="catagory">
                <div class="location">
                    <i class="fa fa-map-marker" style="font-size: 30px;"></i>
                    <h4>Deliver to<br><span class="pincode">226202</span></h4>


                    <div class="right-menu">
                        <a href="#">Grocery <i class="fa fa-chevron-down"></i></a>
                        <div class="dropdown-menu">
                            <div class="flex">
                            <div class="line1">
                                <a href="#">home</a>
                                <a href="#">home</a>
                                <a href="#">home</a>
                                <a href="#">home</a>
                                <a href="#">home</a>
                                <a href="#">home</a>
                            </div><br>
                            <div class="line2">
                                <a href="#">home</a>
                                <a href="#">home</a>
                                <a href="#">home</a>
                                <a href="#">home</a>
                                <a href="#">home</a>
                                <a href="#">home</a>
                            </div><br>
                            <div class="line3">
                                <a href="#">home</a>
                                <a href="#">home</a>
                                <a href="#">home</a>
                                <a href="#">home</a>
                                <a href="#">home</a>
                                <a href="#">home</a>
                            </div>
                            </div>
                        </div>
                    </div>



                    <div class="right-menu">
                        <a href="#">Premium Fruit <i class="fa fa-chevron-down"></i></a>
                        <div class="dropdown-menu">
                            <a href="#">home</a>
                            <a href="#">home</a>
                            <a href="#">home</a>
                            <a href="#">home</a>
                            <a href="#">home</a>
                            <a href="#">home</a>
                        </div>
                    </div>

                    <div class="right-menu">
                        <a href="#">Home & Kitchen<i class="fa fa-chevron-down"></i></a>
                        <div class="dropdown-menu">
                            <a href="#">home</a>
                            <a href="#">home</a>
                            <a href="#">home</a>
                            <a href="#">home</a>
                            <a href="#">home</a>
                            <a href="#">home</a>
                        </div>
                    </div>

                    <div class="right-menu">
                        <a href="#">Fashion<i class="fa fa-chevron-down"></i></a>
                        <div class="dropdown-menu">
                            <a href="#">home</a>
                            <a href="#">home</a>
                            <a href="#">home</a>
                            <a href="#">home</a>
                            <a href="#">home</a>
                            <a href="#">home</a>
                        </div>
                    </div>

                    <div class="right-menu">
                        <a href="#">Electronics<i class="fa fa-chevron-down"></i></a>
                        <div class="dropdown-menu">
                            <a href="#">home</a>
                            <a href="#">home</a>
                            <a href="#">home</a>
                            <a href="#">home</a>
                            <a href="#">home</a>
                            <a href="#">home</a>
                        </div>
                    </div>

                    <div class="right-menu">
                        <a href="#">Beuty<i class="fa fa-chevron-down"></i></a>
                        <div class="dropdown-menu">
                            <a href="#">home</a>
                            <a href="#">home</a>
                            <a href="#">home</a>
                            <a href="#">home</a>
                            <a href="#">home</a>
                            <a href="#">home</a>
                        </div>
                    </div>


                    <div class="right-menu">
                        <a href="#">Jewellery<i class="fa fa-chevron-down"></i></a>
                        <div class="dropdown-menu">
                            <a href="#">home</a>
                            <a href="#">home</a>
                            <a href="#">home</a>
                            <a href="#">home</a>
                            <a href="#">home</a>
                            <a href="#">home</a>
                        </div>
                    </div>







                </div>
            </div>
        </div>
        <div class="slideshow-container">

            <div class="mySlides fade">
                <img src="pics/sl1.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="pics/sl2.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="pics/sl3.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="pics/sl4.jpg" style="width:100%">
            </div>


            <div class="mySlides fade">
                <img src="pics/img5.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="pics/img6.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="pics/img7.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="pics/img8.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="pics/img9.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="pics/img10.jpg" style="width:100%">
            </div>

        </div>
        <br>


        <div style="text-align:center; margin-top: -10px;">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>

        <script>
            let slideIndex = 0;
            showSlides();

            function showSlides() {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) { slideIndex = 1 }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
        </script>

        <div class="ads">
            <div class="banner">
                <img src="pics/free-delivery.jpg" alt="">
            </div>
            <div class="banner">
                <img src="pics/jiomart.jpg" alt="">
            </div>
            <div class="banner">
                <img src="pics/trendz.jpg" alt="">
            </div>

        </div>


        <!-- -------------women s section--------- -->

        <div class="section">
            <div class="show">
                <h2>Woman's Wear<i class="fa fa-arrow-right"></i></h2>
                <a href="#">View All</a>
            </div>
            <div class="shop">
                <div class="box-container">
                    <div class="box">
                        <img src="pics/wedding-removebg-preview.png" alt="">
                    </div>
                    <p>Wedding Dress</p>
                </div>
                <div class="box-container">
                    <div class="box">
                        <img src="pics/Sweater-removebg-preview.png" alt="">
                    </div>
                    <p>Sweater</p>
                </div>
                <div class="box-container">
                    <div class="box">
                        <img src="pics/party-removebg-preview.png" alt="">
                    </div>
                    <p>Party Wear</p>
                </div>
                <div class="box-container">
                    <div class="box">
                        <img src="pics/skirt-removebg-preview.png" alt="">
                    </div>
                    <p>Skirt</p>
                </div>
                <div class="box-container">
                    <div class="box">
                        <img src="pics/jeans-removebg-preview.png" alt="">
                    </div>
                    <p>Jeans</p>
                </div>
                <div class="box-container">
                    <div class="box">
                        <img src="pics/watch-removebg-preview.png" alt="">
                    </div>
                    <p>Watch</p>
                </div>
                <div class="box-container">
                    <div class="box">
                        <img src="pics/sandles-removebg-preview.png" alt="">
                    </div>
                    <p>Shoes & Sandales</p>
                </div>


            </div>
        </div>


        <!--------------------- mens Section-------------------------------------------- -->


        <div class="section">
            <div class="show">
                <h2>Men's Wear<i class="fa fa-arrow-right"></i></h2>
                <a href="#">View All</a>
            </div>
            <div class="shop">
                <div class="box-container">
                    <div class="box">
                        <img src="pics/mens_wedding-removebg-preview.png" alt="">
                    </div>
                    <p>Wedding Dress</p>
                </div>
                <div class="box-container">
                    <div class="box">
                        <img src="pics/men_sweater-removebg-preview.png" alt="">
                    </div>
                    <p>Sweater</p>
                </div>
                <div class="box-container">
                    <div class="box">
                        <img src="pics/men_party-removebg-preview.png" alt="">
                    </div>
                    <p>Party Wear</p>
                </div>
                <div class="box-container">
                    <div class="box">
                        <img src="pics/men_tshirt-removebg-preview.png" alt="">
                    </div>
                    <p>Shirt</p>
                </div>
                <div class="box-container">
                    <div class="box">
                        <img src="pics/men_jeans-removebg-preview.png" alt="">
                    </div>
                    <p>Jeans</p>
                </div>
                <div class="box-container">
                    <div class="box">
                        <img src="pics/men_watch-removebg-preview.png" alt="">
                    </div>
                    <p>Watch</p>
                </div>
                <div class="box-container">
                    <div class="box">
                        <img src="pics/Men-Shoes.png" alt="">
                    </div>
                    <p>Shoes & Sandales</p>
                </div>
            </div>
        </div>

        <!-- ------------Children section------------ -->


        <div class="section">
            <div class="show">
                <h2>Kid's Wear<i class="fa fa-arrow-right"></i></h2>
                <a href="#">View All</a>
            </div>
            <div class="shop">
                <div class="box-container">
                    <div class="box">
                        <img src="pics/kids_weding2-removebg-preview.png" alt="">
                    </div>
                    <p>Wedding Dress</p>
                </div>
                <div class="box-container">
                    <div class="box">
                        <img src="pics/kids_sweater-removebg-preview.png" alt="">
                    </div>
                    <p>Sweater</p>
                </div>
                <div class="box-container">
                    <div class="box">
                        <img src="pics/kids_wedding-removebg-preview.png" alt="">
                    </div>
                    <p>Party Wear</p>
                </div>
                <div class="box-container">
                    <div class="box">
                        <img src="pics/kids_shirt-removebg-preview.png" alt="">
                    </div>
                    <p>Shirt</p>
                </div>
                <div class="box-container">
                    <div class="box">
                        <img src="pics/kids_jeans-removebg-preview.png" alt="">
                    </div>
                    <p>Jeans</p>
                </div>
                <div class="box-container">
                    <div class="box">
                        <img src="pics/watch-removebg-preview.png" alt="">
                    </div>
                    <p>Watch</p>
                </div>
                <div class="box-container">
                    <div class="box">
                        <img src="pics/kids_shoes-removebg-preview.png" alt="">
                    </div>
                    <p>Shoes & Sandales</p>
                </div>
            </div>
        </div>



        <!-- -----------------vegrtable & fruit------------ -->


        <div class="section">
            <div class="show">
                <h2>Fresh Fruits & Vegetables<i class="fa fa-arrow-right"></i></h2>
                <a href="#">View All</a>
            </div>
            <div class="shop">
                <div class="box-container">
                    <div class="box">
                        <img src="pics/wedding-removebg-preview.png" alt="">
                    </div>
                    <p>Wedding Dress</p>
                </div>
                <div class="box-container">
                    <div class="box">
                        <img src="pics/Sweater-removebg-preview.png" alt="">
                    </div>
                    <p>Sweater</p>
                </div>
                <div class="box-container">
                    <div class="box">
                        <img src="pics/party-removebg-preview.png" alt="">
                    </div>
                    <p>Party Wear</p>
                </div>
                <div class="box-container">
                    <div class="box">
                        <img src="pics/skirt-removebg-preview.png" alt="">
                    </div>
                    <p>Skirt</p>
                </div>
                <div class="box-container">
                    <div class="box">
                        <img src="pics/jeans-removebg-preview.png" alt="">
                    </div>
                    <p>Jeans</p>
                </div>
                <div class="box-container">
                    <div class="box">
                        <img src="pics/watch-removebg-preview.png" alt="">
                    </div>
                    <p>Watch</p>
                </div>
                <div class="box-container">
                    <div class="box">
                        <img src="pics/sandles-removebg-preview.png" alt="">
                    </div>
                    <p>Shoes & Sandales</p>
                </div>
            </div>
        </div>


        <!-- ----------------fast food------------------ -->

        <div class="section">
            <div class="show">
                <h2>Fast Fooding Area<i class="fa fa-arrow-right"></i></h2>
                <a href="#">View All</a>
            </div>
            <div class="shop">
                <div class="box-container">
                    <div class="box">
                        <img src="pics/wedding-removebg-preview.png" alt="">
                    </div>
                    <p>Wedding Dress</p>
                </div>
                <div class="box-container">
                    <div class="box">
                        <img src="pics/Sweater-removebg-preview.png" alt="">
                    </div>
                    <p>Sweater</p>
                </div>
                <div class="box-container">
                    <div class="box">
                        <img src="pics/party-removebg-preview.png" alt="">
                    </div>
                    <p>Party Wear</p>
                </div>
                <div class="box-container">
                    <div class="box">
                        <img src="pics/skirt-removebg-preview.png" alt="">
                    </div>
                    <p>Skirt</p>
                </div>
                <div class="box-container">
                    <div class="box">
                        <img src="pics/jeans-removebg-preview.png" alt="">
                    </div>
                    <p>Jeans</p>
                </div>
                <div class="box-container">
                    <div class="box">
                        <img src="pics/watch-removebg-preview.png" alt="">
                    </div>
                    <p>Watch</p>
                </div>
                <div class="box-container">
                    <div class="box">
                        <img src="pics/sandles-removebg-preview.png" alt="">
                    </div>
                    <p>Shoes & Sandales</p>
                </div>
            </div>
        </div>


        <!-- -------------------Snackes & buiskits--------- -->



        <div class="section">
            <div class="show">
                <h2>Snackes & Biskits <i class="fa fa-arrow-right"></i> </h2>
                <a href="#">View All</a>
            </div>
            <div class="shop">
                <div class="box-container">
                    <div class="box">
                        <img src="pics/wedding-removebg-preview.png" alt="">
                    </div>
                    <p>Wedding Dress</p>
                </div>
                <div class="box-container">
                    <div class="box">
                        <img src="pics/Sweater-removebg-preview.png" alt="">
                    </div>
                    <p>Sweater</p>
                </div>
                <div class="box-container">
                    <div class="box">
                        <img src="pics/party-removebg-preview.png" alt="">
                    </div>
                    <p>Party Wear</p>
                </div>
                <div class="box-container">
                    <div class="box">
                        <img src="pics/skirt-removebg-preview.png" alt="">
                    </div>
                    <p>Skirt</p>
                </div>
                <div class="box-container">
                    <div class="box">
                        <img src="pics/jeans-removebg-preview.png" alt="">
                    </div>
                    <p>Jeans</p>
                </div>
                <div class="box-container">
                    <div class="box">
                        <img src="pics/watch-removebg-preview.png" alt="">
                    </div>
                    <p>Watch</p>
                </div>
                <div class="box-container">
                    <div class="box">
                        <img src="pics/sandles-removebg-preview.png" alt="">
                    </div>
                    <p>Shoes & Sandales</p>
                </div>
            </div>
        </div>



        <!-- ---------------medical section----------- -->
        <div class="safai">
            <img src="pics/safai.jpg" alt="">
        </div>
        <!-- ---------------top deals------------ -->


        <div class="section">
            <div class="show">
                <h2>TOP DEALS<i class="fa fa-arrow-right"></i> </h2>
                <a href="#">View All</a>
            </div>
            <div class="shop">
                <div class="box-container" id="sbc">
                    <div class="box2">
                        <span class="disc2">
                            <p> Free <br> Gift </p>
                        </span>
                        <div class="images">
                            <img src="pics/wedding-removebg-preview.png" alt="">
                        </div>
                        <h4>Daawat festive Feast-<br>biryani bass..</h4><br>
                        <p><b>Rs 265.00</b></p>
                        <p class="margin">M.R.P: Rs <s>320.00 </s></p>
                        <p class="save">Save Rs 55.00</p><br>
                        <div class="cart">
                            <h4>Add to Cart</h4>
                            <h4 class="plus">+</h4>
                        </div>
                    </div>

                </div>
                <div class="box-container">
                    <div class="box2">
                        <span class="disc2">
                            <p> 70% <br> Off </p>
                        </span>
                        <div class="images">
                            <img src="pics/party-removebg-preview.png" alt="">
                        </div>
                        <h4>Daawat festive Feast-<br>biryani bass..</h4><br>
                        <p><b>Rs 265.00</b></p>
                        <p class="margin">M.R.P: Rs <s>320.00 </s></p>
                        <p class="save">Save Rs 55.00</p><br>
                        <div class="cart">
                            <h4>Add to Cart</h4>
                            <h4 class="plus">+</h4>
                        </div>
                    </div>

                </div>
                <div class="box-container">
                    <div class="box2">
                        <span class="disc2">
                            <p> 28% <br> Off </p>
                        </span>
                        <div class="images">
                            <img src="pics/sandles-removebg-preview.png" alt="">
                        </div>
                        <h4>Daawat festive Feast-<br>biryani bass..</h4><br>
                        <p><b>Rs 265.00</b></p>
                        <p class="margin">M.R.P: Rs <s>320.00 </s></p>
                        <p class="save">Save Rs 55.00</p><br>
                        <div class="cart">
                            <h4>Add to Cart</h4>
                            <h4 class="plus">+</h4>
                        </div>
                    </div>

                </div>

                <div class="box-container">
                    <div class="box2">
                        <span class="disc2">
                            <p> 25% <br> Off </p>
                        </span>
                        <div class="images">
                            <img src="pics/skirt-removebg-preview.png" alt="">
                        </div>
                        <h4>Daawat festive Feast-<br>biryani bass..</h4><br>
                        <p><b>Rs 265.00</b></p>
                        <p class="margin">M.R.P: Rs <s>320.00 </s></p>
                        <p class="save">Save Rs 55.00</p><br>
                        <div class="cart">
                            <h4>Add to Cart</h4>
                            <h4 class="plus">+</h4>
                        </div>
                    </div>

                </div>

                <div class="box-container">
                    <div class="box2">
                        <span class="disc2">
                            <p> 15% <br> Off </p>
                        </span>
                        <div class="images">
                            <img src="pics/watch-removebg-preview.png" alt="">
                        </div>
                        <h4>Daawat festive Feast-<br>biryani bass..</h4><br>
                        <p><b>Rs 265.00</b></p>
                        <p class="margin">M.R.P: Rs <s>320.00 </s></p>
                        <p class="save">Save Rs 55.00</p><br>
                        <div class="cart">
                            <h4>Add to Cart</h4>
                            <h4 class="plus">+</h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <!-- --------------offer slide------------ -->
        <div class="offer-slide">
            <div class="img1">
                <img src="pics/payzapp.jpg" alt="">
            </div>
            <div class="img2">
                <img src="pics/paytm offer.jpg" alt="">
            </div>
        </div>
        <!-- ----------------------------deals on essential------------- -->


        <div class="section">
            <div class="show">
                <h2>offer on daily essential<i class="fa fa-arrow-right"></i> </h2>
                <a href="#">View All</a>
            </div>
            <div class="shop">
                <div class="box-container">
                    <div class="box" id="bx" style="border-top: 20px solid red;">
                        <span class="disc">25% off</span>
                        <img class="discimg" src="pics/dals.png" alt="">
                        <p>Daals & pulses</p>
                    </div>

                </div>
                <div class="box-container">
                    <div class="box" id="bx" style="border-top: 20px solid red;">
                        <span class="disc">75% off</span>
                        <img class="discimg" src="pics/ata.png" alt="">
                        <p>Aata, flour & sooji</p>
                    </div>

                </div>
                <div class="box-container">
                    <div class="box" id="bx" style="border-top: 20px solid red;">
                        <span class="disc">5% off</span>
                        <img class="discimg" src="pics/edible oil.png" alt="">
                        <p>edible oil</p>
                    </div>

                </div>
                <div class="box-container">
                    <div class="box" id="bx" style="border-top: 20px solid red;">
                        <span class="disc">35% off</span>
                        <img class="discimg" src="pics/handwash.png" alt="">
                        <p>bath & hand wash</p>
                    </div>

                </div>
                <div class="box-container">
                    <div class="box" id="bx" style="border-top: 20px solid red;">
                        <span class="disc">45% off</span>
                        <img class="discimg" src="pics/toothpaste.png" alt="">
                        <p>toothpaste</p>
                    </div>

                </div>
                <div class="box-container">
                    <div class="box" id="bx" style="border-top: 20px solid red;">
                        <span class="disc">95% off</span>
                        <img class="discimg" src="pics/salt.png" alt="">
                        <p>salt, sugar & jaggery</p>
                    </div>

                </div>
                <div class="box-container">
                    <div class="box" id="bx" style="border-top: 20px solid red;">
                        <span class="disc">15% off</span>
                        <img class="discimg" src="pics/noodles.png" alt="">
                        <p>noodles, pasta,vermiceli</p>
                    </div>

                </div>

                <div class="box-container">
                    <div class="box" id="bx" style="border-top: 20px solid red;">
                        <span class="disc">35% off</span>
                        <img class="discimg" src="pics/biscuit.png" alt="">
                        <p>biscuit & cookies</p>
                    </div>

                </div>
                <div class="box-container">
                    <div class="box" id="bx" style="border-top: 20px solid red;">
                        <span class="disc">55% off</span>
                        <img class="discimg" src="pics/biscuit.png" alt="">
                        <p>biscuit & cookies</p>
                    </div>

                </div>
                <div class="box-container">
                    <div class="box" id="bx" style="border-top: 20px solid red;">
                        <span class="disc">75% off</span>
                        <img class="discimg" src="pics/biscuit.png" alt="">
                        <p>biscuit & cookies</p>
                    </div>

                </div>
            </div>
        </div>


        <!-- -----------------shop by catagories----------------------- -->


        <div class="section">
            <div class="show">
                <h2>shop by catagories<i class="fa fa-arrow-right"></i> </h2>
                <a href="#">View All</a>
            </div>
            <div class="shop">
                <div class="box-container">
                    <div class="box" id="ctgry">
                        <img class="discimg" src="pics/dals.png" alt="">
                        <p>Daals & pulses</p>
                    </div>

                </div>
                <div class="box-container">
                    <div class="box" id="ctgry">
                        <img class="discimg" src="pics/ata.png" alt="">
                        <p>Aata, flour & sooji</p>
                    </div>

                </div>
                <div class="box-container">
                    <div class="box" id="ctgry">
                        <img class="discimg" src="pics/edible oil.png" alt="">
                        <p>edible oil</p>
                    </div>

                </div>
                <div class="box-container">
                    <div class="box" id="ctgry">
                        <img class="discimg" src="pics/handwash.png" alt="">
                        <p>bath & hand wash</p>
                    </div>

                </div>
                <div class="box-container">
                    <div class="box" id="ctgry">
                        <img class="discimg" src="pics/toothpaste.png" alt="">
                        <p>toothpaste</p>
                    </div>

                </div>

                <div class="box-container">
                    <div class="box" id="ctgry">
                        <img class="discimg" src="pics/toothpaste.png" alt="">
                        <p>toothpaste</p>
                    </div>

                </div>
                <div class="box-container">
                    <div class="box" id="ctgry">
                        <img class="discimg" src="pics/toothpaste.png" alt="">
                        <p>toothpaste</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- ------------------------------offer slide 2----------------- -->

    <div class="offer-slide">
        <div class="img1">
            <img src="pics/img1.jpg" alt="">
        </div>
        <div class="img2">
            <img src="pics/img2.jpg" alt="">
        </div>
    </div>
    <br>


    <div class="offer-slide">
        <div class="img1">
            <img src="pics/img3.jpg" alt="">
        </div>
        <div class="img2">
            <img src="pics/img4.jpg" alt="">
        </div>
    </div>

    <!-- --------------------------offer on house hold--------------- -->

    <div class="section">
        <div class="show">
            <h2>offer on Household & Personal care<i class="fa fa-arrow-right"></i> </h2>
            <a href="#">View All</a>
        </div>
        <div class="shop">
            <div class="box-container">
                <div class="box" id="px" style="border-top: 20px solid red;">
                    <span class="disc">95% off</span>
                    <img class="discimg" src="pics/dals.png" alt="">
                    <p>Daals & pulses</p>
                </div>

            </div>
            <div class="box-container">
                <div class="box" id="px" style="border-top: 20px solid red;">
                    <span class="disc">85% off</span>
                    <img class="discimg" src="pics/ata.png" alt="">
                    <p>Aata, flour & sooji</p>
                </div>

            </div>
            <div class="box-container">
                <div class="box" id="px" style="border-top: 20px solid red;">
                    <span class="disc">65% off</span>
                    <img class="discimg" src="pics/edible oil.png" alt="">
                    <p>edible oil</p>
                </div>

            </div>
            <div class="box-container">
                <div class="box" id="px" style="border-top: 20px solid red;">
                    <span class="disc">25% off</span>
                    <img class="discimg" src="pics/handwash.png" alt="">
                    <p>bath & hand wash</p>
                </div>

            </div>
            <div class="box-container">
                <div class="box" id="px" style="border-top: 20px solid red;">
                    <span class="disc">5% off</span>
                    <img class="discimg" src="pics/toothpaste.png" alt="">
                    <p>toothpaste</p>
                </div>

            </div>
            <div class="box-container">
                <div class="box" id="px" style="border-top: 20px solid red;">
                    <span class="disc">55% off</span>
                    <img class="discimg" src="pics/salt.png" alt="">
                    <p>salt, sugar & jaggery</p>
                </div>

            </div>
            <div class="box-container">
                <div class="box" id="px" style="border-top: 20px solid red;">
                    <span class="disc">65% off</span>
                    <img class="discimg" src="pics/noodles.png" alt="">
                    <p>noodles, pasta,vermiceli</p>
                </div>

            </div>

            <div class="box-container">
                <div class="box" id="px" style="border-top: 20px solid red;">
                    <span class="disc">35% off</span>
                    <img class="discimg" src="pics/biscuit.png" alt="">
                    <p>biscuit & cookies</p>
                </div>

            </div>
            <div class="box-container">
                <div class="box" id="px" style="border-top: 20px solid red;">
                    <span class="disc">15% off</span>
                    <img class="discimg" src="pics/biscuit.png" alt="">
                    <p>biscuit & cookies</p>
                </div>

            </div>
            <div class="box-container">
                <div class="box" id="px" style="border-top: 20px solid red;">
                    <span class="disc">85% off</span>
                    <img class="discimg" src="pics/biscuit.png" alt="">
                    <p>biscuit & cookies</p>
                </div>

            </div>
        </div>
    </div>


    <!-- ---------------------offer slide 3--------------------------- -->

    <div class="offer-slide">
        <div class="img1">
            <img src="pics/gr1.jpg" alt="">
        </div>
        <div class="img2">
            <img src="pics/gr2.jpg" alt="">
        </div>
    </div>
    <br>
    <div class="offer-slide">
        <div class="img1">
            <img src="pics/gr3.jpg" alt="">
        </div>
        <div class="img2">
            <img src="pics/gr4.jpg" alt="">
        </div>
    </div>

    <!-- -----------------------------offer on grocery------------------------- -->

    <div class="section">
        <div class="show">
            <h2>offer on grocery <i class="fa fa-arrow-right"></i> </h2>
            <a href="#">View All</a>
        </div>
        <div class="shop">
            <div class="box-container">
                <div class="box" id="gx" style="border-top: 20px solid red;">
                    <span class="disc">95% off</span>
                    <img class="discimg" src="pics/dals.png" alt="">
                    <p>Daals & pulses</p>
                </div>

            </div>
            <div class="box-container">
                <div class="box" id="gx" style="border-top: 20px solid red;">
                    <span class="disc">85% off</span>
                    <img class="discimg" src="pics/ata.png" alt="">
                    <p>Aata, flour & sooji</p>
                </div>

            </div>
            <div class="box-container">
                <div class="box" id="gx" style="border-top: 20px solid red;">
                    <span class="disc">65% off</span>
                    <img class="discimg" src="pics/edible oil.png" alt="">
                    <p>edible oil</p>
                </div>

            </div>
            <div class="box-container">
                <div class="box" id="gx" style="border-top: 20px solid red;">
                    <span class="disc">25% off</span>
                    <img class="discimg" src="pics/handwash.png" alt="">
                    <p>bath & hand wash</p>
                </div>

            </div>
            <div class="box-container">
                <div class="box" id="gx" style="border-top: 20px solid red;">
                    <span class="disc">5% off</span>
                    <img class="discimg" src="pics/toothpaste.png" alt="">
                    <p>toothpaste</p>
                </div>

            </div>
            <div class="box-container">
                <div class="box" id="gx" style="border-top: 20px solid red;">
                    <span class="disc">55% off</span>
                    <img class="discimg" src="pics/salt.png" alt="">
                    <p>salt, sugar & jaggery</p>
                </div>

            </div>
            <div class="box-container">
                <div class="box" id="gx" style="border-top: 20px solid red;">
                    <span class="disc">65% off</span>
                    <img class="discimg" src="pics/noodles.png" alt="">
                    <p>noodles, pasta,vermiceli</p>
                </div>

            </div>

            <div class="box-container">
                <div class="box" id="gx" style="border-top: 20px solid red;">
                    <span class="disc">35% off</span>
                    <img class="discimg" src="pics/biscuit.png" alt="">
                    <p>biscuit & cookies</p>
                </div>

            </div>
            <div class="box-container">
                <div class="box" id="gx" style="border-top: 20px solid red;">
                    <span class="disc">15% off</span>
                    <img class="discimg" src="pics/biscuit.png" alt="">
                    <p>biscuit & cookies</p>
                </div>

            </div>
            <div class="box-container">
                <div class="box" id="gx" style="border-top: 20px solid red;">
                    <span class="disc">85% off</span>
                    <img class="discimg" src="pics/biscuit.png" alt="">
                    <p>biscuit & cookies</p>
                </div>

            </div>
        </div>
    </div>

    <!-- --------------------------------offer final slide-------------------- -->

    <div class="offer-slide">
        <div class="img1">
            <img src="pics/fn1.jpg" alt="">
        </div>
        <div class="img2">
            <img src="pics/fn2.jpg" alt="">
        </div>
    </div>
    <br>
    <div class="offer-slide">
        <div class="img1">
            <img src="pics/fn3.jpg" alt="">
        </div>
        <div class="img2">
            <img src="pics/fn4.jpg" alt="">
        </div>
    </div>
    <br>
    <div class="offer-slide">
        <div class="img1">
            <img src="pics/fn5.jpg" alt="">
        </div>
        <div class="img2">
            <img src="pics/fn6.jpg" alt="">
        </div>
    </div>
    <br>
    <div class="offer-slide">
        <div class="img1">
            <img src="pics/fn7.jpg" alt="">
        </div>
        <div class="img2">
            <img src="pics/fn8.jpg" alt="">
        </div>
    </div>



    <!-- ------------------------------------------------footer--------------------------- -->


    <div class="footer">
        <div class="populer">
            <h5>MOST POPULAR CATEGORIES</h5>
            <a href="#">Staples</a>
            <a href="#">Beverages</a>
            <a href="#">Personal Care</a>
            <a href="#">Fruits and Vegetables</a>
            <a href="#">Baby Car</a>
            <a href="#">Snacks & Branded Foods</a>
            <a href="#">Dairy & Bakery</a>
        </div>

        <div class="customer">
            <h5>CUSTOMER SERVICES</h5>

            <a href="#">About Us</a>
            <a href="#">FAQ</a>
            <a href="#">Terms and conditions</a>
            <a href="#">Privacy policy</a>
            <a href="#">E-waste Policy</a>
            <a href="#">Cancellation and return policy</a>
        </div>


        <div class="contact">
            <h5>CONTACT US</h5>
            <p>WhatsApp us : <b> <a class="tel" href="tel:+917307220229">7307220229</a></b></p><br>
            <p> Call Us : <b><a href="tel:1800 890 1222">1800 890 1222</a></b> <br>8:00 AM to 8:00 PM, 365 days</p><br>
            <p>Please note that you are accessing the original<br> Version of a <a href="#">www.Locomart.com</a></p><br>
            <p>Should you encounter any bugs, glitches, lack<br>
                of functionality, delayed deliveries, billing error <br>
                or other problems on the beta website, please<br>
                email us on <b><a href="mailto:sonygovind.gkv740@gmail.com">sonygovind.gkv740@gmail.com</a></b></p>
            <br><br>

            <h5>DOWNLOAD APP</h5>
            <div class="app-icon">
                <img src="pics/play_store.png" alt="">
                <img src="pics/ios_store.png" alt="">
            </div>

        </div>
    </div>

    <!-- -------------------------------credit-------------------------------------- -->



    <div class="credit">
        <h1>
            <span>&copy;</span>
            created by
            <span>govind verma</span>
            | All right reserved.
        </h1>
        <p><b>3rd year || CSE student || (SRIMT lucknow)</b></p>
    </div>




























<?php

mysqli_close($conn);

?>