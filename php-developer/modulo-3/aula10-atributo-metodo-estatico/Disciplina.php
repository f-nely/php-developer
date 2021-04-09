<?php


class Disciplina
{
    public $aluno;
    public $notaTrabalho;
    public $notaProva;
    public static $media;

    /**
     * Disciplina constructor.
     * @param $aluno
     * @param $notaTrabalho
     * @param $notaProva
     */
    public function __construct($aluno, $notaTrabalho, $notaProva)
    {
        $this->aluno = $aluno;
        $this->notaTrabalho = $notaTrabalho;
        $this->notaProva = $notaProva;
        self::$media = $this->notaProva + $this->notaTrabalho;
    }

    public function situacao()
    {
        if (static::$media >= 7):
            return "Aluno(a) {$this->aluno} está <b>aprovado</b> com média " . self::$media . "<hr>";
        else:
            return "Aluno(a) {$this->aluno} está <b>reprovado</b> com média " . self::$media . "<hr>";
        endif;
    }

    static public function situacaoAluno()
    {
        if (static::$media >= 7):
            return "Média " . self::$media . "<hr>";
        else:
            return "Média " . self::$media . "<hr>";
        endif;
    }
}