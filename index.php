<?php
session_start();
include('mdl/head.inc.php');
//include 'mdl/navbar.php';
?>    
<body class="login-body">
    <section class="login-wrap"> 
        <?php
        if (!isset($_SESSION["Sesion"])) {
            ?> 
            <div align="center" class="well">
                <img src="img/ray_sm_red.png" class="img-responsive">
                <form id="form-login" action="" method="post" class="">
                    <h4>Acceso</h4>
                    <div class="form-group has-success">
                        <input type="text" id="txtUsr" name="txtUsr" placeholder="Usuario" required="" class="form-control input-sm chat-input"/>
                    </div>
                    <div class="form-group has-success">
                        <input type="password"  id="txtPwd" name="txtPwd" placeholder="Contraseña" required="" class="form-control input-sm chat-input" />
                    </div> 
                    <div class="wrapper">
                        <span class="group-btn">     
                            <button type="submit" class="btn btn-success btn-lg">Entrar <i class="fa fa-sign-in"></i></button>  
                        </span>
                    </div> 
                    <div id="result"> 
                        <br>
                        <?php
                        if (isset($_REQUEST)) {
                            if (isset($_REQUEST["Cross"])) {
                                var_dump($_REQUEST);
                            } else {
                                if (isset($_SERVER['HTTP_REFERER'])) {
//                                    if (strpos($_SERVER['HTTP_REFERER'],"project.ibuho.mx/Menu.aspx")) {
                                    if (strpos($_SERVER['HTTP_REFERER'],"Menu.aspx")) {
                                        include 'abd/Data.php';
                                        $rdata = new Data();
                                        $rdata->binds();
                                    } else {
                                        print '<div class="alert alert-dismissable alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>NO SE PERMITEN PETICIONES NO AUTORIZADAS.</div>';
                                    }
                                } else {
                                    print '<div class="alert alert-dismissable alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>NO SE PERMITEN PETICIONES NO AUTORIZADAS.</div>';
                                }
                            } 
                        }
                        ?>
                        <br>
                        <script>
                            document.writeln("Resolución actual: " + screen.width + " x " + screen.height);
                        </script>           
                    </div> 
                </form>
            </div>
            <?php
        } else {
            header("Location: principal.php");
        }
        ?> 
    </section>
</body> 
<?php
include('mdl/footer.inc.php');
