<!DOCTYPE html>
<html>
    <head>
        <title> HARMONY </title>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/admin.css')}}">
        <link rel="stylesheet" href="{{ asset('fonts/fonts/css/all.css')}}"> 
        <link rel="icon" href="{{ asset('images/harmony-logo.jpg')}}">
    </head>
    <body>
        <!-- The sidebar -->
        <div class="sidebar">
                <div class="logo">
                    <img src="{{ asset('images/harmony-logo.jpg')}}">
                </div>
            <!--
                <a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard </a>
                <a href="#"><i class="fas fa-chart-bar"></i> Charts </a>
                <a href="#"><i class="fas fa-table"></i> Tables </a>
            -->

            <!-- admin -->
            <h3> Admin </h3>
            <a href="#" class="open-r">
                <i class="far fa-window-maximize"></i> 
                Rooms 
                <i class="fas fa-sort-down"></i> 
            </a>
            <div class="rooms">
                <a href="get_rooms"> Master Room </a>
                <a href="get_singleroom"> Single Room </a>
                <a href="get_livingroom"> Living Room </a>
                <a href="get_dinningroom"> Dinning Room </a>
                <a href="get_kitchen"> Kitchen </a>
            </div>
            <a href="#" class="open-p">
                <i class="far fa-window-maximize"></i> 
                Products 
                <i class="fas fa-sort-down"></i> 
            </a>
            <div class="products">
                <a href="get_masterbed"> Master Bed </a>
                <a href="get_singlebed"> Single Bed </a>
                <a href="get_closet"> Closet </a>
                <a href="get_mirror"> Mirror </a>
                <a href="get_sofa"> Sofa </a>
                <a href="get_chair"> Chair </a>
                <a href="get_table"> Table </a>
                <a href="get_cupboard"> Cupboard </a>
            </div>
            <hr>
        </div>
        
        <!-- Page content -->
        <div class="content">
            <div class="topnav">
                <!--<div class="search">
                    <input id="search" type="text" placeholder="Search..">
                    <button class="btn">
                        <i class="fas fa-search"></i>
                    </button>
                </div>-->
                <div class=title>
                    <h2> Harmony </h2>
                </div>
                <div class="notify">
                    <button class="btn">
                        <i class="fas fa-bell"></i>
                    </button>
                    <button class="btn">
                        <i class="fas fa-envelope"></i>
                    </button>
                </div>
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn">
                        <i class="fas fa-user"></i> 
                        Hager Ashraf 
                        <i class="fas fa-sort-down"></i>
                    </button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="#"><i class="fas fa-spinner"></i> Activity log </a>
                        <a href="#"><i class="fas fa-sign-out-alt"></i> Sign out </a>
                    </div>
                </div> 
            </div> 

            <!-- user -->
            <h3> User </h3>
            <div class="user">
                <div class="one">
                    <a href="../pages/home.html"> Home </a>
                    <a href="../pages/about.html"> About </a>
                    <a href="../pages/service.html"> Service </a>
                    <a href="../pages/projects.html"> Projects </a>
                    <a href="../pages/contacts.html"> Contacts </a>
                </div>
                <div class="two">
                    <a href="#" class="open-ro">
                        <i class="far fa-window-maximize"></i> 
                        Rooms
                        <i class="fas fa-sort-down"></i> 
                    </a>
                    <div class="room">
                        <a href="../pages/rooms/master.html"> Master Room </a>
                        <a href="../pages/rooms/single.html"> Single Room </a>
                        <a href="../pages/rooms/living.html"> Living Room </a>
                        <a href="../pages/rooms/dinning.html"> Dinning Room </a>
                        <a href="../pages/rooms/kitchen.html"> Kitchen </a>
                    </div>
                </div>
                <div class="three">
                    <a href="#" class="open-pro">
                        <i class="far fa-window-maximize"></i> 
                        Products
                        <i class="fas fa-sort-down"></i> 
                    </a>
                    <div class="product">
                        <a href="../pages/products/master-bed.html"> Master Bed </a>
                        <a href="../pages/products/single-bed.html"> Single Bed </a>
                        <a href="../pages/products/closet.html"> Closet </a>
                        <a href="../pages/products/mirror.html"> Mirror </a>
                        <a href="../pages/products/sofa.html"> Sofa </a>
                        <a href="../pages/products/chair.html"> Chair </a>
                        <a href="../pages/products/table.html"> Table </a>
                        <a href="../pages/products/cupboard.html"> Cupboard </a>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="{{ asset('js/admin.js')}}"></script>
    </body>
</html> 
