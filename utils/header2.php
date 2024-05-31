<title>cems</title>
<style>
    .bgImage {
        background-image: url(images/event.jpg);
        background-size: cover;
        background-position: center center;
        height: 500px;
        margin-bottom: 25px;
    }

    .jumbotron h1 {

        -webkit-text-stroke: 3px black;

    }

    .navbar {
        background-color: black;
        height: 95px;
        /* z-index: 1000;
        width: 100%;   navbar fixed position
        position: fixed; */
    }

    .navbar img {
        padding-bottom: 10px;
    }
    
</style>
<header class="bgImage">
    <nav class="navbar">
        <div class="container">
            <div class="navbar-header"><!--website name/title-->
                <img src="images/logobg.png" alt="" height="80" width=250>
                <!-- <a class = "navbar-brand">
                 images tha
                </a> -->
            </div>

            <ul class="nav navbar-nav navbar-right"><!--navigation-->
                <li><a href="index.php"><strong>Home</strong></a></li>
                <li><a href="register.php"><strong>Register</strong></a></li>
                <li><a href="availevent.php"><strong>Events on</strong></a></li>
                <li><a href="usn.php"><strong>My participation</strong></a></li>
                <li><a href="contact.php"><strong>Contact us</strong></a></li>

                <li class="btnlogout"><a class="btn btn-default navbar-btn" href="login_form.php">Admin login<span class="glyphicon glyphicon-log-in"></span></a></li>


            </ul>
        </div><!--container div-->
    </nav>
    <div class="col-md-12">
        <div class="container2">
            <div class="jumbotron"><!--jumbotron-->
                <h1><strong>Explore<br>Our Exciting Events...</strong> </h1><!--jumbotron heading-->
                <br>
                <div class="browse d-md-flex col-md-14">
                    <div class="row">

                    </div>
                </div>
            </div>

</header>