<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<form action="../controller/create.php" method="post" class="card p-3">
    <input type="hidden" name="nome_curso" value="adicionar">

    <div>
        <label>Nome</label>
        <input  type="text" name="nome" id="nome" required>
    </div>
<br>
    <div>
        <button type="submit">Enviar</button>
        <button type="reset">Limpar</button>
    </div>
</form>


</body>
</html>