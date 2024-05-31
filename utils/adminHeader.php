<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>cems</title>
    <style>
        .bgImage {
            background-image: url(images/admin3.jpg);
            background-size: cover;
            background-position: center center;
            height: 400px;
            margin-bottom: 29px;
        }

        .jumbotron h1 {

            -webkit-text-stroke: 3px red;

        }

        .navbar {
            background-color: #8B008B;
            height: 95px
        }
    </style>
</head>

<?php require 'utils/styles.php';

?> <!--css links. file found in utils folder-->

<header class="bgImage">
    <nav class="navbar">
        <div class="container">
            <div class="navbar-header">
            </div><!--website name/title-->


            <ul class="nav navbar-nav navbar-right"><!--navigation-->
                <li><a href="adminPage.php"><strong>Manage Events</strong></a></li>
                <li><a href="Stu_details.php"><strong>Student Report </strong></a></li>
                <li><a href="Stu_cordinator.php"><strong>Student Co-ordinator</strong></a></li>
                <li><a href="Staff_cordinator.php"><strong>Staff-Co-ordinator</strong></a></li>
                <li class="btnlogout"><a class="btn btn-default navbar-btn" href="logoutt.php">Admin Logout <span class="glyphicon glyphicon-log-out"></span></a></li>

            </ul>
        </div><!--container div-->
    </nav>
    <div class="col-md-12">
        <div class="container">
            <div class="jumbotron"><!--jumbotron-->
                <h1><strong>Welcome Back!!<br></strong>Admin </h1><!--jumbotron heading-->
                <div class="browse d-md-flex col-md-14">
                    <div class="row">

                    </div>
                </div>
            </div>
</header>