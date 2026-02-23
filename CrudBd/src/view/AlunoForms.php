<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<form method="POST" action="../controller/create.php">
    <input type="text" name="nome_aluno" value="adicionar" placeholder="Nome do Aluno" required>
 <br><br>   
    <label>Selecione os Cursos</label><br>
    <select name="cursos_selecionados[]" multiple size="" style="width: 200px;">
        <?php while($c = mysqli_fetch_assoc($cursos)): ?>
            <option value="<?= $c['id'] ?>"><?= $c['nome_curso'] ?></option>
        <?php endwhile; ?>
    </select>
 <br><br><br><br><b><br>
 </b>
    <div>
        <button style="color: red;" type="submit">Enviar</button>
        <button type="reset">Limpar</button>
    </div>
</form>

</body>
</html>