<form name=pacientes action=pacientes_sql.php method="POST">
<center><table border=1 width=50%>
      <input name=acao value=novo type=hidden>
      <tr>
          <td>Nome</td>
          <td><input name=nome size=50% autofocus required></td>
      </tr>
      <tr>
          <td>Endereco</td>
          <td><input name=endereco size=50%required></td>
      </tr>
      <tr>
          <td>Telefone</td>
          <td><input name=telefone size=50%required></td>
      </tr>
      <tr>
          <td>Sexo</td>
          <td><input name=sexo size=50%required></td>
      </tr>
      <tr>
          <td>Cpf</td>
          <td><input name=cpf size=50%required></td>
      </tr>
      <tr>
          <td>Diagnostico</td>
          <td><textarea name=diagnostico size=50%required></textarea></td>
      </tr>
      <tr>
        <td align=center colspan="2">
            <a href=javascript:salvar()><img src='../imagens/salvar.png' title='Clique aqui para Salvar'></a>
            <a href=<?php echo "pacientes.php?acao=lista"; ?>><img src='../imagens/cancelar.png' title='Clique aqui para cancelar e voltar'></a>
        </td>
      </tr>
</table>
</form>
</center>
<script>
function salvar()
{
   if (pacientes.nome.value == "")
   {
      alert("Por favor preencha o nome do paciente !!!");
      pacientes.nome.focus();
      exit;
   }
   document.pacientes.submit();
}
</script>
