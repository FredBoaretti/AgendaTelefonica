<?php
    class contatoModel extends CI_Model
    {
        public $id;
        public $nome;
        public $apelido;
        public $telefone;
        public $email;
        public $cep;
        public $rua;
        public $complemento;
        public $bairro;
        public $cidade;
        public $ativo;
        public $favorito;

        public function Selecionar()
        {
            $sql = $this->db->query("SELECT
                                        c.id,
                                        c.nome,
                                        c.apelido,
                                        c.telefone,
                                        c.email,
                                        c.cep,
                                        c.rua,
                                        c.complemento,
                                        c.bairro,
                                        c.cidade,
                                        c.favorito
                                    FROM contato c
                                    WHERE ativo = 0");
            
            return $sql->result();
        }

        public function incluir($tabela)
        {
            $this->db->insert('contato', $tabela);
            return;
        }

        public function selecionaralterar($where)
        {
            $retorno = $this->db->get_where('contato',$where);
            return $retorno->result();
        }

        public function salvaralteracao($where, $dados)
        {
            $this->db->update('contato',$dados,$where);
        }

        public function deletar($id)
        {
            $this->db->where('id', $id);
            $this->db->query("UPDATE contato SET ativo = '1' WHERE contato.id = $id");
            return;
        }

        public function favorito()
        {
            $sql = $this->db->query("SELECT
                                        c.id,
                                        c.nome,
                                        c.apelido,
                                        c.telefone,
                                        c.email,
                                        c.cep,
                                        c.rua,
                                        c.complemento,
                                        c.bairro,
                                        c.cidade,
                                        c.favorito
                                    FROM contato c
                                    WHERE ativo = 0
                                    AND favorito = 1");
            
            return $sql->result();
        }

        public function favoritar($id)
        {
            $this->db->where('id', $id);
            $this->db->query("UPDATE contato SET favorito = '1' WHERE contato.id = $id");
            return;
        }

        public function desfavoritar($id)
        {
            $this->db->where('id', $id);
            $this->db->query("UPDATE contato SET favorito = '0' WHERE contato.id = $id");
            return;
        }
    }
?>