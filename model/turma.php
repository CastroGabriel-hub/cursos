<?php
#Arquivo com a declaração da classe Aluno

class Turma {

    private $id_turma;
    private $codigo_disciplina;
    private $nome_disciplina;
    private $ano;
    private $curso;

    public function getId_turma()
    {
        return $this->id_turma;
    }

    public function setId_turma($id_turma)
    {
        $this->id_turma = $id_turma;

        return $this;
    }

    public function getCodigo_disciplina()
    {
        return $this->codigo_disciplina;
    }

    public function setCodigo_disciplina($codigo_disciplina)
    {
        $this->codigo_disciplina = $codigo_disciplina;

        return $this;
    }

    public function getNome_disciplina()
    {
        return $this->nome_disciplina;
    }

    public function setNome_disciplina($nome_disciplina)
    {
        $this->nome_disciplina = $nome_disciplina;

        return $this;
    }

    public function getAno()
    {
        return $this->ano;
    }

    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    public function getCurso()
    {
        return $this->curso;
    }

    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }

}

?>