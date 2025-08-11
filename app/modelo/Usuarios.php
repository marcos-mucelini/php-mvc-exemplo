<?php
/**
 * ----------------------------------------------------------------------------
 * Classe User (Modelo de Usuário)
 * ----------------------------------------------------------------------------
 *
 * Responsável pela manipulação dos dados da tabela "usuarios" no banco de dados.
 * Opera diretamente com a conexão PDO(PHP Data Object) obtida via a classe Model, sem APIs externas.
 * 
 * Utilizado para realizar as operações de CRUD (Criar, Recuperar, Editar e Deletar).
*/

class Usuarios extends Modelo {

    /**
     * ----------------------------------------------------------------------------
     * Método listarUsuarios()
     * ----------------------------------------------------------------------------
     *
     * Recupera todos os usuários cadastrados no banco.
     * Retorna um array associativo com os dados dos usuários para exibição.
     *
     * @return array Lista de usuários
     */
    public function listarUsuarios(){
      // Prepara a SQL de consulta dos usuários
      $stmt = $this->bd->prepare("SELECT * FROM usuarios");
      
      // Executa a SQL
      $stmt->execute();

      // Pega o resultado obtido e retorna ele ao usuários no formato de lista.
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * ----------------------------------------------------------------------------
     * Método criarUsuários()
     * ----------------------------------------------------------------------------
     *
     * Insere um novo registro na tabela "usuarios" com os dados fornecidos.
     * Os dados são recebidos do formulário via array associativo $informacoes.
     *
     * @param array $informacoes Dados do usuário (nome, email, password)
     */
    public function criarUsuarios($informacoes){
      // cria a SQL que será executada
      // Obs.: Os parametros serão vinculados posteriormente na consulta
      $stmt = $this->bd->prepare(
          "INSERT INTO usuarios (nome, email, password) VALUES (?, ?, ?)"
      );

      // Executa a SQL criada e vincula o parâmetros que serão inseridos no banco.
      $stmt->execute([
          $informacoes['nome'],
          $informacoes['email'],
          $informacoes['senha']
      ]);
    }

    /**
     * ----------------------------------------------------------------------------
     * Método editarUsuários()
     * ----------------------------------------------------------------------------
     *
     * Atualiza os dados de um usuário pelo ID.
     *
     * @param int $id ID do usuário
     * @param array $data Dados (name, email, password)
     *
     * @return bool (Verdadeiro se deu tudo certo, Falso se deu algo errado)
     */
    public function editarUsuario($id, $registroAtualizado){
      // Cria a SQL de atualização do usuário selecionado
      // Obs.: SEMPRE DEVEMOS INFORMAR QUAL ID ESTAMOS UTILIZADO
      //       CASO CONTRÁRIO ESTARÍAMOS EDITANDO TODOS OS REGISTROS.
      $stmt = $this->bd->prepare(
        "UPDATE usuarios SET nome = :nome, email = :email, password = :senha WHERE id = :id"
      );
      
      // Executa e vincula os parâmetros do SQL
      return $stmt->execute([
        ':nome' => $registroAtualizado['nome'],
        ':email' => $registroAtualizado['email'],
        ':senha' => $registroAtualizado['senha'],
        ':id' => $id  
      ]);
    }

    /**
     * ----------------------------------------------------------------------------
     * Método buscarPorId()
     * ----------------------------------------------------------------------------
     *
     * Busca um usuário pelo ID.
     *
     * @param int $id Id do usuário
     *
     * @return array|false - Lista contendo o(s) usuário(s)
     */
    public function buscarPorId($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * ----------------------------------------------------------------------------
     * Método editarUsuários()
     * ----------------------------------------------------------------------------
     *
     * Exclui um usuário pelo ID.
     *
     * @param int $id
     * @return bool (Verdadeiro se deu tudo certo, Falso se deu algo errado)
     */
    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM users WHERE id = :id");
        return $stmt->execute([':id' => $id]);
    }
}