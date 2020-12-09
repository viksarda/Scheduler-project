<?php if(!defined("APP")) die(); ?>

<?php require "views/header.view.php"; ?>



<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Scheduler</title>



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
                        <a>Scheduler</a>
                    </div>
                </header>



            </div>
        </div>

        <!-- Sidebar -->
        <div id="sidebar">
            <div class="inner">
                <!-- Menu -->
                <nav id="menu">
                    <ul>
                        <li><a href=".">Homepage</a></li>
                        <li><a href="scheduler">Scheduler</a></li>
                        <li><a href="reminders">Reminders</a></li>
                        <li><a href="user">User Profile</a></li>
                        <li><a href="register">Register</a></li>
                    </ul>
                </nav>
                <!-- Footer -->
                <footer id="footer">
                <?php require "views/footer.view.php"; ?>
               
                </footer>

            </div>
        </div>

    </div>


</body>



</html>

