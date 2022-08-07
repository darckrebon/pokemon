<?php
include_once("layout/head.php");
include_once("helpers/funcao.php");

$con=mysqli_connect("localhost","root","","teste");

if (mysqli_connect_errno()) {
  echo "Erro ao conectar ao banco: " . mysqli_connect_error();
  exit();
}else{
  
  if(isset($_GET['id'])){ // RECEBE DADOS VIA GET

    $msg = '';

    $id = $_GET['id'];

    $linha = buscaById($id);

    if($linha['termo'] == 1){
      $palavra = 'checked'; 
    }else{
      $palavra = '';
    }

    $sobre = $linha['sobre'];
    //LINGUAGEM FAV
    $fav_css = '';
    $fav_js = '';
    $fav_html = '';
    if($linha['fav'] == 'css'){
      $fav_css = 'checked';
    }elseif($linha['fav'] == 'js'){
      $fav_js = 'checked';
    }else{
      $fav_html = 'checked';
    }

    //CARRO FAV
    $volvo_fav = '';
    $saab_fav = '';
    $mercedes_fav = '';
    $audi_fav = '';
    if($linha['cars'] == 'volvo'){
      $volvo_fav = 'selected';
    }elseif($linha['cars'] == 'saab'){
      $saab_fav = 'selected';
    }elseif($linha['cars'] == 'mercedes'){
      $mercedes_fav = 'selected';
    }else{
      $audi_fav = 'selected';
    }

    if(isset($_GET['smg']) == 'sebr'){
      $msg ='Senha em branco!';
    }

  }else{ // ENVIA DADOS VIA POST
    $id_post = $_POST['id_post']; //OCULTO
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $nova_senha = $_POST['password'];
    $idade = $_POST['idade'];
    $termo = isset($_POST['termo']) ? 1 : 0;
    $fav = $_POST['fav'];
    $cars = $_POST['cars'];
    $sobre = $_POST['sobre'];

    if($nova_senha === '' || $nova_senha === null){
      echo 'Senha obrigatória!';
      header('Location: editar_usuario.php?id='.$id_post.'&smg=sebr');

    }else{
      $sql = "UPDATE cliente SET
      nome = '$nome',
      email = '$email',
      password = md5('$nova_senha'),
      idade = $idade,
      termo = $termo,
      fav = '$fav',
      cars = '$cars',
      sobre = '$sobre'
      WHERE id = $id_post";
      $result = mysqli_query($con,$sql);

      /*if($termo != 1){
        header('Location: editar_usuario.php?id='.$id_post.'&smg=sebr');
      }*/

      if($result){
        $msg = 'Dados atualizados com sucesso!';
      }else{
        $msg = 'Erro ao atualizar o registro!';
      }

      $sql = "SELECT * from cliente WHERE id = $id_post";
      $result = mysqli_query($con,$sql);
      $linha = mysqli_fetch_array($result, MYSQLI_ASSOC);
      if($linha['termo'] == 1){
      $palavra = 'checked';
      }else{
        $palavra = '';
      }

      //LINGUAGEM FAV
      $fav_css = '';
      $fav_js = '';
      $fav_html = '';
      if($linha['fav'] == 'css'){
        $fav_css = 'checked';
      }elseif($linha['fav'] == 'js'){
        $fav_js = 'checked';
      }else{
        $fav_html = 'checked';
      }

      //CARRO FAV
      $volvo_fav = '';
      $saab_fav = '';
      $mercedes_fav = '';
      $audi_fav = '';
      if($linha['cars'] == 'volvo'){
        $volvo_fav = 'selected';
      }elseif($linha['cars'] == 'saab'){
        $saab_fav = 'selected';
      }elseif($linha['cars'] == 'mercedes'){
        $mercedes_fav = 'selected';
      }else{
        $audi_fav = 'selected';
      }
    }
  
  }

}
?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Plain Page</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Plain Page</h2>
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
                  <div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Form Design <small>different form elements</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a class="dropdown-item" href="#">Settings 1</a>
												</li>
												<li><a class="dropdown-item" href="#">Settings 2</a>
												</li>
											</ul>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br>

									<form action="editar_usuarios.php" method="post" id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                  <input type="hidden" name="id_post" value="<?php echo $id; ?>">

                  <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nome:<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" name="nome" value="<?php echo $linha['nome']; ?>" required="required" class="form-control parsley-error" data-parsley-id="5"><ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">This value is required.</li></ul>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Email: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="last-name" name="email" value="<?php echo $linha['email']; ?>" required="required" class="form-control parsley-error" data-parsley-id="7"><ul class="parsley-errors-list filled" id="parsley-id-7"><li class="parsley-required">This value is required.</li></ul>
											</div>
										</div>

                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Idade: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="last-name" name="idade" value="<?php echo $linha['idade']; ?>" class="form-control parsley-error" data-parsley-id="7"><ul id="parsley-id-7">
											</div>
										</div>

                    <div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 label-align ">Select</label>
											<div class="col-md-6 col-sm-6 ">
												<select class="form-control" name="cars" id="cars">
                        <option value="">Selecione um modelo...</option>
                        <option value="volvo" <?php echo $volvo_fav; ?>>Volvo</option>
                        <option value="saab" <?php echo $saab_fav; ?>>Saab</option>
                        <option value="mercedes" <?php echo $mercedes_fav; ?>>Mercedes</option>
                        <option value="audi" <?php echo $audi_fav; ?>>Audi</option>
												</select>
											</div>
										</div>

                    <div class="form-group row">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Linguagem favorita</label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="radio" name="fav" value="html" <?php echo $fav_html; ?>>
                        <label>HTML</label><br>
                        <input type="radio" name="fav" value="css" <?php echo $fav_css; ?>>
                        <label>CSS</label><br>
                        <input type="radio" name="fav" value="js" <?php echo $fav_js; ?>>
                        <label>JavaScript</label>
                      </div>
                    </div>

										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nova senha:</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="middle-name" class="form-control" type="text" name="password" data-parsley-id="9">
											</div>
										</div>

                    <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Sobre:</label>  
                    <textarea id="message"  required="required" class="form-control col-md-6 col-sm-6" name="sobre" rows="4" cols="50"<?php echo $sobre; ?> data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10" style="height: 41px;"></textarea></div>

										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
                        
												<!--<button class="btn btn-primary" type="button">Cancel</button>
												<button class="btn btn-primary" type="reset">Reset</button>
												<button type="submit" class="btn btn-success">Submit</button>-->
                        <input type="submit" value="Atualizar" class="btn btn-success">
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
    </div>
  </div>
</div>
        <!-- /page content -->

<?php
include_once("layout/footer.php");
?>