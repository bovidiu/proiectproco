<?php 

$t = "Înregistrare";
include 'head.php';
if (isset($_SESSION['id'])) header('Location: index.php');
?>
<script src="lib/validator.js"></script>

<div class="container">   
<?php
if (isset($_GET['er'])) echo '<div class="alert alert-danger" role="alert"><b>Eroare!</b> Datele introduse sunt incorecte!</div>';
?> 
                <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <div class="panel-title">Înregistrare în aplicație</div>
                            
                        </div>  
                        <div class="panel-body" >
                            <form id="signupform" class="form-horizontal" role="form" data-toggle="validator" method="POST" action="signup_check.php">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                
                                  
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email"   data-error="Adresă de email incorectă"  required>
										<div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">Nume</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="nume" data-error="Acest câmp este obligatoriu" required>
										<div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Preume</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="pnume"  data-error="Acest câmp este obligatoriu" required>
										<div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Parolă</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="pass"  data-error="Acest câmp este obligatoriu" data-minlength="6" required>
										<div class="help-block">Minim 6 caractere</div>
                                    </div>
                                </div>
                                  
									
									
                                <div class="form-group">
                                    <label for="icode" class="col-md-3 control-label">Tip cont</label>
                                    <div class="col-md-4">
                                        <select class="form-control" name="cont">
										<option value="1">Elev</option>
										<option value="2">Profesor</option>
										</select>
                                    </div>
                                </div>

								<div class="form-group">
                                    <label for="icode" class="col-md-3 control-label">Județ</label>
                                    <div class="col-md-4">
                                        <select class="form-control" name="jd">
										<option value="Alba">Alba</option>
										<option value="Arad">Arad</option>
										<option value="Arges">Arges</option>
										<option value="Bacau">Bacau</option>
										<option value="Bihor">Bihor</option>
										<option value="Bistrita-Nasaud">Bistrita-Nasaud</option>
										<option value="Botosani">Botosani</option>
										<option value="Braila">Braila</option>
										<option value="Brasov">Brasov</option>
										<option value="Bucuresti">Bucuresti</option>
										<option value="Buzau">Buzau</option>
										<option value="Calarasi">Calarasi</option>
										<option value="Caras-Severin">Caras-Severin</option>
										<option value="Cluj">Cluj</option>
										<option value="Constanta">Constanta</option>
										<option value="Covasna">Covasna</option><
										option value="Dimbovita">Dimbovita</option>
										<option value="Dolj">Dolj</option>
										<option value="Galati">Galati</option>
										<option value="Gorj">Gorj</option>
										<option value="Giurgiu">Giurgiu</option>
										<option value="Harghita">Harghita</option>
										<option value="Hunedoara">Hunedoara</option>
										<option value="Ialomita">Ialomita</option><
										option value="Iasi">Iasi</option>
										<option value="Ilfov">Ilfov</option>
										<option value="Maramures">Maramures</option>
										<option value="Mehedinti">Mehedinti</option>
										<option value="Mures">Mures</option>
										<option value="Neamt">Neamt</option>
										<option value="Olt">Olt</option>
										<option value="Prahova">Prahova</option>
										<option value="Salaj">Salaj</option>
										<option value="Satu Mare">Satu Mare</option>
										<option value="Sibiu">Sibiu</option>
										<option value="Suceava">Suceava</option>
										<option value="Teleorman">Teleorman</option>
										<option value="Timis">Timis</option>
										<option value="Tulcea">Tulcea</option>
										<option value="Vaslui">Vaslui</option>
										<option value="Vilcea">Vilcea</option>
										<option value="Vrancea">Vrancea</option>
				
										</select>
                                    </div>
                                </div>
								
                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        
										<button type="submit" class="btn btn-success">Înregistrare</button>
                                         
                                    </div>
                                </div>
                                
                                 <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Ai deja cont? 
                                        <a href="login.php">
                                            Conectează-te!
                                        </a>
                                        </div>
                                    </div>
                                </div> 
                                
                                
                                
                            </form>
                         </div>
                    </div>

               
               
                
         </div>       
<script>

$('#signupform').validator();

$('#signupform').validator().on('submit', function (e) {
  if (e.isDefaultPrevented()) {
    // handle the invalid form...
  } else {
    // everything looks good!
  }
})

</script>

</body>
</html>