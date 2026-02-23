<?php
//require_once "../config/db.php";

//$db = new Database();
//$conn = $db->getConnection();

//switch ($_REQUEST['acao'] ?? '') {
  //  case 'adicionar':
    //    $sql = "INSERT INTO tcurso (nome, codigo) 
        //        VALUES (:nome, :codigo)";
        
      //  $stmt = $conn->prepare($sql);
       // $stmt->execute([
        //    ':nome'     => $_POST["nome"],
          //  ':codigo'   => $_POST["codigo"],
   //     ]);

     //   header("Location: ../view/index.php");
       // exit;
//}
 
include('../src/config/db.php');
 
$nome = $_POST['nome_aluno'];
$cursos_ids = $_POST['cursos_selecionados'];
 
$sql_aluno = "INSERT INTO alunos (nome_aluno) VALUES ('$nome')";
mysqli_query($conexao, $sql_aluno);
 
$aluno_id = mysqli_insert_id($conexao);
 
if (!empty($cursos_ids)) {
    foreach ($cursos_ids as $curso_id) {
        $sql_vinculo = "INSERT INTO aluno_curso (id_aluno, id_curso) VALUES ('$aluno_id', '$curso_id')";
        mysqli_query($conexao, $sql_vinculo);
    }
}
 
echo "Aluno cadastrado em " . count($cursos_ids) . " cursos!";