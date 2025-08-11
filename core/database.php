<?php
/**
 * ----------------------------------------------------------------------------
 * Classe Database (Conexão com Banco de Dados)
 * ----------------------------------------------------------------------------
 *
 * Esta classe é responsável por fornecer uma instância única de conexão com o
 * banco de dados (padrão Singleton), evitando múltiplas conexões desnecessárias.
 *
 * Por que usamos:
 * - Para centralizar a lógica de conexão com o banco de dados.
 * - Para garantir que apenas uma instância de conexão (PDO) seja criada e reutilizada.
 * - Para manter o código mais limpo e fácil de manter.
 */

class BancoDeDados {
    
    /**
     * Instância única da conexão (Singleton).
     *
     * @var PDO|null
     */
    private static $instancia = null;

    /**
     * ----------------------------------------------------------------------------
     * Método que retorna a conexão com o banco de dados
     * ----------------------------------------------------------------------------
     *
     * @return PDO A instância única de conexão com o banco de dados.
     *
     * Como funciona:
     * - Se a conexão ainda não existir ($instancia for null), cria uma nova.
     * - Configura o PDO para lançar exceções em caso de erros.
     * - Retorna a conexão existente nas próximas chamadas.
     */
    public static function obtemConexao(){

        if (self::$instancia === null) {
          // Cria a conexão com o banco de dados (ajuste as credenciais conforme necessário)
          self::$instancia = new PDO('mysql:host=localhost;dbname=meubanco', 'root', ''); 

          // Configura o PDO para lançar exceções em caso de erro
          self::$instancia->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        // Retorna a conexão do banco de dados criada/obtida.
        return self::$instancia;
    }
}