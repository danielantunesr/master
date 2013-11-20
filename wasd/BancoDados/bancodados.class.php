<?php
/**Criação dia 03/11/2013
 *
 *Classe responsável pela conexão com o Banco de Dados LOJA.
 */
class BancoDados {

	private static $conexao;

	private static $host = '127.0.0.1';
	private static $user = 'root';
	private static $password = '123456';
	private static $dbname = 'loja';
	private static $port = 3306;

	//public static $BANCO = 'Loja'; //

	public static function recuperarConexao() {
		//estabelece conexao via padrão Singleton
		if (self::$conexao == NULL) {
			self::$conexao = new mysqli(self::$host, self::$user, self::$password, self::$dbname, self::$port);
		}
		//devolve conexão estabelecida
		return self::$conexao;
	}

	function __construct($argument) {

	}

}
?>