
<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: dipak_login.php");
    exit();
}


// Your secure content for authenticated users goes here
echo "Welcome,  Admin : " . $_SESSION['username'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="grid.css\">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    background: aliceblue;

}

.header{
       position: fixed;
       top: 0;
       left: 0;
       width: 100%;
       height: 30px;
       padding:30px 8%;
       background: transparent;
       display: flex;
       justify-content: space-between;
       align-items: center;
       z-index: 100;
       background-color: rgba(221, 219, 225, 0.338);
       
}

.logo{
    font-size: 25px;
    color: #222;
    text-decoration: none;
    font-weight: 600;
    opacity: 0;
    animation: slideRight 1s ease forwards;
}

.navbar a{
    font-size: 18px;
    color: #222;
    text-decoration: none;
    font-weight: 500;
    margin: 0px 20px;
}

.navbar a:hover,
.navbar a.active {
    color: blue;
}
.social-media{
    display: flex;
    justify-content: space-between;
    width: 150px;
    height: 40px;
}
.social-media a{
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 40px;
    height: 40px;
    background: transparent;
    border:2px solid transparent;
    text-decoration: none;
    transform: rotate(45deg);
    transition: .5s;
}
.social-media :hover{
    border-color: rgb(228, 4, 4);
}
.social-media a i{
    font-size: 24px;
    color: rgb(208, 18, 18);
    transform: rotate(-45deg);
}
.home{
    position: relative;
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 50px 8% 0;
    overflow: hidden;

}
.home-content{
   
    max-width: 630px;
}
.home-content h1{
    font-size: 50px;
    line-height: 1.2;
}
.home-content h3{
    font-size: 40px;
    color: blue;
}
.home-content p{
    font-size: 16px;
    margin: 15px 0 30px;
}
.btn{
    display: inline-block;
    padding: 10px 28px;
    background: blue;
    border: blue;
    border-radius: 6px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    font-size: 16px;
    color: aliceblue;
    letter-spacing: 1px;
    text-decoration: none;
    font-weight: 600;
    transition:.5s;
}
.btn:hover{
    background:transparent;
    color: blue;
    
}
.home-img{
    position: relative;
    right: -7%;
    width: 450px;
    height: 450px;
    transform: rotate(45deg);
}
.home-img .rhombus{
    position: absolute;
    width: 100%;
    height: 100%;
    background: white;
    border: 25px solid blue;
    box-shadow: -15px 15px 15px rgba(0, 0, 0, .2);
    


}
.home-img .rhombus img{
    position: absolute;
    max-width: 750px;
    transform: rotate(-45deg);
    mix-blend-mode: multiply;
    
}
.home-img .rhombus img :hover{
    transform: scale(1.3);
    z-index: 2;
}
.home .rhombus2{
    position: absolute;
    top: -25%;
    right: -25%;
    width: 700px;
    height: 700px;
    background: blue;
    transform: rotate(45deg);
    z-index: -1;
}
.section{
    padding: 12rem 0 0;
    color: blue;
}
.section-content{
    padding: 7rem 7rem  0;
}
.section-title{
 font-family:'berlin-sans-fb-demi-bold', sans-serif;
 text-align: center;
 position: relative;
}
.section-title > h3{
    text-transform: uppercase;
}
.title{
    font-size: 5rem;
    color: var(--title-color);
    position: absolute;
    left: 24%;
    bottom:40%;
    z-index: -1;
    opacity: 36.5%;
}
.main-title{
    font-size: 3.5rem;
    z-index: 1;
}
.category-img{
    padding: 4rem;
    height: 600px;
    overflow:hidden;
    position:relative;
    cursor: pointer;
    width: 27rem;
}
.row{
    width: 12%;
    display: flex;
}
.category-img-inner{
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-position: bottom;
    background-size: cover;
    transition: 2s ease 0;
    width: 22rem;
    
}

.category-img:hover .category-img-inner{
    transform: scale(1.2);
    transition: 1s ease;
    
}
.category-title{
    font-size: 4.5rem;
    font-weight: 700;
    padding: 2rem;
    position: absolute;
    color: aliceblue;
    margin: 25rem -6rem;
}
.product-card{
    padding: 20px;
    text-align: center;
    transition: background-color .3 ease 0s;
}
.product-card:hover{
    background-color:rgb(12, 12, 13)
}
.product-card-img{
    margin-bottom: 20px;
}
.product-name{
    font-size: 2rem;
    text-transform: uppercase;
    margin-bottom: 10px;
}
.product-card-large .product-name{
    font-size: 3rem;
}
.product-price{
    font-weight: 700;
    color: white;
    margin-bottom: 20px;
    display: block;
}
.product-card-large .product-price{
    font-size: 2rem;
}
.product-card-large .btn{
    font-size: 1.5rem;
    padding: 1rem 2rem;
}
.col-center{
    display: flex;
    align-items: center;
}
.special-section{
    position:relative;
    margin-bottom: 290px;
    padding-top: 4rem;
}
.special-section > .section-title{
    text-align:right;
    padding: 4rem 7rem;
    background-color: black ;
}
.special-section .title{
    position: relative;
    font-size: 3.5rem;
    counter-reset: var(--txt-white);
    left: 0;
    z-index: unset;
}
.special-section .main-title{
    font-size: 9rem;
    -webkit-text-stroke-width: 2px;
    -webkit-text-fill-color: transparent;
}
.special-section .section-title .btn{
    position: relative;
    right: unset;
    top: unset;
    font-size: 2rem;
}
.special-section .special-price{
    font-size: 3rem;
    color: white;
    margin-bottom: 2rem;
}
.special-img{
    width:50%;
    position: absolute;
    left: 7rem;
    bottom: -290px;
}
    </style>
