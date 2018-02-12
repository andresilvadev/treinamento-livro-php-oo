<?php
try
{
    # Instancia objeto PDO, conectando no postgresql
    $conn = new PDO("mysql:dbname=livrophp;dbhost=localhost","root","root");

    # Executa uma instrucao SQL de consulta
    $result = $conn->query("SELECT codigo, nome FROM famosos");

    if($result)
    {
      # percorre os resultados via iteracao
      while ($row = $result->fetch(PDO::FETCH_OBJ))   
      {
          # exibe os resultados
          echo $row->codigo . ' - ' . $row->nome . "<br>\n";
      }
    }
    
    # Fecha conexão
    $conn = null;
}
catch(PDOException $exception)
{
    # caso ocorra uma excecao, exite na tela
    print "Erro!: " . $exception->getMessage() ; "\n";
    die();
}