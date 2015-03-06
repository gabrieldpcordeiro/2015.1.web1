<html>
  <head>
    <title>Formulário</title>
    <meta charset="UTF-8">
  </head>
  <body>
    <form action="saida.php"
          method="POST">
      <select name="cidade">
        <option>Natal</option>
        <option>Fortaleza</option>
        <option>João Pessoa</option>
      </select><br/>
      Nome
      <input name="nome"
             type="text"/>
      <br/>
      Endereço <input name="endereco"/><br/>
      Telefone <input name="telefone"/><br/>
      <input type="submit" value="Enviar"/>
    </form>
  </body>
</html>