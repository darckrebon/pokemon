<?php
include_once("layout/head.php");

?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Lista de Pokemon</h3>
              </div>
            </div>

            <div class="clearfix"></div>
            <?php
            if(isset($_GET['del']) == 'user'){
              $sql="UPDATE poke SET status = 0 WHERE id_poke = ".$_GET['id'];
              $resp_sql = mysqli_query($_SESSION['conexao'],$sql);
              if($resp_sql){
                echo'<div class="alert alert-info alert-dismissible " role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <strong>Sucesso!</strong> Pokemon enviado para o PC !
                </div>';
              }else{
                echo'<div class="alert alert-warning alert-dismissible " role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <strong>Erro !</strong> Não é possivel enviar o pokemo para o PC !!!!.
                </div>';
              }
            }
            ?>
            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    
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
                  <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <!--<div class="x_title">
                    <h2>Hover rows <small>Try hovering over the rows</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
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
                    </ul>
                    <div class="clearfix"></div>
                  </div>-->
                  <div class="x_content">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nome</th>
                          <th>Nivel</th>
                          <th>Nature</th>
                          <th>Habiliti</th>
                          <th>Xp</th>
                          <th>ATK</th>
                          <th>Esp.Atk</th>
                          <th>Defesa</th>
                          <th>Esp.Defesa</th>
                          <th>Speed</th>
                          <th>Amizade</th>
                          <th>Tipo de Captura</th>
                          <th>Ação</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $sql = "SELECT * from poke WHERE status = 1";
                        $result = mysqli_query($_SESSION['conexao'],$sql);
                        while($linha = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                          echo '
                          <tr>
                          <th scope="row">'.$linha['id_poke'].'</th>
                          <td>'.$linha['nome'].'</td>
                          <td>'.$linha['lv'].'</td>
                          <td>'.$linha['nature'].'</td>
                          <td>'.$linha['hab'].'</td>
                          <td>'.$linha['xp'].'</td>
                          <td>'.$linha['atk'].'</td>
                          <td>'.$linha['satk'].'</td>
                          <td>'.$linha['def'].'</td>
                          <td>'.$linha['sdef'].'</td>
                          <td>'.$linha['speed'].'</td>
                          <td>'.$linha['ami'].'</td>
                          <td>'.$linha['tcap'].'</td>
                          <td>
                          <a href="editar_usuarios.php?id='.$linha['id_poke'].'"><img src="images/lapis.png" height="18px" width="18px"></a>
                          <a href="listar_time.php?del=user&id='.$linha['id_poke'].'">🖥️</a>
                          </td>
                        </tr>';
                        }
                        ?>
                      </tbody>
                    </table>

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