<header class="main-header">
    <!-- 
        LOGOTIPO
     -->
    <a href="home" class="logo">
        <!-- logo mini -->
        <span class="logo-mini">
            <img src="views/img/templates/logo-mini.png" alt="logo-mini" srcset="" class="img-responsive" style="padding:1px">
        </span>
            <!-- logo normal -->
        <span class="logo-lg">
        <img src="views/img/templates/logo-largo.png" alt="logo-normal" srcset=""  class="img-responsive" style="width: 17rem; padding: 0.4rem 0rem 0rem 2rem">
        </span>
    </a>

    <!-- 
            NAVEGATION VAR
     -->
    <nav class="navbar navbar-static-top " role="navegation">

        <!-- boton de navegation -->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navegation</span>
        </a>

        <!-- user profile -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php
                            if($_SESSION['photo'] != ''){
                                echo '<img src="'.$_SESSION['photo'].'" alt="anonymous" srcset="" class="user-image"> ';    
                            }else{
                                echo '<img src="views/img/users/default/anonymous.jpg" alt="anonymous" srcset="" class="user-image"> ';    

                            }
                        ?>
                        <span class="hidden-xs"> <?php echo $_SESSION['name']; ?> </span>
                    </a>
                    <!-- dropdown-toggle -->
                    <ul class="dropdown-menu">
                        <li class="user-body">
                            <div class="pull-right">
                                <a href="exit" class="btn btn-default btn-flat">Salir</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        
    </nav>

</header>