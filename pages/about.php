<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>We Cure | Ecommerce Website Design</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="images/logo.png" width="125px">
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="">Home</a></li>
                        <li><a href="">Products</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href="">Account</a></li>
                    </ul>
                </nav>
                <img src="images/shoppingcart.png" width="30px" height="30px">
                <img src="images/icons/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
            <div class="row">
                <div class="col-2">
                    <h1>Getting you back to living life to the full, naturally</h1>
                    <p>We Cure Life is a 30 day supply, nutrition intake program that is developed to nourish your body while promoting rejuvenating changes, including supporting metabolic balance and suppression of disease in the cells. (Cellular Rejuvenation)
                    <br>
                     <br>We Cure Life Pty (LTD) understands that an increase of toxins and chemicals in our environment, food, air and water, combined with a lack of nutrients in our diets, has had an impact in making our bodies weaker and therefore making our bodies more prone to Dis-ease.
                     <br>  
                     <br>We therefore after years of research and product testing developed 100% natural products that contain Ganoderma Lucidum , Humic Acid , Fulvic Acid and natures finest leaves that assist the bodies natural healing functions through our unique formula combination. 
                     <br>    
                     <br>Don’t take our word for it, try it out.
                     <br>We are pleased to receive many testimonials throughout the country with customers reporting that their health has improved and they feel better. Audio & Videos available on demand.
                     <br>  
                     <br>We are committed to supporting our customers in building their immune systems and effectively fighting disease naturally.
                     <br>  
                     <br>Thank you for visiting our world , may it end with good health & Wealth! 
                        </p>
                        <a href="" class="btn">Shop Now &#10132</a>
                </div>
                <!--<div class="col-2">
                    <img src="images/logo.png" alt="">
                </div>-->
            </div>
        </div>
    </div>


   
       
    <!------------ Footer ------------>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-l">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and IOS mobile phone</p>
                    <div class="app-logo">
                        <img src="images/images/play-store.png">
                        <img src="images/images/app-store.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images/logo.png">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit 
                        esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliates</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Intagram</li>
                        <li>YouTube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2020 - We Cure</p>
        </div>
    </div>

    <!------------ JS for toggle menu ------------>
    <script>
        var MenuItems = document.getElementById("MenuItems");

        MenuItems.style.maxHeight = "0px";
        function menutoggle(){
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            } else {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>
</body>
<footer>
    <div><h6>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></h6></div>
</footer>
</html>