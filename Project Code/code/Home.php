<html>
    <head>
        <link rel="stylesheet" type="text/css" href="Home.css"/>
        <script type="text/javascript" src="JScript.js"></script>
        <div class="Top_Nav">
            <div class="Top_Nav">
                <a id="img_a"><img src="Resources\LYHLogo.jpg"></a>
                <a class="active" href="Home.html">Home</a>
                <a href="Showroom.html">Showroom</a>
                <a href="About.html">About</a>
                <a style="float: right;" href="Account.html"><img style="width: 15px; height: 15px; margin-right: 5px;" src="Resources\Profile.png">Account</a>
                <a style="float: right;" href="Basket.html"><img style="width: 15px; height: 15px; margin-right: 5px;" src="Resources\Price.png">Basket</a>
                <a style="float: right;" href="#Search"><img style="width: 15px; height: 15px; margin-right: 5px;" src="Resources\Search.png">Search</a>
            </div>
        </div>    
    </head>

    <body>
        <div class="TopPictures_div">
            <div class="Col1">
                <img id="LeftSide_img" src="Resources\leftimagechairs.jpg">
            </div>

            <div class="Col2">
                <img id="Middle_img" src="Resources\middleimgsofa.jpg">
            </div>

            <div class="Col3">
                <img id="RightSide_img" src="Resources\greybackground.jpg">                 
            </div>
        </div>

        <div class="MiddleBar_div" onclick="accountClick()">
            <div class="Account_div">
                <img src="Resources\Profile.png" onclick="accountDIVClick()"><br>
                <a>ACCOUNT</a>
            </div>

            <div class="Basket_div">
                <img src="Resources\Price.png" onclick="basketDIVClick()"><br>
                <a>BASKET</a>
            </div>

            <div class="Showroom_div">
                <img src="Resources\Sections.png" onclick="showroomDIVClick()"><br>
                <a>SHOWROOM</a> 
            </div>
        </div>

        <div class="BottomPictures_div">
            <div class="Pic Pic1">
                <h3>Sofas</h3>
                <button onclick="pic1Click()">More Options</button>
            </div>

            <div class="Pic Pic2">
                <h3>Beds</h3>
                <button onclick="pic2Click()">More Options</button>
            </div>

            <div class="Pic Pic3">
                <h3>Tables</h3>
                <button onclick="pic3Click()">More Options</button>
            </div>

            <div class="Pic Pic4">
                <h3>Accessories</h3>
                <button onclick="pic4Click()">More Options</button>
            </div>

            <div class="Pic Pic5">
                <h3>Chairs</h3>
                <button onclick="pic5Click()">More Options</button>
            </div>
        </div>
    </body>

    <footer>
        <div class="Bottom_Nav">

        </div>
    </footer>
</html>