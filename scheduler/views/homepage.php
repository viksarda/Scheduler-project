<?php if(!defined("APP")) die(); ?>

<?php require "views/header.view.php"; ?>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
 

    <title>Homepage</title>

</head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Main -->
        <div id="main">
            <div class="inner">

                <!-- Header -->
                <header id="header">
                    <div class="logo" style="text-align:center; padding-left: 10%">
                        <a href=".">Homepage</a>
               
                    </div>
                    <?php       if(!isLoggedIn()){?>
                    <div style="margin: auto; padding-right: 10px">
                        <a href="login" class="testing">
                            Login
                        </a>
                    </div>

                    <div class="testing">
                        <a style="color: white;" href="register">Register</a>
                    </div>
                    <?php }?>


                    <?php if(isLoggedIn()){?>
                    <div style="margin: auto; padding-right: 10px">
                        <a href="logout" class="testing">
                            Logout
                        </a>
                    </div>
                    <?php }?>
                    
                 
                 
                </header>

                <!-- Modal -->
                <!-- Modal -->
                <!-- Banner -->
                <section class="main-banner">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="banner-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="banner-caption">
                                                <h4>Hello, this is your <em>Ramayana</em> Theme.</h4>
                                                <span>AWESOME HTML5 &amp; CSS3 TEMPLATE</span>
                                                <p>Do you know that <strong>Ramayana</strong> is a free to use Bootstrap 4 CSS template by <strong>templatemo</strong>? You can edit and add more pages as you wanted for your personal or corporate websites.</p>
                                                <div class="primary-button">
                                                    <a href="#">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Services -->
                <section class="services">
                    <div class="container-fluid">
                        <div class="row">
                        <?php       if(!isLoggedIn()){?>
                            <div class="col-md-4">
                                <div class="service-item first-item">
                                    <div class="icon"></div>
                                    <h4> <a href="scheduler">Scheduler</a></h4>
                                </div>
                            </div>
                          
                            <div class="col-md-4">
                                <div class="service-item second-item">
                                    <div class="icon"></div>
                                    <h4><a href="reminders">Reminders</a></h4>
                                </div>
                            </div>
                          
               
                            <div class="col-md-4">
                                <div class="service-item third-item">
                                    <div class="icon"></div>
                                    <h4><a href="user">User Profile</a></h4>
                                </div>
                            </div>
                            <?php }?>
                           
                        
                            <div class="col-md-4">
                                <div class="service-item fourth-item">
                                    <div class="icon"></div>
                                    <h4><a href="register">Register</a></h4>
                                </div>
                            </div>
                            

                        </div>
                    </div>
                </section>
                <!-- Footer -->
                <footer class="page-footer font-small blue">

                    <!-- Copyright -->
                    <div class="footer-copyright text-center py-3">
                        © 2020 Copyright:
                        <a href="https://uacs.edu.mk/home/"> UACS</a>
                    </div>
                    <!-- Copyright -->

                </footer>
                <!-- Footer -->

            </div>
            </div>


        <!-- Sidebar -->
        <div id="sidebar">

            <div class="inner">

                <!-- Menu -->
                <nav id="menu">
                    <ul>
                        <li><a href=".">Homepage</a></li>
                        <?php if(isLoggedIn()){ ?>
                        <li><a href="scheduler">Scheduler</a></li>
                        <li><a href="reminders">Reminders</a></li>
                        <li><a href="user">User Profile</a></li>
                        <?php }?>
                        <?php if(!isLoggedIn()){?>
                        <li><a href="register">Register</a></li>
                        <?php }?>
                    </ul>

</nav>

                <!-- Footer -->
                <footer id="footer">
        
                </footer>

            </div>
        </div>

    </div>

  
</body>



    
<?php require "views/footer.view.php"; ?>