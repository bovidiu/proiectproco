<?php 
if (isset($_SESSION['id'])) header('Location: index.php');
$t = "Conectare";
include 'head.php';
?>


<div class="container">   
<?php
if (isset($_GET['er'])) {if ($_GET['er']==1)echo '<div class="alert alert-danger" role="alert"><b>Eroare!</b> Datele introduse sunt incorecte!</div>';
if ($_GET['er']==2)echo '<div class="alert alert-success" role="alert"><b>Succes!</b> Contul a fost creat si acum te poti conecta!</div>';
}
?> 
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-success">
                    <div class="panel-heading">
                        <div class="panel-title">Conectare în aplicație</div>
                        
                    </div>     
					
                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" method="POST" action="login_check.php">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="user" value="" placeholder="email">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="pass" placeholder="parolă">
                                    </div>
                                    

                                
                            


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <input type="submit" class="btn btn-success" value="Conectare">
                                      

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Nu ai cont? 
                                        <a href="signup.php">
                                            Înregistrează-te!
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     



                        </div>                     
                    </div>  
        </div>
             


</body>
</html>