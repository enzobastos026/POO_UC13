<?php
 
class curso {
    public $disciplina;
    public $horas;
    public $dias;
    private $aluno;
 
    // Construtor com validação
    public function __construct($disciplina, $horas, $dias, $aluno) {
        if (empty($disciplina)) {
            throw new Exception("O campo Curso é obrigatório.");
        }
        if (!filter_var($horas, FILTER_VALIDATE_INT) || $horas <= 0) {
            throw new Exception("O campo Horas deve ser um número inteiro positivo.");
        }
        if (!filter_var($dias, FILTER_VALIDATE_INT) || $dias <= 0) {
            throw new Exception("O campo Dias deve ser um número inteiro positivo.");
        }
        if (empty($aluno)) {
            throw new Exception("O campo Aluno é obrigatório.");
        }
        $this->disciplina = $disciplina;
        $this->horas = $horas;
        $this->dias = $dias;
        $this->aluno = $aluno;
    }
     
    public function getaluno() {
        return $this->aluno;
    }
    
 
    // Método para exibir os dados
    public function exibirDados() {
        echo "<p>Disciplina: <strong>$this->disciplina</strong><br>";
        echo "Horas: <strong>$this->horas</strong><br>";
        echo "Dias: <strong>$this->dias</strong><br>";
        echo "Aluno: <strong>" . $this->getaluno(). "</strong></p>";
    }
}