<?php
class Servico
{
    protected $id_servico;
    protected $nome;
    protected $valor;
    protected $descricao;
    protected $id_tipo;

    function setAll(
        $novo_nome,
        $novo_valor,
        $novo_descricao,
        $novo_id_tipo
    ) {
        ($this)->nome = $novo_nome;
        ($this)->valor = $novo_valor;
        ($this)->descricao = $novo_descricao;
        ($this)->id_tipo = $novo_id_tipo;
    }


    function get_id_servico()
    {
        return ($this)->id_servico;
    }

    function set_id_servico($novo_id_servico)
    {
        ($this)->id_servico = $novo_id_servico;
    }

    function get_nome()
    {
        return ($this)->nome;
    }

    function set_nome($novo_nome)
    {
        ($this)->nome = $novo_nome;
    }

    function get_valor()
    {
        return ($this)->valor;
    }

    function set_valor($novo_valor)
    {
        ($this)->valor = $novo_valor;
    }

    function get_descricao()
    {
        return ($this)->descricao;
    }

    function set_descricao($novo_descricao)
    {
        ($this)->descricao = $novo_descricao;
    }

    function get_id_tipo()
    {
        return ($this)->id_tipo;
    }

    function set_id_tipo($novo_id_tipo)
    {
        ($this)->id_tipo = $novo_id_tipo;
    }
}
