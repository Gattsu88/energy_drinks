<body>
    <nav class="navbar navbar-default navbar-backgrnd">
        <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-flash"></span> </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="<?php echo ($_SERVER['PHP_SELF'] == "/energy_drinks/index.php" ? "current" : "");?>"><a href="index.php">Home</a></li>
                    <li class="<?php echo ($_SERVER['PHP_SELF'] == "/energy_drinks/wiki.php" ? "current" : "");?> dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Wiki<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="wiki.php#uses">1. Uses</a></li>
                            <li><a href="wiki.php#effects">2. Effects</a></li>
                            <li><a href="wiki.php#history">3. History</a></li>
                            <li><a href="wiki.php#variants">4. Variants</a></li>
                            <li><a href="wiki.php#chemistry">5. Chemistry</a></li>
                            <li><a href="wiki.php#demographics">6. Demographics</a></li>
                            <li><a href="wiki.php#sales">7. Sales</a></li>
                        </ul>
                    </li>
                    <li class="<?php echo ($_SERVER['PHP_SELF'] == "/energy_drinks/brands.php" ? "current" : "");?>"><a href="brands.php">Brands</a></li>
                    <li class="<?php echo ($_SERVER['PHP_SELF'] == "/energy_drinks/fun.php" ? "current" : "");?>"><a href="fun.php">Fun</a></li>
                    <li class="<?php echo ($_SERVER['PHP_SELF'] == "/energy_drinks/faq.php" ? "current" : "");?>"><a href="faq.php">FAQ</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="btn pull-left" role="button" data-toggle="modal" data-target=".login-register-form"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->

        <div class="modal fade login-register-form" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span class="glyphicon glyphicon-remove"></span>
                        </button>
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#login-form"> Login <span class="glyphicon glyphicon-user"></span></a></li>
                            <li><a data-toggle="tab" href="#registration-form"> Register <span class="glyphicon glyphicon-pencil"></span></a></li>
                        </ul>
                    </div>
                    <div class="modal-body">
                        <div class="tab-content">

                            <div id="login-form" class="tab-pane fade in active">
                                <form action="login.php" method="post">
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Password:</label>
                                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                                    </div>
                                    <button type="submit" class="btn btn-success btn-block"><b>Log In</b></button>
                                </form>
                            </div>

                            <div id="registration-form" class="tab-pane fade">
                                <form action="register.php" method="post">
                                    <div class="form-group">
                                        <label for="name">Your Name:</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password:</label>
                                        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                                    </div>
                                    <div class="form-group">
                                        <label for="confirmPassword">Confirm Password:</label>
                                        <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm password" name="confirmPassword">
                                    </div>
                                    <button type="submit" class="btn btn-danger btn-block"><b>Register</b></button>
                                </form>
                            </div>

                        </div>
                    </div><!-- end modal body -->
                </div><!-- end modal content -->
            </div><!-- end modal dialog -->
        </div><!-- end modal -->
    </nav>
