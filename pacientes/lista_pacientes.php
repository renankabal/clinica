<style>
.botao
     {
        height:40;
        font-size:15px;
     }
</style>
<?
$sql_pacientes="
             SELECT
                   codpaciente, nome
             FROM
                 pacientes
             ORDER BY
                   codpaciente DESC
             LIMIT 10
";
$cons_pacientes=pg_query($sql_pacientes);
while ($pacientes=pg_fetch_object($cons_pacientes))
{
  # Zebrado
  if ($cor==$corzebrado) $cor=''; else $cor=$corzebrado;
?>
      <tr title='Clique para ver a descrição do paciente <?php echo "$pacientes->paciente"; ?>'>
          <td><?php echo "$pacientes->nome"; ?></td>
          <td align=center>
              <a href=javascript:alterar(<?php echo "$pacientes->codpaciente"; ?>)><img src=../imagens/alterar.png title='Clique aqui para alterar'></a>
              <a href=javascript:excluir(<?php echo "$pacientes->codpaciente"; ?>)><img src=../imagens/excluir.png title='Clique aqui para excluir'></a>
      </tr>
<?php }

?>
</table>
<p><br></p>

<script>
function excluir(codpaciente)
{
   if (confirm('Deseja realmente excluir o registro de nº '+codpaciente+' ?'))
   {
      location.replace('pacientes_sql.php?acao=excluir&codpaciente='+codpaciente);
   }
}
function alterar(codpaciente)
{
   location.replace('pacientes.php?acao=alterar&codpaciente='+codpaciente);
}
</script>
