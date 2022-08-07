<?php

function sejaBemVindo($nome){

    echo '<h1> Bem vindo <i>'.$nome.'</i> </h1>';

  }

function buscaById($id){

    $sql = "SELECT * from cliente WHERE id_poke = $id";
    $result = mysqli_query($_SESSION['conexao'],$sql);
    $linha = mysqli_fetch_array($result, MYSQLI_ASSOC);
    return $linha;
}

function buscaClientes(){

  $sql = "SELECT * from cliente";
  $result = mysqli_query($_SESSION['conexao'],$sql);
  $linha = mysqli_fetch_array($result, MYSQLI_ASSOC);
  return $linha;
}

function validaLogin(){

  if(isset($_SESSION['email']) == null){
  header('Location: index.php');
  }

}

function encerrarSesao(){
  if(isset($_GET['logout']) == 'sair'){

    session_start();
    $_SESSION['id'] = null;    
    $_SESSION['email'] = null; 
    session_destroy();

  }
}

function tamanhaString($sobre){
    
    echo strlen($sobre);

}

function nomeUsuario(){
  $sql = "SELECT * from cliente";
  $result = mysqli_query($_SESSION['conexao'],$sql);
  $linha = mysqli_fetch_array($result, MYSQLI_ASSOC);
}

function usuarioTotal(){
//TOTAL
$sql = "SELECT COUNT(id_poke) FROM poke";
$start_sql = mysqli_query($_SESSION['conexao'],$sql);
$sql_fetch = mysqli_fetch_array($start_sql, MYSQLI_ASSOC);
return $sql_fetch['COUNT(id_poke)'];
}

function usuarioAtivo(){
//ATIVO
$sql = "SELECT COUNT(id_poke) FROM poke WHERE STATUS = 1";
$start_sql = mysqli_query($_SESSION['conexao'],$sql);
$sql_fetch_at = mysqli_fetch_array($start_sql, MYSQLI_ASSOC);
return $sql_fetch_at['COUNT(id_poke)'];
}

function usuarioInativo(){
//INATIVO
$sql = "SELECT COUNT(id_poke) FROM poke WHERE STATUS = 0";
$start_sql = mysqli_query($_SESSION['conexao'],$sql);
$sql_fetch_in = mysqli_fetch_array($start_sql, MYSQLI_ASSOC);
return $sql_fetch_in['COUNT(id_poke)'];
}

function usuarioPresente(){
  //PRESENTE
  $sql = "SELECT COUNT(id_poke) FROM poke WHERE tcap = 'Presente'";
  $start_sql = mysqli_query($_SESSION['conexao'],$sql);
  $sql_fetch_in = mysqli_fetch_array($start_sql, MYSQLI_ASSOC);
  return $sql_fetch_in['COUNT(id_poke)'];
}

function usuarioPokebola(){
//POKEBOLA
  $sql = "SELECT COUNT(id_poke) FROM poke WHERE tcap = 'Pokebola'";
  $start_sql = mysqli_query($_SESSION['conexao'],$sql);
  $sql_fetch_in = mysqli_fetch_array($start_sql, MYSQLI_ASSOC);
  return $sql_fetch_in['COUNT(id_poke)'];
}
function usuarioOvo(){
//OVO
  $sql = "SELECT COUNT(id_poke) FROM poke WHERE tcap = 'Ovo'";
  $start_sql = mysqli_query($_SESSION['conexao'],$sql);
  $sql_fetch_in = mysqli_fetch_array($start_sql, MYSQLI_ASSOC);
  return $sql_fetch_in['COUNT(id_poke)'];
}

function usuarioFocil(){
//FOCIL
  $sql = "SELECT COUNT(id_poke) FROM poke WHERE tcap = 'Focil'";
  $start_sql = mysqli_query($_SESSION['conexao'],$sql);
  $sql_fetch_in = mysqli_fetch_array($start_sql, MYSQLI_ASSOC);
  return $sql_fetch_in['COUNT(id_poke)'];
}

?>