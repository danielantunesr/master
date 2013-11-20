<?php
require_once '\\..\BancoDados\bancodados.class.php';
require_once '\\..\Entidade\enderecosdev.class.php';

class EnderecosDevDao {

	private static $TABELA = 'ENDERECOSDEV';

	//
	// Salva tarefa
	//
	public static function salvar(EnderecosDev $enderecosdev) {
		// Estabelece conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem persistidos
		$id = $enderecosdev -> getId();
		$fkdesenvolvedor = $enderecosdev -> getFkDesenvolvedor();
		$tipologradouro = $enderecosdev -> getTipoLogradouro();
		$logradouro = $enderecosdev -> getLogradouro();
		$numero = $enderecosdev -> getNumero();
		$complemento = $enderecosdev -> getComplemento();		
		$cep = $enderecosdev ->getCep();
		$cidade = $enderecosdev -> getCidade();
		$uf = $enderecosdev -> getUf();
		$bairro = $enderecosdev -> getBairro();


		// Atualizar ou...
		if ($id != 0) {
			$stmt = $conexao -> prepare("UPDATE " . self::$TABELA . " SET fkdesenvolvedor = ?, 
			tipologradouro = ?, logradouro = ?, numero = ?, complemento = ?, cep = ?, cidade = ?, uf = ?, 
			bairro = ? where idendereco = ?, ;");
			$stmt -> bind_param("issssssssi", $fkdesenvolvedor, $tipologradouro, $logradouro, $numero, 
			$complemento, $cep, $cidade, $uf, $bairro, $id);
		
		// inserir
		} else {
			$stmt = $conexao -> prepare("INSERT INTO " . self::$TABELA . " VALUES (default, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
			$stmt -> bind_param("iissssssss", $id, $fkdesenvolvedor, $tipologradouro, $logradouro, $numero, 
			$complemento, $cep, $cidade, $uf, $bairro);
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
	public static function buscarPorId(enderecosdev $endereco) {
		// Recupera instância da conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem usados na preparação da consulta
		$id = $endereco -> getId();

		// Prepara a sentença SQL
		$stmt = $conexao -> prepare("SELECT * FROM " . self::$TABELA . " WHERE idendereco = ?;");

		// Liga valores das variáveis à consulta preparada
		$stmt -> bind_param("i", $id);

		// Executa sentença SQL
		if (!$stmt -> execute()) {
			echo '<h2>Ocorreu um erro ao buscar os dados:</h2>' . "<br>" . $stmt -> error . '\n';
			exit();
		}

		// Relaciona resultados a variáveis
		$stmt -> bind_result($id_result, $fkdesenvolvedor_result, $tipologradouro_result, $logradouro_result, $numero_result, 
			$complemento_result, $cep_result, $cidade_result, $uf_result, $bairro_result);

		// Retorna tarefa localizada
		if ($stmt -> fetch()) {
			return new EnderecosDev($id_result, $fkdesenvolvedor_result, $tipologradouro_result, $logradouro_result, $numero_result, 
			$complemento_result, $cep_result, $cidade_result, $uf_result, $bairro_result);
		} else {
			return NULL;
		}
	}

	//
	// Busca conjunto de tarefas por descrição
	//
	public static function buscarPorDesenvolvedor(Enderecosdev $endereco) {
		// Recupera conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem usados na preparação da consulta
		$fkdesenvolvedor = '%' . $endereco -> getFkDesenvolvedor() . '%';

		// Prepara a sentença SQL
		$stmt = $conexao -> prepare("SELECT * FROM " . self::$TABELA . " WHERE fkdesenvolvedor LIKE ?;");

		// Liga valores das variáveis à consulta preparada
		$stmt -> bind_param("i", $fkdesenvolvedor);

		// Executa sentença
		if (!($stmt -> execute())) {
			echo '<h2>Ocorreu um erro ao buscar os dados: </h2>' . $stmt -> error . '\n';
			exit();
		}

		// Relaciona resultados a variáveis
		$stmt -> bind_result($id_result, $fkdesenvolvedor_result, $tipologradouro_result, $logradouro_result, $numero_result, 
			$complemento_result, $cep_result, $cidade_result, $uf_result, $bairro_result);

		// Retorna tarefa localizada
		if ($stmt -> fetch()) {
			return new enderecosdev($id_result, $fkdesenvolvedor_result, $tipologradouro_result, $logradouro_result, $numero_result, 
			$complemento_result, $cep_result, $cidade_result, $uf_result, $bairro_result);
		} else {
			return NULL;
		}
	}

	//
	// Exclui endereco
	//
	public static function excluir(Enderecosdev $endereco) {
		// Recupera conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem usados na preparação da consulta
		$id = $endereco -> getId();

		// Prepara a sentença SQL
		$stmt = $conexao -> prepare("DELETE FROM " . self::$TABELA . " WHERE idendereco = ?;");

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