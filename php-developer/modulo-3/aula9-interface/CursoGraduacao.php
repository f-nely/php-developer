<?php


class CursoGraduacao implements Icurso
{
    public $nomeDisciplina;
    public $nomeProfessor;

    public function disciplina($nomeDisciplina)
    {
        $this->nomeDisciplina = $nomeDisciplina;
        return "Disciplina: {$this->nomeDisciplina} <br>";
    }

    public function professor($nomeProfessor)
    {
        $this->nomeProfessor = $nomeProfessor;
        return "Professor: {$this->nomeProfessor} <hr>";
    }
}