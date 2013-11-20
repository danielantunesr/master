<?php
require_once '\\..\BancoDados\bancodados.class.php';
require_once '\\..\Entidade\desenvolvedores.class.php';

class desenvolvedoresDao {

	private static $TABELA = 'DESENVOLVEDORES';

	//
	// Salva tarefa
	//
	public static function salvar(Desenvolvedores $desenvolvedores) {
		// Estabelece conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem persistidos
		$iddesenvolvedor = $desenvolvedores -> getID();
		$nome = $desenvolvedores -> getNome();
		$email = $desenvolvedores -> getEmail();
		$clientedesde = $desenvolvedores -> getClienteDesde();
		$site = $desenvolvedores -> getSite();
		
		// Atualizar ou...
		if ($id != 0) {
			$stmt = $conexao -> prepare("UPDATE " . self::$TABELA . " SET nome = ? , email = ?, clientedesde = ?, 
			site = ?, " . " WHERE iddesenvolvedor = ?;");
			$stmt -> bind_param("ssssi", $nome, $email, $clientedesde, $site, $iddesenvolvedor);
		
		// inserir
		} else {
			$stmt = $conexao -> prepare("INSERT INTO " . self::$TABELA . " VALUES (default, ?, ?, ?, ?);");
			$stmt -> bind_param("issss", $iddesenvolvedor, $nome, $email, $clientedesde, $site);
		}

		// Executa sentença
		if (!$stmt -> execute()) {
			echo '<h2>Ocorreu um erro ao salvar os dados:</h2>' . "<br>" . $stmt -> error . '\n';
			exit();
		}else{
			echo "<h2>Dados Salvos com Sucesso!<h2>";
		}
	}


	// Busca cliente pela ID
	public static function buscarPorId(Desenvolvedores $desenvolvedores) {
		// Recupera instância da conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem usados na preparação da consulta
		$id = $desenvolvedores -> getId();

		// Prepara a sentença SQL
		$stmt = $conexao -> prepare("SELECT * FROM " . self::$TABELA . " WHERE iddesenvolvedor = ?;");

		// Liga valores das variáveis à consulta preparada
		$stmt -> bind_param("i", $id);

		// Executa sentença SQL
		if (!$stmt -> execute()) {
			echo '<h2>Ocorreu um erro ao buscar os dados:</h2>' . "<br>" . $stmt -> error . '\n';
			exit();
		}

		// Relaciona resultados a variáveis
		$stmt -> bind_result($iddesenvolvedor_result, $nome_result, $email_result, $clientedesde_result, $site_result);

		// Retorna tarefa localizada
		if ($stmt -> fetch()) {
			return new Desenvolvedores($iddesenvolvedor_result, $nome_result, $email_result, $clientedesde_result, $site_result);
		} else {
			return NULL;
		}
	}


	//
	// Busca conjunto de DESENVOLVEDORES por NOME
	//
	public static function buscarPorNome(Desenvolvedores $desenvolvedores) {
		// Recupera conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem usados na preparação da consulta
		$nome = '%' . $desenvolvedores -> getNome(). '%';

		// Prepara a sentença SQL
		$stmt = $conexao -> prepare("SELECT * FROM " . self::$TABELA . " WHERE nome LIKE ?;");

		// Liga valores das variáveis à consulta preparada
		$stmt -> bind_param("s", $nome);

		// Executa sentença
		if (!($stmt -> execute())) {
			echo '<h2>Ocorreu um erro ao buscar os dados: </h2>' . $stmt -> error . '\n';
			exit();
		}

		// Relaciona resultados a variáveis
		$stmt -> bind_result($iddesenvolvedor_result, $nome_result, $email_result, $clientedesde_result, $site_result);

		// Retorna tarefa localizada
		if ($stmt -> fetch()) {
			return new Desenvolvedores($iddesenvolvedor_result, $nome_result, $email_result, $clientedesde_result, $site_result);
		} else {
			return NULL;
		}
	}


	//
	// Exclui Desenvolvedores
	//
	public static function excluir(Desenvolvedores $desenvolvedores) {
		// Recupera conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem usados na preparação da consulta
		$id = $desenvolvedores -> getID();

		// Prepara a sentença SQL
		$stmt = $conexao -> prepare("DELETE FROM " . self::$TABELA . " WHERE id = ?;");

		// Liga valores das variáveis à consulta preparada
		$stmt -> bind_param("i", $id);

		// Executa sentença
		if (!($stmt -> execute())) {
			echo '<h2 class="erro">Ocorreu um erro: </h2>' . $stmt -> error . '\n';
			exit();
		}
	}

}
?>