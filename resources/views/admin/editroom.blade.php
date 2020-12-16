<!DOCTYPE html>
<html>
    <head>
        <title> HARMONY </title>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
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
                    <h2> Edit Room </h2>
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

              <section id="form">
                <form action="{{route('update_room',$room->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <div class="col-sm-10">
                        <input type="hidden" name="id" class="form-control"  >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-12 col-form-label"> Room Name </label>
                        <div class="col-sm-12">
                        <input type="text"name="room_name" class="form-control"
                            placeholder="type the name of room"  value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-12 col-form-label"> Room Price </label>
                        <div class="col-sm-12">
                        <input type="text" name="room_price" class="form-control"
                            placeholder="type the price of room"  value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-12 col-form-label"> Room Quantity</label>
                        <div class="col-sm-12">
                        <input type="text"name="room_quantity" class="form-control"
                            placeholder="type the quantity of room"  value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-12 col-form-label"> Room ID </label>
                        <div class="col-sm-12">
                        <input type="text"name="room_id" class="form-control"
                            placeholder="type the room id of room"  value="">
                        </div>
                    </div>
                    <input type="submit"  value="save changes" class="mx-auto d-block" id="btn">
                </form>
            </section>
        </div>
           
        <script src="{{ asset('js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('js/admin.js')}}"></script>
    </body>
</html> 
