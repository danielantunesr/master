<?php
require_once '\\..\BancoDados\bancodados.class.php';
require_once '\\..\Entidade\midia.class.php';

class midiaDao {

	private static $TABELA = 'MIDIA';

	public static function salvar(Midia $midia) {
		// Estabelece conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem persistidos
		$idmidia = $midia -> getId();
		$endmidia = $midia -> getEnderecoMidia();
		$tipomidia = $midia -> getTipoMidia();
		
		
		// Atualizar ou...
		if ($id != 0) {
			$stmt = $conexao -> prepare("UPDATE " . self::$TABELA . " SET endmidia = ? , tipomidia = ? " . " WHERE idmidia = ?;");
			$stmt -> bind_param("ssi", $endmidia, $tipomidia, $idmidia);

			// inserir
		} else {
			$stmt = $conexao -> prepare("INSERT INTO " . self::$TABELA . " VALUES (default, ?, ?);");
			$stmt -> bind_param("iss", $idmidia, $endmidia, $tipomidia);
		}

		// Executa sentença
		if (!$stmt -> execute()) {
			echo '<h2>Ocorreu um erro ao salvar os dados:</h2>' . "<br>" . $stmt -> error . '\n';
			exit();
		} else {
			echo "<h2>Dados Salvos com Sucesso!<h2>";
		}
	}

	// Busca tarefa pela ID
	public static function buscarPorId(Midia $midia) {
		// Recupera instância da conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem usados na preparação da consulta
		$id = $midia -> getId() . '%';

		// Prepara a sentença SQL
		$stmt = $conexao -> prepare("SELECT * FROM " . self::$TABELA . " WHERE id = ?;");

		// Liga valores das variáveis à consulta preparada
		$stmt -> bind_param("i", $id);

		// Executa sentença SQL
		if (!$stmt -> execute()) {
			echo '<h2>Ocorreu um erro ao buscar os dados:</h2>' . "<br>" . $stmt -> error . '\n';
			exit();
		}

		// Relaciona resultados a variáveis
		$stmt -> bind_result($idmidia_result, $endmidia_result, $tipomidia_result);

		// Retorna tarefa localizada
		if ($stmt -> fetch()) {
			return new Midia($idmidia_result, $endmidia_result, $tipomidia_result);
		} else {
			return NULL;
		}
	}

	//
	// Busca conjunto de estoque por tipo de movimentacao.
	//
	public static function buscarPorTipoDeMidia(Midia $midia) {
		// Recupera conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem usados na preparação da consulta
		$tipomidia = '%' . $midia -> getTipoMidia() . '%';

		// Prepara a sentença SQL
		$stmt = $conexao -> prepare("SELECT * FROM " . self::$TABELA . " WHERE tipomidia LIKE ?;");

		// Liga valores das variáveis à consulta preparada
		$stmt -> bind_param("s", $tipomidia);

		// Executa sentença
		if (!($stmt -> execute())) {
			echo '<h2>Ocorreu um erro ao buscar os dados: </h2>' . $stmt -> error . '\n';
			exit();
		}
		// Relaciona resultados a variáveis
		$stmt -> bind_result($idmidia_result, $endmidia_result, $tipomidia_result);

		// Retorna tarefa localizada
		if ($stmt -> fetch()) {
			return new Midia($idmidia_result, $endmidia_result, $tipomidia_result);
		} else {
			return NULL;
		}
	}

	//
	// Busca conjunto de tarefas por data e hora
	//
	public static function buscarEnderecoMidia(Midia $midia) {
		// Recupera conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem usados na preparação da consulta
		$endmidia = '%' . $midia -> getEnderecoMidia() . '%';

		// Prepara a sentença SQL
		$stmt = $conexao -> prepare("SELECT * FROM " . self::$TABELA . " WHERE endmidia LIKE ?;");

		// Liga valores das variáveis à consulta preparada
		$stmt -> bind_param("s", $endmidia);

		// Executa sentença
		if (!($stmt -> execute())) {
			echo '<h2>Ocorreu um erro ao buscar os dados: </h2>' . $stmt -> error . '\n';
			exit();
		}
		
		// Relaciona resultados a variáveis
		$stmt -> bind_result($idmidia_result, $endmidia_result, $tipomidia_result);

		// Retorna tarefa localizada
		if ($stmt -> fetch()) {
			return new Midia($idmidia_result, $endmidia_result, $tipomidia_result);
		} else {
			return NULL;
		}		
	}

	//
	// Exclui Midias IMAGEM ou VIDEO
	//
	public static function excluir(Midia $midia) {
		// Recupera conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem usados na preparação da consulta
		$id = $midia -> getId();

		// Prepara a sentença SQL
		$stmt = $conexao -> prepare("DELETE FROM " . self::$TABELA . " WHERE id = ?;");

		// Liga valores das variáveis à consulta preparada
		$stmt -> bind_param("i", $id);

		// Executa sentença
		if (!($stmt -> execute())) {
			echo '<h2>Ocorreu um erro ao buscar os dados: </h2>' . $stmt -> error . '\n';
			exit();
		}
	}

}
?>