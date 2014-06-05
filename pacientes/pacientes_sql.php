<?
  include('../inc/conecta.inc');


  switch ($acao)
  {
         case novo:
               $sql_pacientes="
               INSERT INTO pacientes
               (nome, endereco, telefone, sexo, cpf, diagnostico)
               VALUES
               ('$nome', '$endereco', '$telefone', '$sexo', $cpf, '$diagnostico')";
               pg_query($sql_pacientes);
               break;
               
         case alterar:
               $sql_pacientes="
               UPDATE
                     pacientes
               SET
                     nome='$nome',
                     endereco='$endereco',
                     telefone='$telefone',
                     sexo='$sexo',
                     cpf=$cpf,
                     diagnostico='$diagnostico'
               WHERE
                     codpaciente=$codpaciente";
               pg_query($sql_pacientes);
               break;
               
         case excluir:
               $sql_pacientes="DELETE FROM pacientes WHERE codpaciente=$codpaciente";
               pg_query($sql_pacientes);
               break;
  }
  header('location:pacientes.php?acao=lista');
?>