</head>
<body>

    <header class="header">
        <a herf="#" class="logo">Cycles</a>

        <nav class="navbar">
            <a href="#" class="active">Home</a>
            <a href="about.html">About</a>
            <a href="#">Review</a>           
            <a href="features.html">Featured</a>
            <a href="contactus.html">Contact</a>
            <a href="login.html">Login</a>
            <a href="cart.html">cart</a>
        </nav>

        <div class="social-media">
            <a href="#"><i class='bx bxl-twitter'></i></a>
            <a href="#"><i class='bx bxl-facebook' ></i></a>
            <a href="#"><i class='bx bxl-instagram' ></i></a>
        </div>
    </header>

    <section class="home">
        <div class="home-content">
            <h1>Cycle dealing.</h1>
            <h3>Why Cycle?</h3>
            <p>A bicycle is a useful vehicle that helps us reach a destination without polluting the environment.<br>
                 It is composed of steel and has two wheels. In addition, it has got a seat and handle with two pedals and also a bell.<br>
                  Some bicycles have a carrier while some don’t. It is a popular choice amongst poor people and students. Essay on bicycle will help us
                  understand its importance.</p>
               <a href="index2.html" class="btn">Explore Cycles</a>
        </div>
        <div class="home-img">
            <div class="rhombus">
                <img src="img/cy2.png" alt="">
            </div>
        </div>
        <div class="rhombus2"></div>
    </section>
<div class="section">
    <div class="section-title">
        <h3 class="title">bike category</h3>
        <h3 class="main-title">choose your style</h3>
    </div>
    <div class="section-content">
        <div class="row">
            <div class="col-4">
                <div class="category-img">
                    <div class="category-img-inner" style="background-image: url(img/cy5.jpg);"></div>
                    <div class="category-title">
                        Urbun
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="category-img">
                    <div class="category-img-inner" style="background-image: url(img/eberhard-grossgasteiger-8lDkmXnKo7s-unsplash.jpg);"></div>
                    <div class="category-title">
                        Mountain
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="category-img">
                    <div class="category-img-inner" style="background-image: url(img/tom-austin-3L76b-LMyeI-unsplash.jpg);"></div>
                    <div class="category-title">
                        Road
                    </div>
            </div>
        </div>
    </div>
</div>
<!--
<div class="section">
    <div class="section-title">
        <h3 class="title">New Bikes</h3>
        <h3 class="main-title">new arrivel</h3>
    </div>
    <div class="section-content">
        <div class="row">
            <div class="col-5 col-center">
                <div class="product-card product-card-large">
                    <a href="#">
                        <div class="product-card-img">
                            <img src="img/cy9.png" alt="">
                        </div>
                        <h3 class="product-name">
                            polygon cascade
                        </h3>
                        <span class="product-price">
                            $3,900.00
                        </span>
                    </a>
                    <button class="btn">Add To Cart</button>
                </div>

            </div>
            <div class="col-7">
                <div class="row">
                  <div class="col-6">
                    <div class="product-card product-card-large">
                        <a href="#">
                            <div class="product-card-img">
                                <img src="img/cy8.png" alt="">
                            </div>
                            <h3 class="product-name">
                                norco youth bycycle
                            </h3>
                            <span class="product-price">
                                $3,900.00
                            </span>
                        </a>
                        <button class="btn">Add To Cart</button>
                    </div>
    
                  </div>
                  <div class="col-6">
                    <div class="product-card product-card-large">
                        <a href="#">
                            <div class="product-card-img">
                                <img src="img/cy10.png" alt="">
                            </div>
                            <h3 class="product-name">
                                mt bromo n7
                            </h3>
                            <span class="product-price">
                                $3,900.00
                            </span>
                        </a>
                        <button class="btn">Add To Cart</button>
                    </div>
    
                  </div>
                  <div class="col-6">
                    <div class="product-card product-card-large">
                        <a href="#">
                            <div class="product-card-img">
                                <img src="img/cy7.png" alt="">
                            </div>
                            <h3 class="product-name">
                                haibike xduro rx
                            </h3>
                            <span class="product-price">
                                $3,900.00
                            </span>
                        </a>
                        <button class="btn">Add To Cart</button>
                    </div>
    
                  </div>
                  <div class="col-6">
                    <div class="product-card product-card-large">
                        <a href="#">
                            <div class="product-card-img">
                                <img src="img/cy3.png" alt="">
                            </div>
                            <h3 class="product-name">
                                polygon siskiyu
                            </h3>
                            <span class="product-price">
                                $3,900.00
                            </span>
                        </a>
                        <button class="btn">Add To Cart</button>
                    </div>
    
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section special-section">
    <div class="section-title">
        <h3 class="title">
            best seller
        </h3>
        <h3 class="main-title">xtrada hardtail</h3>
        <div class="special-price">
            $1,099.00
        </div>
        <a href="" class="btn" >buy now</a>
    </div>
    <div class="special-img">
        <img src="img/cy4.png" alt="">
    </div>

</div>
<footer>
    <div class="section-content">
        <div class="row">
            <div class="col-4">
                <a href="#" class="logo">
                    <img src="img/" alt="">
                </a>
                <p class="footer-discription">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae accusantium iusto, reiciendis quidem doloremque itaque nisi, 
                    repudiandae, quaerat ipsum id recusandae eligendi inventore cum facilis esse quasi necessitatibus quae dolores.
                </p>
            </div>
        </div>
    </div>
</footer>
-->
</body>
</html>


