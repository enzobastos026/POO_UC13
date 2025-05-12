<?php
 require __DIR__ . "/../classes/curso.php"; // Alterado para incluir a classe Curso
// Inicializa as variáveis
$disciplina = $horas = $dias = $aluno = "";
$cursoCriado = false;
 
// Cadastrando
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $disciplina = trim($_POST["disciplina"]);
    $horas = trim($_POST["horas"]);
    $dias = trim($_POST["dias"]);
    $aluno = trim($_POST["aluno"]);
    try {
        $curso = new curso ($disciplina, $horas, $dias, $aluno); // Alterado para usar a classe Curso
        $cursoCriado = true;
    } catch (Exception $e) {
        echo "<div class='alert alert-danger mt-3'>" . $e->getMessage() . "</div>";
    }
}
?>
 
<h2>Cadastro de Curso</h2>
 
<form method="post" class="row g-3 mb-4">
    <div class="col-md-4">
        <label for="disciplina" class="form-label">Disciplina:</label>
        <input type="text" name="disciplina" id="disciplina" class="form-control"
            value="<?= htmlspecialchars($disciplina) ?>">
    </div>
 
    <div class="col-md-2">
        <label for="horas" class="form-label">Horas:</label>
        <input type="number" name="horas" id="horas" class="form-control"
            value="<?= htmlspecialchars($horas) ?>">
    </div>
 
    <div class="col-md-1">
        <label for="dias" class="form-label">Dias:</label>
        <input type="number" name="dias" id="dias" class="form-control"
            value="<?= htmlspecialchars($dias) ?>">
    </div>
 
    <div class="col-md-2">
        <label for="aluno" class="form-label">Aluno:</label>
        <input type="text" name="aluno" id="aluno" class="form-control"
            value="<?= htmlspecialchars($aluno) ?>">
    </div>
 
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</form>
 
<?php
if ($cursoCriado) {
    echo "<h3>Resultado:</h3>";
    $curso->exibirDados(); // Certifique-se de que o método exibirDados() está implementado na classe Curso
}
?>