<?php
require_once '\\..\BancoDados\bancodados.class.php';
require_once '\\..\Entidade\estoque.class.php';

class EstoqueDao {

	private static $TABELA = 'ESTOQUE';

	public static function salvar(Estoque $estoque) {
		// Estabelece conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem persistidos
		$id = $estoque -> getIdEstoque();
		$fkproduto = $estoque -> getFkProduto();
		$movproduto = $estoque -> getMovProduto();
		$quantidade = $estoque -> getQuantidade();
		$datahora = $estoque -> getDataHora();

		// Atualizar ou...
		if ($id != 0) {
			$stmt = $conexao -> prepare("UPDATE " . self::$TABELA . " SET fkproduto = ? , movproduto = ? , quantidade = ?, datahora = ?" . " WHERE idestoque = ?;");
			$stmt -> bind_param("isisi", $fkproduto, $movproduto, $quantidade, $datahora, $id);

			// inserir
		} else {
			$stmt = $conexao -> prepare("INSERT INTO " . self::$TABELA . " VALUES (default, ?, ?, ?, ?);");
			$stmt -> bind_param("iisis", $id, $fkproduto, $movproduto, $quantidade, $datahora);
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
	public static function buscarPorId(Estoque $estoque) {
		// Recupera instância da conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem usados na preparação da consulta
		$id = $estoque -> getIdEstoque() . '%';

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
		$stmt -> bind_result($idestoque_result, $fkproduto_result, $movproduto_result, $quantidade_result, $datahora_result);

		// Retorna tarefa localizada
		if ($stmt -> fetch()) {
			return new Estoque($idestoque_result, $fkproduto_result, $movproduto_result, $quantidade_result, $datahora_result);
		} else {
			return NULL;
		}
	}

	//
	// Busca conjunto de estoque por tipo de movimentacao.
	//
	public static function buscarPorMovimentacao(Estoque $estoque) {
		// Recupera conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem usados na preparação da consulta
		$movproduto = '%' . $estoque -> getMovProduto() . '%';

		// Prepara a sentença SQL
		$stmt = $conexao -> prepare("SELECT * FROM " . self::$TABELA . " WHERE movproduto LIKE ?;");

		// Liga valores das variáveis à consulta preparada
		$stmt -> bind_param("s", $this -> movproduto);

		// Executa sentença
		if (!($stmt -> execute())) {
			echo '<h2>Ocorreu um erro ao buscar os dados: </h2>' . $stmt -> error . '\n';
			exit();
		}
		// Relaciona resultados a variáveis
		$stmt -> bind_result($idestoque_result, $fkproduto_result, $movproduto_result, $quantidade_result, $datahora_result);

		// Retorna tarefa localizada
		if ($stmt -> fetch()) {
			return new Estque($idestoque_result, $fkproduto_result, $movproduto_result, $quantidade_result, $datahora_result);
		} else {
			return NULL;
		}
	}

	//
	// Busca conjunto de tarefas por data e hora
	//
	public static function buscarDataHora(Estoque $estoque) {
		// Recupera conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem usados na preparação da consulta
		$dataHora = '%' . $estoque -> getDataHora() . '%';

		// Prepara a sentença SQL
		$stmt = $conexao -> prepare("SELECT * FROM " . self::$TABELA . " WHERE datahora LIKE ?;");

		// Liga valores das variáveis à consulta preparada
		$stmt -> bind_param("s", $dataHora);

		// Executa sentença
		if (!($stmt -> execute())) {
			echo '<h2>Ocorreu um erro ao buscar os dados: </h2>' . $stmt -> error . '\n';
			exit();
		}
		// Relaciona resultados a variáveis
		$stmt -> bind_result($idestoque_result, $fkproduto_result, $movproduto_result, $quantidade_result, $datahora_result);

		// Retorna tarefa localizada
		if ($stmt -> fetch()) {
			return new Estoque($idestoque_result, $fkproduto_result, $movproduto_result, $quantidade_result, $datahora_result);
		} else {
			return NULL;
		}
	}

	//
	// Exclui Chave
	//
	public static function excluir(Estoque $estoque) {
		// Recupera conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem usados na preparação da consulta
		$id = $estoque -> getIdEstoque();

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