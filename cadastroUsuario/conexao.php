<?php
class Conexao {
    private $host = " sql305.infinityfree.com";
    private $usuario = "if0_36312389";
    private $senha = "GdwoYZL9kZHjVF";
    private $banco = "if0_36312389_Registros";
    private $porta = "3306";

    public $conexao;

    public function conectar() {
        $this->conexao = null;
        try {
            if (!empty($this->porta)) {
                $dsn = "mysql:host={$this->host};port={$this->porta};dbname={$this->banco}";
            } else {
                $dsn = "mysql:host={$this->host};dbname={$this->banco}";
            }
            $this->conexao = new PDO($dsn, $this->usuario, $this->senha);
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $excecao) {
            echo "Erro de conexão: " . $excecao->getMessage();
        }
        return $this->conexao;
    }
}
?>


