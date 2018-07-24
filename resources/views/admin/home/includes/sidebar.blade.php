
<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

        <!--
            Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
            Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
        -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    BariBhara.com
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="{{route('home')}}">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="ti-user"></i>

                        <p>Advertisements</p>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('add-advertisement')}}">Add Advertisements</a></li>
                        <li><a href="{{route('manage-advertisement')}}">Manage Advertisements</a></li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="ti-user"></i>

                        <p>Categories</p>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('add-categories')}}">Add Categories</a></li>
                        <li><a href="{{route('manage-categories')}}">Manage Categories</a></li>

                    </ul>
                </li>
                </li>
                <li>
                    <a href="table.html">
                        <i class="ti-view-list-alt"></i>
                        <p>Table List</p>
                    </a>
                </li>
                <li>
                    <a href="typography.html">
                        <i class="ti-text"></i>
                        <p>Typography</p>
                    </a>
                </li>
                <li>
                    <a href="icons.html">
                        <i class="ti-pencil-alt2"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="ti-map"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="ti-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>
