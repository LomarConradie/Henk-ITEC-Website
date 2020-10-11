<html>
    <head>
        <link rel="stylesheet" type="text/css" href="Basket.css"/>
        <script type="text/javascript" src="JScript.js"></script>
        <div class="Top_Nav">
            <a id="img_a"><img src="Resources\LYHLogo.jpg"></a>
            <a href="Home.html">Home</a>
            <a href="Showroom.html">Showroom</a>
            <a href="About.html">About</a>
            <a style="float: right;" href="Account.html"><img style="width: 15px; height: 15px; margin-right: 5px;" src="Resources\Profile.png">Account</a>
            <a class="active" style="float: right;" href="Basket.html"><img style="width: 15px; height: 15px; margin-right: 5px;" src="Resources\Price.png">Basket</a>
            <a style="float: right;" href="#Search"><img style="width: 15px; height: 15px; margin-right: 5px;" src="Resources\Search.png">Search</a>
        </div>
    </head>

    <body>
        <div class="main_div">
            <div class="products">
                <h1>Basket</h1>
                <div class="product_div">
                    <div class="product_image">
                        <img id="productimage_img" src="">
                    </div>
                    <div class="product_details">
                        <h3 id="product_name">Name of product</h3>
                        <h4 id="product_price">Price of product</h4>
                        <input id="basket_quantity" type="number" min="1" step="1" placeholder="Insert Quantity">
                    </div>
                </div>
                <h2>Total Cost:</h2>
                <button id="cancelorder_btn">Cancel</button>
                <button id="order_btn">Order</button>
            </div>
        </div>
    </body>

</html>    