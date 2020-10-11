<html>
    <head>
        <link rel="stylesheet" type="text/css" href="Account.css"/>
        <script type="text/javascript" src="JScript.js"></script>
        <div id="Top_Nav" class="Top_Nav">
            <a id="img_a"><img src="Resources\LYHLogo.jpg"></a>
            <a href="Home.html">Home</a>
            <a href="Showroom.html">Showroom</a>
            <a href="About.html">About</a>
            <a class="active" style="float: right;" href="Account.html"><img style="width: 15px; height: 15px; margin-right: 5px;" src="Resources\Profile.png">Account</a>
            <a style="float: right;" href="Basket.html"><img style="width: 15px; height: 15px; margin-right: 5px;" src="Resources\Price.png">Basket</a>
            <a style="float: right;" href="#Search"><img style="width: 15px; height: 15px; margin-right: 5px;" src="Resources\Search.png">Search</a>
        </div>
    </head>

    <body>
        <div id="ProfilePage" class="ProfilePage_div">
            <div class="img_div">
                <img src="Resources/suzi.jpg">
            </div>
            <div class="UserProfile_div">
                <div class="Row1">
                    <div class="headname_div">
                        <h1 id="Name_lbl">Suzi Que</h1>
                        <h4 id="Balance_lbl">Available balance: R200 000</h4>
                    </div>
                    
                    <div class="bodyset_div">
                        <h3>Details</h3>
                        <h4 id="name_h">Name: </h4>
                        <h4 id="surname_h">Surname: </h4>
                        <h4 id="email_h">Email: </h4>
                        <h4 id="contact_h">Contact: </h4>
                    </div>

                    <div class="editprofile_div" id="editprofile_div">
                        <h4>Name: </h4>
                        <input type="text">
                        <h4>Surname: </h4>
                        <input type="text">
                        <h4>Email: </h4>
                        <input type="text">
                        <h4>Contact: </h4> 
                        <input type="text">                       
                    </div>

                    <button id="cart_btn">Cart</button>
                    <button id="edt_btn" onclick="editprofileClick()">Edit Profile</button>
                    <button id="logout_btn" onClick="logoutClick()">Logout</button>
                </div>
            </div>
        </div>
    </body>

</html>    