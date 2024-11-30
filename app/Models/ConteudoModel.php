<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class ConteudoModel extends Model {
        // Atributos de configuração
        protected $table = 'conteudo';
        protected $primaryKey = 'ID_Conteudo';
        // Campos editáveis
        protected $allowedFields = ['Titulo', 'Texto_curto', 'Texto_completo', 'Imagem'];

        // Método Get para apresentar o conteúdo
        public function getConteudo() {
            return $this -> findAll();
        }

        public function getConteudoItem($id) {
            return $this -> asArray() -> where(['id_conteudo' => $id]) -> first();
        }
    }
?>