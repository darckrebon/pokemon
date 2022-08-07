<?php
include_once("layout/head.php");
$servername = "localhost";
$username = "root";
$password = "";
$banco = "rpg";

// Create connection
$conn = new mysqli($servername, $username, $password, $banco);

// Check connection
if ($conn->connect_error) {
  die("Erro: " . $conn->connect_error);
}else{
  
  if(isset($_POST['nome']) != null){
      
      $nome = $_POST['nome'];
      $hab = $_POST['hab'];
      $nature = $_POST['nature'];
      $lv = $_POST['lv'];
      $xp = $_POST['xp'];
      $hp = $_POST['hp'];
      $atk = $_POST['atk'];
      $satk = $_POST['satk'];
      $def = $_POST['def'];
      $sdef = $_POST['sdef'];
      $speed = $_POST['speed'];
      $ami = $_POST['ami'];
      $tcap = $_POST['tcap'];
      
      $sql = "INSERT INTO poke (nome, hab, nature, xp, lv, hp, atk, satk, def, sdef, speed, ami, tcap)
      VALUES ('$nome', '$hab', '$nature', $lv, $xp, $hp, $atk, $satk, $def, $sdef, $speed, $ami, '$tcap')";

      if ($conn->query($sql) === TRUE) {
        echo "Dados inseridos com sucesso!";  
        echo $nome;
      } else {
        echo "Erro ao cadastrar!";
      }
    }
     
    $conn->close();
 
  }
 
?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
    

        <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12  ">
                    <div class="x_panel">
                        <div class="x_title">
                        <h2>Novo Pokemon</h2>
                        <!--<ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Settings 1</a>
                                <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>-->
                        <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                        <div class="x_content">
                            <br>
                            <form action="novo_poke.php" method="post" id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nome<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" name="nome" id="last-name" required="required" class="form-control">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Habilit<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" name="hab" id="last-name" required="required" class="form-control">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nature<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" name="nature" id="last-name" required="required" class="form-control">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nivel<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="number" name="lv" id="last-name" required="required" class="form-control">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Xp<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="number" name="xp" id="last-name" required="required" class="form-control">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Hp<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="number" name="hp" id="last-name" required="required" class="form-control">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">ATK<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="number" name="atk" id="last-name" required="required" class="form-control">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Esp.Atk<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="number" name="satk" id="last-name" required="required" class="form-control">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Defessa<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="number" name="def" id="last-name" required="required" class="form-control">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Esp.Defessa<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="number" name="sdef" id="last-name" required="required" class="form-control">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Speed<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="number" name="speed" id="last-name" required="required" class="form-control">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Amizade<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="number" name="ami" id="last-name" required="required" class="form-control">
                                    </div>
                                </div>         

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Tipo de captura<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <select class="select2_group form-control" name="tcap">
                                            <option value="pokebola" name="cap">Pokebola</option>
                                            <option value="recompensa" name="cap">Recompensa</option>
                                            <option value="Presente" name="cap">Presente</option>
                                            <option value="ovo" name="cap">Ovo</option>
                                            <option value="focil" name="cap">Focil</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="col-md-6 col-sm-6 offset-md-3">
                                        <!--<button class="btn btn-primary" type="button">Cancel</button>
                                        <button class="btn btn-primary" type="reset">Reset</button>
                                        <button type="submit" class="btn btn-success">Submit</button>$_COOKIE-->

                                        <input type="submit" value="Enviar" class="btn btn-success">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

<?php
include_once("layout/footer.php");
?>