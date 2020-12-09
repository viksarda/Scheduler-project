<?php if(!defined("APP")) die(); ?>

<?php require "views/header.view.php"; ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Register</title>
   
</head>

<body class="is-preload">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- Main -->
        <div id="main">
            <div class="inner">
                <!-- Header -->
                <header id="header">
                    <div class="logo" style="text-align:center">
                    </div>
                </header>

                <div class="row justify-content-center">
                    <div class="col-md-5">

                        <form method="POST" enctype="multipart/form-data">
                            <h1 class="display-4 text-primary text-center mt-5 mb-4">Register</h1>
                            <div class="form-group">
                                <label class="text-primary">Name</label>
                                <input type="text" name="F_name" required class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label class="text-primary">Surname</label>
                                <input type="text" name="L_name"  required class="form-control" placeholder="Surname">
                            </div>
                            <div class="form-group">
                                <label  class="text-primary">Email</label>
                                <input type="email" name="email" required class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label  lass="text-primary">Password</label>
                                <input type="password" name="password" required class="form-control" placeholder="***********">
                            </div>
                            <br />
                            <div class="form-group">
                                <label class="text-primary">Date of birth</label>
                                <input type="date" name="dob"  required class="form-control" min="1910-01-01" max="2020-08-08">
                            </div>
                            <div>
                                <button type="submit" name="action" value="register" class="btn btn-primary px-4" >Register</button>
                            </div>
                        </form>

                    </div>
                </div>



            </div>
        </div>

        <!-- Sidebar -->
        <div id="sidebar">

            <div class="inner">

                <!-- Menu -->
                <nav id="menu">
                    <ul>
                        <li><a href=".">Homepage</a></li>
                        <?php       if(isLoggedIn()){?>
                        <li><a href="scheduler">Scheduler</a></li>
                        <li><a href="reminders">Reminders</a></li>
                        <li><a href="user">User Profile</a></li>
                        <?php }?>
                        <li><a href="register">Register</a></li>
                    </ul>

                </nav>

                <!-- Footer -->
                <footer id="footer">
                </footer>

            </div>
        </div>


    </div>
</body>



</html>




<?php require "views/footer.view.php"; ?>