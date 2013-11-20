<?php
require_once '\\..\BancoDados\bancodados.class.php';
require_once '\\..\Entidade\enderecos.class.php';

class EnderecosDao {

	private static $TABELA = 'ENDERECOS';

	//
	// Salva tarefa
	//
	public static function salvar(Enderecos $enderecos) {
		// Estabelece conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem persistidos
		$id = $enderecos -> getId();
		$fkcliente = $enderecos -> getFkCliente();
		$tipologradouro = $enderecos -> getTipoLogradouro();
		$logradouro = $enderecos -> getLogradouro();
		$numero = $enderecos-> getNumero();
		$complemento = $enderecos -> getComplemento();		
		$cep = $enderecos ->getCep();
		$cidade = $enderecos -> getCidade();
		$uf = $enderecos -> getUf();
		$bairro = $enderecos -> getBairro();


		// Atualizar ou...
		if ($id != 0) {
			$stmt = $conexao -> prepare("UPDATE " . self::$TABELA . " SET fkcliente = ?, 
			tipologradouro = ?, logradouro = ?, numero = ?, complemento = ?, cep = ?, cidade = ?, uf = ?, 
			bairro = ? where idendereco = ?, ;");
			$stmt -> bind_param("issssssssi", $fkcliente, $tipologradouro, $logradouro, $numero, 
			$complemento, $cep, $cidade, $uf, $bairro, $id);
		
		// inserir
		} else {
			$stmt = $conexao -> prepare("INSERT INTO " . self::$TABELA . " VALUES (default, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
			$stmt -> bind_param("iissssssss", $id, $fkcliente, $tipologradouro, $logradouro, $numero, 
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
	public static function buscarPorId(enderecos $endereco) {
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
		$stmt -> bind_result($id_result, $fkcliente_result, $tipologradouro_result, $logradouro_result, $numero_result, 
			$complemento_result, $cep_result, $cidade_result, $uf_result, $bairro_result);

		// Retorna tarefa localizada
		if ($stmt -> fetch()) {
			return new enderecos($id_result, $fkcliente_result, $tipologradouro_result, $logradouro_result, $numero_result, 
			$complemento_result, $cep_result, $cidade_result, $uf_result, $bairro_result);
		} else {
			return NULL;
		}
	}

	//
	// Busca conjunto de tarefas por descrição
	//
	public static function buscarPorCliente(Enderecos $endereco) {
		// Recupera conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem usados na preparação da consulta
		$fkcliente = '%' . $endereco -> getFkCliente() . '%';

		// Prepara a sentença SQL
		$stmt = $conexao -> prepare("SELECT * FROM " . self::$TABELA . " WHERE fkcliente LIKE ?;");

		// Liga valores das variáveis à consulta preparada
		$stmt -> bind_param("i", $fkcliente);

		// Executa sentença
		if (!($stmt -> execute())) {
			echo '<h2>Ocorreu um erro ao buscar os dados: </h2>' . $stmt -> error . '\n';
			exit();
		}

		// Relaciona resultados a variáveis
		$stmt -> bind_result($id_result, $fkcliente_result, $tipologradouro_result, $logradouro_result, $numero_result, 
			$complemento_result, $cep_result, $cidade_result, $uf_result, $bairro_result);

		// Retorna tarefa localizada
		if ($stmt -> fetch()) {
			return new enderecos($id_result, $fkcliente_result, $tipologradouro_result, $logradouro_result, $numero_result, 
			$complemento_result, $cep_result, $cidade_result, $uf_result, $bairro_result);
		} else {
			return NULL;
		}
	}

	//
	// Exclui endereco
	//
	public static function excluir(Enderecos $endereco) {
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