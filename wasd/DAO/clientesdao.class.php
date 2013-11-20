<?php
require_once '\\..\BancoDados\bancodados.class.php';
require_once '\\..\Entidade\clientes.class.php';

class clientesDao {

	private static $TABELA = 'CLIENTES';

	//
	// Salva tarefa
	//
	public static function salvar(Clientes $clientes) {
		// Estabelece conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem persistidos
		$id = $clientes -> getId();
		$nome = $clientes -> getNome();
		$dtcadastro = $clientes -> getDtCadastro();
		$login = $clientes -> getLogin();
		$senha = $clientes -> getSenha();
		$email = $clientes -> getEmail();
		$dtnasc = $clientes -> getDtNasc();
		$cpf = $clientes -> getCpf();
		$rg = $clientes -> getRg();
		$fonefixo = $clientes -> getFoneFixo();
		$fonemovel = $clientes -> getFoneMovel();
		
		// Atualizar ou...
		if ($id != 0) {
			$stmt = $conexao -> prepare("UPDATE " . self::$TABELA . " SET nome = ? , dtcadastro = ?, login = ?, senha = ?, email = ?, dtnascto = ?, cpf = ?, rg = ?, fonefixo = ?, fonemovel =? " 
			. " WHERE idcliente = ?;");
			$stmt -> bind_param("sdsssdssssi", $nome, $dtcadastro, $login, $senha, $email, $dtnasc, $cpf, $rg, $fonefixo, $fonemovel,$id);
		
		// inserir
		} else {
			$stmt = $conexao -> prepare("INSERT INTO " . self::$TABELA . " VALUES (default, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
			$stmt -> bind_param("isdsssdssss", $id, $nome, $dtcadastro, $login, $senha, $email, $dtnasc, $cpf, $rg, $fonefixo, $fonemovel);
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
	public static function buscarPorId(Clientes $clientes) {
		// Recupera instância da conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem usados na preparação da consulta
		$id = $clientes -> getId();

		// Prepara a sentença SQL
		$stmt = $conexao -> prepare("SELECT * FROM " . self::$TABELA . " WHERE idclientes = ?;");

		// Liga valores das variáveis à consulta preparada
		$stmt -> bind_param("i", $id);

		// Executa sentença SQL
		if (!$stmt -> execute()) {
			echo '<h2>Ocorreu um erro ao buscar os dados:</h2>' . "<br>" . $stmt -> error . '\n';
			exit();
		}

		// Relaciona resultados a variáveis
		$stmt -> bind_result($id_result, $nome_result, $dtcadastro_result, $login_result, $senha_result, $email_result
		, $dtnasc_result, $cpf_result, $rg_result, $fonefixo_result, $fonemovel_result);

		// Retorna tarefa localizada
		if ($stmt -> fetch()) {
			return new clientes($id_result, $nome_result, $dtcadastro_result, $login_result, $senha_result, $email_result
		, $dtnasc_result, $cpf_result, $rg_result, $fonefixo_result, $fonemovel_result);
		} else {
			return NULL;
		}
	}

	//
	// Busca conjunto de CLIENTE por NOME
	//
	public static function buscarPorNome(Clientes $clientes) {
		// Recupera conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem usados na preparação da consulta
		$nome = '%' . $clientes -> getNome(). '%';

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
		$stmt -> bind_result($id_result, $nome_result, $dtcadastro_result, $login_result, $senha_result, $email_result
		, $dtnasc_result, $cpf_result, $rg_result, $fonefixo_result, $fonemovel_result);

		// Retorna tarefa localizada
		if ($stmt -> fetch()) {
			return new clientes($id_result, $nome_result, $dtcadastro_result, $login_result, $senha_result, $email_result
		, $dtnasc_result, $cpf_result, $rg_result, $fonefixo_result, $fonemovel_result);
		} else {
			return NULL;
		}
	}

	//
	// Busca conjunto de tarefas por descrição
	//
	public static function buscarPorCpf(Clientes $clientes) {
		// Recupera conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem usados na preparação da consulta
		$cpf = '%' . $clientes -> getCpf(). '%';

		// Prepara a sentença SQL
		$stmt = $conexao -> prepare("SELECT * FROM " . self::$TABELA . " WHERE cpf LIKE ?;");

		// Liga valores das variáveis à consulta preparada
		$stmt -> bind_param("s", $cpf);

		// Executa sentença
		if (!($stmt -> execute())) {
			echo '<h2>Ocorreu um erro ao buscar os dados: </h2>' . $stmt -> error . '\n';
			exit();
		}

		// Relaciona resultados a variáveis
		$stmt -> bind_result($id_result, $nome_result, $dtcadastro_result, $login_result, $senha_result, $email_result
		, $dtnasc_result, $cpf_result, $rg_result, $fonefixo_result, $fonemovel_result);

		// Retorna tarefa localizada
		if ($stmt -> fetch()) {
			return new clientes($id_result, $nome_result, $dtcadastro_result, $login_result, $senha_result, $email_result
		, $dtnasc_result, $cpf_result, $rg_result, $fonefixo_result, $fonemovel_result);
		} else {
			return NULL;
		}
	}

	//
	// Exclui clientes
	//
	public static function excluir(clientes $clientes) {
		// Recupera conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem usados na preparação da consulta
		$id = $clientes -> getId();

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