<?php


class Nota
{
    public $aluno;
    public $prova;
    public $trabalho;
    public $disciplina;

    function setNota($aluno, $disciplina, $prova, $trabalho)
    {
        $this->aluno = $aluno;
        $this->disciplina = $disciplina;
        $this->prova = $prova;
        $this->trabalho = $trabalho;
    }

    function getNota()
    {
        return "Nome do aluno: {$this->aluno} <br> Displina: {$this->disciplina} <br> Nota: " . ($this->prova + $this->trabalho) . "<br><hr>";
    }

    /**
     * @param mixed $prova
     */
    public function setProva($prova)
    {
        $this->prova = $prova;
    }

    /**
     * @param mixed $trabalho
     */
    public function setTrabalho($trabalho)
    {
        $this->trabalho = $trabalho;
    }

    /**
     * @param mixed $disciplina
     */
    public function setDisciplina($disciplina)
    {
        $this->disciplina = $disciplina;
    }


}