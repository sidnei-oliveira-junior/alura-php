<?php

class Curso
{
    private SplStack $alteracoes;
    private SplQueue $filaDeEsperaDeAlunos;
    private SqlDoublyLinkedList $alunosMatriculados;

    public function __construct(public string $nome)
    {
        $this->alteracoes = new SplStack();
        $this->filaDeEsperaDeAlunos = new SplQueue();
        $this->alunosMatriculados = new SqlDoublyLinkedList();
    }

    public function adicionaAlteracao(string $alteracao): void
    {
        $this->alteracoes->push($alteracao);
    }

    public function recuperaAlteracoes(): SplStack
    {
        return clone $this->alteracoes;
    }

    public function adicionaAlunoParaEspera(string $aluno): void
    {
        $this->filaDeEsperaDeAlunos->enqueue($aluno);
    }

    public function recuperaAlunosEsperando(): SplQueue
    {
        return $this->filaDeEsperaDeAlunos;
    }
    
    public function matricularAluno(string $aluno): void
    {
        $this->alunosMatriculados->push($aluno);
    }

    public function recuperaAlunosMatriculados(): SqlDoublyLinkedList
    {
        return clone $this->recuperarAlunosMatriculados;
    }



}