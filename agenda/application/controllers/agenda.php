<?php
    class agenda extends CI_Controller
    {
        public function index()
        {
            $this->load->model('contatoModel');

            $tabela = $this->contatoModel->Selecionar();

            $dados = array(
                'titulo'=>'Meus Contatos',
                'tabela'=>$tabela,
                'pagina'=>'agenda/index.php'
            );

            $this->load->view('index',$dados);
        }

        public function cadastrar()
        {
            $dados = array(
                'titulo'=>'Cadastar Novo Contato',
                'pagina'=>'agenda/cadastrar.php'
            );

            $this->load->view('index',$dados);
        }

        public function salvar()
        {
            $this->load->model('contatoModel');

            $nome = $this->input->post('nome');
            $apelido = $this->input->post('apelido');
            $telefone = $this->input->post('telefone');
            $email = $this->input->post('email');
            $cep = $this->input->post('cep');
            $rua = $this->input->post('rua');
            $complemento = $this->input->post('complemento');
            $bairro = $this->input->post('bairro');
            $cidade = $this->input->post('cidade');

            $tabela = array(
                'nome'=>$nome,
                'apelido'=>$apelido,
                'telefone'=>$telefone,
                'email'=>$email,
                'cep'=>$cep,
                'rua'=>$rua,
                'complemento'=>$complemento,
                'bairro'=>$bairro,
                'cidade'=>$cidade
            );

            $this->contatoModel->incluir($tabela);

            redirect('agenda');
        }

        public function alterar($codigo)
        {
            $this->load->model('contatoModel');
            $where = array('id' =>$codigo);
            $tabela = $this->contatoModel->selecionaralterar($where);
            $dados = array(
                'titulo'=>'Alterar dados do Contato,',
                'pagina'=>'agenda/alterar.php',
                'tabela'=>$tabela
            );

            $this->load->view('index',$dados);
        }

        public function salvaralteracao()
        {
            $id = $this->input->post('id');
            $nome = $this->input->post('nome');
            $apelido = $this->input->post('apelido');
            $telefone = $this->input->post('telefone');
            $email = $this->input->post('email');
            $cep = $this->input->post('cep');
            $rua = $this->input->post('rua');
            $complemento = $this->input->post('complemento');
            $bairro = $this->input->post('bairro');
            $cidade = $this->input->post('cidade');

            $dados = array(
                'nome'=>$nome,
                'apelido'=>$apelido,
                'telefone'=>$telefone,
                'email'=>$email,
                'cep'=>$cep,
                'rua'=>$rua,
                'complemento'=>$complemento,
                'bairro'=>$bairro,
                'cidade'=>$cidade
            );

            $where = array(
                'id'=>$id
            );

            $this->load->model('contatoModel');
            $this->contatoModel->salvaralteracao($where, $dados);
            redirect('agenda');
        }

        public function deletar($id)
        {
            $this->load->model('contatoModel');

            $this->contatoModel->deletar($id);

            redirect('agenda');
        }

        public function favorito()
        {
            $this->load->model('contatoModel');

            $tabela = $this->contatoModel->favorito();

            $dados = array(
                'titulo'=>'Contatos Favoritos',
                'tabela'=>$tabela,
                'pagina'=>'agenda/favoritos.php'
            );

            $this->load->view('index',$dados);
        }

        public function favoritar($id)
        {
            $this->load->model('contatoModel');

            $this->contatoModel->favoritar($id);

            redirect('agenda');
        }

        public function desfavoritar($id)
        {
            $this->load->model('contatoModel');

            $this->contatoModel->desfavoritar($id);

            redirect('agenda');
        }
    }
?>