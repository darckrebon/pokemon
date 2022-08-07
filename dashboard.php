<?php
include_once("layout/head.php");
?>
        

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Informaçoes</h3>
              </div>
            </div>

            <div class="clearfix"></div>

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

                  <!--HOME-->

                  <!--USUARIO TOTAIS-->
                    <div class="row">
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                          <div class="tile-stats">
                            <div class="icon"><i class="fa fa-paw"></i>
                            </div>
                            <div class="count"><?php echo usuarioTotal(); ?></div>
                            <h3>Pokemon</h3>
                            <!--<p>Lorem ipsum psdea itgum rixt.</p>-->
                          </div>
                        </div>
                        <!--USUARIO ATIVO-->
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                          <div class="tile-stats">
                            <div class="icon"><i class="fa fa-group"></i>
                            </div>
                            <div class="count"><?php echo usuarioAtivo(); ?></div>
                            <h3>Time Ativos</h3>
                            <!--<p>Lorem ipsum psdea itgum rixt.</p>-->
                          </div>
                        </div>
                        <!--USUARIO iNATIVO-->
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                          <div class="tile-stats">
                            <div class="icon"><i class="fa fa-laptop"></i>
                            </div>
                            <div class="count"><?php echo usuarioInativo(); ?></div>
                            <h3>PC</h3>
                            <!--<p>Lorem ipsum psdea itgum rixt.</p>-->
                          </div>
                        </div>

                        <!--PRESENTE-->
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                          <div class="tile-stats">
                            <div class="icon"><i class="fa fa-gift"></i>
                            </div>
                            <div class="count"><?php echo usuarioPresente(); ?></div>
                            <h3>Poke de Presente</h3>
                            <!--<p>Lorem ipsum psdea itgum rixt.</p>-->
                          </div>
                        </div>

                        <!--POKEBOLA-->
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                          <div class="tile-stats">
                            <div class="icon"><i class="fa fa-smile-o"></i>
                            </div>
                            <div class="count"><?php echo usuarioPokebola(); ?></div>
                            <h3>Minha Captura</h3>
                            <!--<p>Lorem ipsum psdea itgum rixt.</p>-->
                          </div>
                        </div>

                        <!--OVO-->
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                          <div class="tile-stats">
                          <div class="icon"><i class="fa fa-database"></i>
                            </div>
                            <div class="count"><?php echo usuarioOvo(); ?></div>
                            <h3>Poke de Ovo</h3>
                            <!--<p>Lorem ipsum psdea itgum rixt.</p>-->
                          </div>
                        </div>

                        <!--FOCIL-->
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                          <div class="tile-stats">
                            <div class="icon"><i class="fa fa-lemon-o"></i>
                            </div>
                            <div class="count"><?php echo usuarioFocil(); ?></div>
                            <h3>Poke de Focil</h3>
                            <!--<p>Lorem ipsum psdea itgum rixt.</p>-->
                          </div>
                        </div>
                        <iframe width="560" class="col-lg-12" height="315" src="https://www.youtube.com/embed/akc9wMwoMwc?controls=0&amp;start=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      
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