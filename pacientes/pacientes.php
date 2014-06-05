<?
  include('../inc/conecta.inc');
  //include('../inc/cabecalho.php');


  switch($acao)
  {
               case lista:
                    include('cabecalho_pacientes.php');
                    include('lista_pacientes.php');
                    break;
                    
               case novo;
                    include('novo_pacientes.php');
                    break;
                    
               case alterar;
                    include('alterar_pacientes.php');
                    break;
  }

?>
