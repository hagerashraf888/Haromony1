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
                    <h2> Rooms </h2>
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

            <!-- Living Room -->
            <section id="rooms-table">
                <table id="master">
                    <h1> Living Room </h1>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>price</th>
                        <th>quantity</th>
                        <th>room_id</th>
                    </tr>
                    @foreach($rooms as $room)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$room->name}}</td>
                        <td>{{$room->price}}</td>
                        <td>{{$room->quantity}}</td>
                        <td>{{$room->room_id}}</td>
                        <td>
                            <a href="{{route('delete_room',$room->id)}}" id="dd" class="d-inline-block control-button delete mb-2 m-lg-0">
                                <i class="fas fa-trash-alt"></i> 
                                Delete
                            </a>
                        </td>
                        <td>    
                        <a href="{{route('edit_room_page',$room->id)}}" id="dd" class="d-inline-block control-button edit ">
                            <i class="fa fa-edit"></i> 
                            Edit
                        </a>
                        </td>
                    </tr>
                    @endforeach
                </table>
                <a href="{{route('add_room_page')}}" class="r-btn">
                    <i class="fa fa-plus mr-2"></i> 
                    Add New Room 
                </a>
            </section>
        </div>
        
        
        <script src="{{ asset('js/jquery-3.5.1.js')}}"></script>
        <script src="{{ asset('js/admin.js')}}"></script>
    </body>
</html> 
