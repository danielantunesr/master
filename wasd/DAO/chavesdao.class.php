<?php
require_once '\\..\BancoDados\bancodados.class.php';
require_once '\\..\Entidade\chaves.class.php';

class ChavesDao {

	private static $TABELA = 'CHAVES';

	//
	// Salva tarefa
	//
	public static function salvar(Chaves $chave) {
		// Estabelece conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem persistidos
		$id = $chave -> getId();
		$key = $chave -> getChave();

		// Atualizar ou...
		if ($id != 0) {
			$stmt = $conexao -> prepare("UPDATE " . self::$TABELA . " SET chave = ?" . " WHERE idchaves = ?;");
			$stmt -> bind_param("si", $key, $id);
		
		// inserir
		} else {
			$stmt = $conexao -> prepare("INSERT INTO " . self::$TABELA . " VALUES (default, ?);");
			$stmt -> bind_param("s", $key);
		}

		// Executa sentença
		if (!$stmt -> execute()) {
			echo '<h2>Ocorreu um erro ao salvar os dados:</h2>' . "<br>" . $stmt -> error . '\n';
			exit();
		}else{
			echo "<h2>Dados Salvos com Sucesso!<h2>";
		}
	}

	// Busca tarefa pela ID
	public static function buscarPorId(Chaves $chave) {
		// Recupera instância da conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem usados na preparação da consulta
		$id = $chave -> getId();

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
		$stmt -> bind_result($id_result, $chave_result);

		// Retorna tarefa localizada
		if ($stmt -> fetch()) {
			return new Chaves($id_result, $chave_result);
		} else {
			return NULL;
		}
	}

	//
	// Busca conjunto de tarefas por descrição
	//
	public static function buscarPorChave(Chaves $chave) {
		// Recupera conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem usados na preparação da consulta
		$chave = '%' . $chave -> getChave() . '%';

		// Prepara a sentença SQL
		$stmt = $conexao -> prepare("SELECT * FROM " . self::$TABELA . " WHERE chave LIKE ?;");

		// Liga valores das variáveis à consulta preparada
		$stmt -> bind_param("s", $chave);

		// Executa sentença
		if (!($stmt -> execute())) {
			echo '<h2>Ocorreu um erro ao buscar os dados: </h2>' . $stmt -> error . '\n';
			exit();
		}

		// Relaciona resultados a variáveis
		$stmt -> bind_result($id_result, $chavedialog);

		// Retorna tarefa localizada
		if ($stmt -> fetch()) {
			return new Chaves($id_result, $chavedialog);
		} else {
			return NULL;
		}
	}

	//
	// Exclui Chave
	//
	public static function excluir(Chaves $chave) {
		// Recupera conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem usados na preparação da consulta
		$id = $chave -> getId();

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