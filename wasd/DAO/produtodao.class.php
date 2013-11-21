<?php
require_once '\\..\BancoDados\bancodados.class.php';
require_once '\\..\Entidade\produto.class.php';

class ProdutoDao {

	private static $TABELA = 'PRODUTO';

	//
	// Salva tarefa
	//
	public static function salvar(Produto $produto) {
		// Estabelece conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem persistidos
		$id = $Produto -> getID();
		$nome = $Produto -> getNome();
		$descricao = $Produto -> getDescricao();
		$datalan = $Produto -> getDataLancamento();
		$precounitario = $Produto -> getPrecoUnitario();
		$distribuidora = $Produto -> getDistribuidora();
		$idiomas = $Produto -> getIdiomas();
		$modosdejogos = $Produto -> getModosDeJogo();
		$censura = $Produto -> getCensura();
		$genero = $Produto -> getGenero();
		$lucro = $Produto -> getLucro();
		$quantidadetotal = $produto -> getQuantidadeTotal();
		$fkrequisitos = $produto -> getFkRequisitos();
		$fkmidia = $produto -> getFkMidia();
		$chave = $produto -> getFkChaves();

		/*
		 *
		 * 		PAREI AQUI
		 *
		 *
		 */
		// Atualizar
		if ($id != 0) {
			$stmt = $conexao -> prepare("UPDATE " . self::$TABELA . " SET nome =?, descricao = ?, datalan = ?,
			precounitario = ?, distribuidora = ?, idiomas = ?, modosdejogo = ?, censura = ?, genero = ?,
			lucro = ?, quantidade = ?, fkrequisitos = ?, fkmidia = ?, chaves_idchaves = ? where idproduto = ?, ;");
			$stmt -> bind_param("ssddsssisdiiiii", $nome, $descricao, $datalan, $precounitario, $distribuidora, $idiomas, $modosdejogos, $censura, $genero, $lucro, $quantidadetotal, $fkrequisitos, $fkmidia, $chave, $id);

			// inserir
		} else {
			$stmt = $conexao -> prepare("INSERT INTO " . self::$TABELA . " VALUES (default, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
			$stmt -> bind_param("issddsssisdiiii", $id, $nome, $descricao, $datalan, $precounitario, $distribuidora, $idiomas, $modosdejogos, $censura, $genero, $lucro, $quantidadetotal, $fkrequisitos, $fkmidia, $chave);
		}

		// Executa sentença
		if (!$stmt -> execute()) {
			echo '<h2>Ocorreu um erro ao salvar os dados:</h2>' . "<br>" . $stmt -> error . '\n';
			exit();
		} else {
			echo "<h2>Dados Salvos com Sucesso!<h2>";
		}
	}

	// Busca produto pela ID
	public static function buscarPorId(Produto $produto) {
		// Recupera instância da conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem usados na preparação da consulta
		$id = $produto -> getID();

		// Prepara a sentença SQL
		$stmt = $conexao -> prepare("SELECT * FROM " . self::$TABELA . " WHERE idproduto = ?;");

		// Liga valores das variáveis à consulta preparada
		$stmt -> bind_param("i", $id);

		// Executa sentença SQL
		if (!$stmt -> execute()) {
			echo '<h2>Ocorreu um erro ao buscar os dados:</h2>' . "<br>" . $stmt -> error . '\n';
			exit();
		}

		// Relaciona resultados a variáveis
		$stmt -> bind_result($id_result, $nome_result, $descricao_result, $datalan_result, $precounitario_result, $distribuidora_result, $idiomas_result, $modosdejogos_result, $censura_result, $genero_result, $lucro_result, $quantidadetotal_result, $fkrequisitos_result, $fkmidia_result, $chave_result);

		// Retorna tarefa localizada
		if ($stmt -> fetch()) {
			return new Produto($id_result, $nome_result, $descricao_result, $datalan_result, $precounitario_result, $distribuidora_result, $idiomas_result, $modosdejogos_result, $censura_result, $genero_result, $lucro_result, $quantidadetotal_result, $fkrequisitos_result, $fkmidia_result, $chave_result);
		} else {
			return NULL;
		}
	}

	//
	// Busca produto por nome
	//
	public static function buscarPorNome(Produto $produto) {
		// Recupera conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem usados na preparação da consulta
		$nome = '%' . $produto -> getNome() . '%';

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
		$stmt -> bind_result($id_result, $nome_result, $descricao_result, $datalan_result, $precounitario_result, $distribuidora_result, $idiomas_result, $modosdejogos_result, $censura_result, $genero_result, $lucro_result, $quantidadetotal_result, $fkrequisitos_result, $fkmidia_result, $chave_result);

		// Retorna tarefa localizada
		if ($stmt -> fetch()) {
			return new Produto($id_result, $nome_result, $descricao_result, $datalan_result, $precounitario_result, $distribuidora_result, $idiomas_result, $modosdejogos_result, $censura_result, $genero_result, $lucro_result, $quantidadetotal_result, $fkrequisitos_result, $fkmidia_result, $chave_result);
		} else {
			return NULL;
		}
	}

	//
	// Busca produto por descrição
	//
	public static function buscarPorDescricao(Produto $produto) {
		// Recupera conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem usados na preparação da consulta
		$descricao = '%' . $produto -> getDescricao() . '%';

		// Prepara a sentença SQL
		$stmt = $conexao -> prepare("SELECT * FROM " . self::$TABELA . " WHERE descricao LIKE ?;");

		// Liga valores das variáveis à consulta preparada
		$stmt -> bind_param("s", $descricao);

		// Executa sentença
		if (!($stmt -> execute())) {
			echo '<h2>Ocorreu um erro ao buscar os dados: </h2>' . $stmt -> error . '\n';
			exit();
		}

		// Relaciona resultados a variáveis
		$stmt -> bind_result($id_result, $nome_result, $descricao_result, $datalan_result, $precounitario_result, $distribuidora_result, $idiomas_result, $modosdejogos_result, $censura_result, $genero_result, $lucro_result, $quantidadetotal_result, $fkrequisitos_result, $fkmidia_result, $chave_result);

		// Retorna tarefa localizada
		if ($stmt -> fetch()) {
			return new Produto($id_result, $nome_result, $descricao_result, $datalan_result, $precounitario_result, $distribuidora_result, $idiomas_result, $modosdejogos_result, $censura_result, $genero_result, $lucro_result, $quantidadetotal_result, $fkrequisitos_result, $fkmidia_result, $chave_result);
		} else {
			return NULL;
		}
	}

	//
	// Busca  produtos por data de lançamento
	//
	public static function buscarPorDataLancamento(Produto $produto) {
		// Recupera conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem usados na preparação da consulta
		$datalan = $produto -> getDataLancamento();

		// Prepara a sentença SQL
		$stmt = $conexao -> prepare("SELECT * FROM " . self::$TABELA . " WHERE dataLan LIKE ?;");

		// Liga valores das variáveis à consulta preparada
		$stmt -> bind_param("d", $datalan);

		// Executa sentença
		if (!($stmt -> execute())) {
			echo '<h2>Ocorreu um erro ao buscar os dados: </h2>' . $stmt -> error . '\n';
			exit();
		}

		// Relaciona resultados a variáveis
		$stmt -> bind_result($id_result, $nome_result, $descricao_result, $datalan_result, $precounitario_result, $distribuidora_result, $idiomas_result, $modosdejogos_result, $censura_result, $genero_result, $lucro_result, $quantidadetotal_result, $fkrequisitos_result, $fkmidia_result, $chave_result);

		// Retorna tarefa localizada
		if ($stmt -> fetch()) {
			return new Produto($id_result, $nome_result, $descricao_result, $datalan_result, $precounitario_result, $distribuidora_result, $idiomas_result, $modosdejogos_result, $censura_result, $genero_result, $lucro_result, $quantidadetotal_result, $fkrequisitos_result, $fkmidia_result, $chave_result);
		} else {
			return NULL;
		}
	}

	//
	// Busca produto por distribuidora
	//
	public static function buscarPorDistribuidora(Produto $produto) {
		// Recupera conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem usados na preparação da consulta
		$distribuidora = '%' . $produto -> getDistribuidora() . '%';

		// Prepara a sentença SQL
		$stmt = $conexao -> prepare("SELECT * FROM " . self::$TABELA . " WHERE distribuidora LIKE ?;");

		// Liga valores das variáveis à consulta preparada
		$stmt -> bind_param("s", $distribuidora);

		// Executa sentença
		if (!($stmt -> execute())) {
			echo '<h2>Ocorreu um erro ao buscar os dados: </h2>' . $stmt -> error . '\n';
			exit();
		}

		// Relaciona resultados a variáveis
		$stmt -> bind_result($id_result, $nome_result, $descricao_result, $datalan_result, $precounitario_result, $distribuidora_result, $idiomas_result, $modosdejogos_result, $censura_result, $genero_result, $lucro_result, $quantidadetotal_result, $fkrequisitos_result, $fkmidia_result, $chave_result);

		// Retorna tarefa localizada
		if ($stmt -> fetch()) {
			return new Produto($id_result, $nome_result, $descricao_result, $datalan_result, $precounitario_result, $distribuidora_result, $idiomas_result, $modosdejogos_result, $censura_result, $genero_result, $lucro_result, $quantidadetotal_result, $fkrequisitos_result, $fkmidia_result, $chave_result);
		} else {
			return NULL;
		}
	}

	//
	// Busca produto por genero
	//
	public static function buscarPorGenero(Produto $produto) {
		// Recupera conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem usados na preparação da consulta
		$genero = '%' . $produto -> getGenero() . '%';

		// Prepara a sentença SQL
		$stmt = $conexao -> prepare("SELECT * FROM " . self::$TABELA . " WHERE genero LIKE ?;");

		// Liga valores das variáveis à consulta preparada
		$stmt -> bind_param("s", $genero);

		// Executa sentença
		if (!($stmt -> execute())) {
			echo '<h2>Ocorreu um erro ao buscar os dados: </h2>' . $stmt -> error . '\n';
			exit();
		}

		// Relaciona resultados a variáveis
		$stmt -> bind_result($id_result, $nome_result, $descricao_result, $datalan_result, $precounitario_result, $distribuidora_result, $idiomas_result, $modosdejogos_result, $censura_result, $genero_result, $lucro_result, $quantidadetotal_result, $fkrequisitos_result, $fkmidia_result, $chave_result);

		// Retorna tarefa localizada
		if ($stmt -> fetch()) {
			return new Produto($id_result, $nome_result, $descricao_result, $datalan_result, $precounitario_result, $distribuidora_result, $idiomas_result, $modosdejogos_result, $censura_result, $genero_result, $lucro_result, $quantidadetotal_result, $fkrequisitos_result, $fkmidia_result, $chave_result);
		} else {
			return NULL;
		}
	}

	//
	// Busca produto por total de produtos
	//
	public static function buscarPorTotalDeProdutos(Produto $produto) {
		// Recupera conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem usados na preparação da consulta
		$total = $produto -> getQuantidadeTotal();

		// Prepara a sentença SQL
		$stmt = $conexao -> prepare("SELECT * FROM " . self::$TABELA . " WHERE quantidadetotal LIKE ?;");

		// Liga valores das variáveis à consulta preparada
		$stmt -> bind_param("i", $total);

		// Executa sentença
		if (!($stmt -> execute())) {
			echo '<h2>Ocorreu um erro ao buscar os dados: </h2>' . $stmt -> error . '\n';
			exit();
		}

		// Relaciona resultados a variáveis
		$stmt -> bind_result($id_result, $nome_result, $descricao_result, $datalan_result, $precounitario_result, $distribuidora_result, $idiomas_result, $modosdejogos_result, $censura_result, $genero_result, $lucro_result, $quantidadetotal_result, $fkrequisitos_result, $fkmidia_result, $chave_result);

		// Retorna tarefa localizada
		if ($stmt -> fetch()) {
			return new Produto($id_result, $nome_result, $descricao_result, $datalan_result, $precounitario_result, $distribuidora_result, $idiomas_result, $modosdejogos_result, $censura_result, $genero_result, $lucro_result, $quantidadetotal_result, $fkrequisitos_result, $fkmidia_result, $chave_result);
		} else {
			return NULL;
		}
	}

	//
	// Busca produto por Requisitos
	//
	public static function buscarPorRequisitos(Produto $produto) {
		// Recupera conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem usados na preparação da consulta
		$requisitos = $produto -> getFkRequisitos();

		// Prepara a sentença SQL
		$stmt = $conexao -> prepare("SELECT * FROM " . self::$TABELA . " WHERE quantidadetotal LIKE ?;");

		// Liga valores das variáveis à consulta preparada
		$stmt -> bind_param("i", $requisitos);

		// Executa sentença
		if (!($stmt -> execute())) {
			echo '<h2>Ocorreu um erro ao buscar os dados: </h2>' . $stmt -> error . '\n';
			exit();
		}

		// Relaciona resultados a variáveis
		$stmt -> bind_result($id_result, $nome_result, $descricao_result, $datalan_result, $precounitario_result, $distribuidora_result, $idiomas_result, $modosdejogos_result, $censura_result, $genero_result, $lucro_result, $quantidadetotal_result, $fkrequisitos_result, $fkmidia_result, $chave_result);

		// Retorna tarefa localizada
		if ($stmt -> fetch()) {
			return new Produto($id_result, $nome_result, $descricao_result, $datalan_result, $precounitario_result, $distribuidora_result, $idiomas_result, $modosdejogos_result, $censura_result, $genero_result, $lucro_result, $quantidadetotal_result, $fkrequisitos_result, $fkmidia_result, $chave_result);
		} else {
			return NULL;
		}
	}


	//
	// Busca produto por chave
	//
	public static function buscarPorChave(Produto $produto) {
		// Recupera conexão
		$conexao = BancoDados::recuperarConexao();

		// Recupera valores a serem usados na preparação da consulta
		$chave = $produto -> getFkChaves();

		// Prepara a sentença SQL
		$stmt = $conexao -> prepare("SELECT * FROM " . self::$TABELA . " WHERE chaves_idchaves LIKE ?;");

		// Liga valores das variáveis à consulta preparada
		$stmt -> bind_param("i", $chave);

		// Executa sentença
		if (!($stmt -> execute())) {
			echo '<h2>Ocorreu um erro ao buscar os dados: </h2>' . $stmt -> error . '\n';
			exit();
		}

		// Relaciona resultados a variáveis
		$stmt -> bind_result($id_result, $nome_result, $descricao_result, $datalan_result, $precounitario_result, $distribuidora_result, $idiomas_result, $modosdejogos_result, $censura_result, $genero_result, $lucro_result, $quantidadetotal_result, $fkrequisitos_result, $fkmidia_result, $chave_result);

		// Retorna tarefa localizada
		if ($stmt -> fetch()) {
			return new Produto($id_result, $nome_result, $descricao_result, $datalan_result, $precounitario_result, $distribuidora_result, $idiomas_result, $modosdejogos_result, $censura_result, $genero_result, $lucro_result, $quantidadetotal_result, $fkrequisitos_result, $fkmidia_result, $chave_result);
		} else {
			return NULL;
		}
	}	
	
	
	//
	// Exclui Produto
	//
	public static function excluir(Produto $endereco) {
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