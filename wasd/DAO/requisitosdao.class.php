<?php
require_once '\\..\BancoDados\bancodados.class.php';
require_once '\\..\Entidade\requisitos.class.php';

class requisitosDao {

	private static $TABELA = 'REQUISITOS';

	//
	// Salva tarefa
	//
	public static function salvar(Requisitos $requisitos) {
		// Estabelece conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem persistidos
		$id = $requisitos -> getID();
		$os = $requisitos -> getOs();
		$memoriaram  = $requisitos ->getMemoriaRam();
		$outrosrequisitos  = $requisitos ->getOutroRequisito();
		$processador  = $requisitos ->getProcessador();
		$harddrive  = $requisitos ->getHardDrive();
		$dispositivosgraf  = $requisitos ->getDispositivosGraficos();
		$directx  = $requisitos ->getDirectX();

		// Atualizar ou...
		if ($id != 0) {
			$stmt = $conexao -> prepare("UPDATE " . self::$TABELA . " SET os = ?, memoriaram = ?, processador = ?, 
			dispositivosgraficos = ?, directx = ?, hardrive = ?, outrorequisito = ? " . " WHERE idrequisitos = ?;");
			$stmt -> bind_param("sisssisi", $os, $memoriaram, $processador, $dispositivosgraf,
			$directx, $harddrive, $outrosrequisitos, $id);
		
		// inserir
		} else {
			$stmt = $conexao -> prepare("INSERT INTO " . self::$TABELA . " VALUES (default, ?, ?, ?, ?, ?, ?, ?);");
			$stmt -> bind_param("isisssis", $id, $os, $memoriaram, $processador, $dispositivosgraf,
			$directx, $harddrive, $outrosrequisitos);
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
	public static function buscarPorId(Requisitos $requisitos) {
		// Recupera instância da conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem usados na preparação da consulta
		$id = $requisitos -> getID();		

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
		$stmt -> bind_result($id_result, $os_result, $memoriaram_result, $processador_result, $dispositivosgraf_result, 
		$directx_result, $harddrive_result, $outrorequisito_result);

		// Retorna tarefa localizada
		if ($stmt -> fetch()) {
			return new Chaves($id_result, $os_result, $memoriaram_result, $processador_result, $dispositivosgraf_result, 
		$directx_result, $harddrive_result, $outrorequisito_result);
		} else {
			return NULL;
		}
	}

	//
	// Busca conjunto de tarefas por descrição
	//
	public static function buscarPorOs(Requisitos $requisitos) {
		// Recupera conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem usados na preparação da consulta
		$os = '%' . $requisitos -> getOs() . '%';

		// Prepara a sentença SQL
		$stmt = $conexao -> prepare("SELECT * FROM " . self::$TABELA . " WHERE os LIKE ?;");

		// Liga valores das variáveis à consulta preparada
		$stmt -> bind_param("s", $os);

		// Executa sentença
		if (!($stmt -> execute())) {
			echo '<h2>Ocorreu um erro ao buscar os dados: </h2>' . $stmt -> error . '\n';
			exit();
		}

		// Relaciona resultados a variáveis
		$stmt -> bind_result($id_result, $os_result, $memoriaram_result, $processador_result, $dispositivosgraf_result, 
		$directx_result, $harddrive_result, $outrorequisito_result);

		// Retorna tarefa localizada
		if ($stmt -> fetch()) {
			return new Chaves($id_result, $os_result, $memoriaram_result, $processador_result, $dispositivosgraf_result, 
		$directx_result, $harddrive_result, $outrorequisito_result);
		} else {
			return NULL;
		}
	}

	//
	// Exclui Requisito
	//
	public static function excluir(Requisitos $requisitos) {
		// Recupera conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem usados na preparação da consulta
		$id = $requisitos -> getID();

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