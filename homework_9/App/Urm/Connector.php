<?php
namespace App\Urm;
use PDO;
use Exception;
class Connector
{

    private array $config = [];
    private PDO $pdo;
    public function __construct()
    {
        $this->initConfig();
        $this->db_connect();

    }

    private function initConfig(): void
    {
        $this->config = require __DIR__ . '/../../config/db_cred.php';
    }

    public function getDns(): string
    {
        if ($this->config['driver'] && $this->config['host'] && $this->config['db']) {
            return $dsn = $this->config['driver'] . ':host=' . $this->config['host'] . ';dbname=' . $this->config['db'];
        }
        throw new Exception('Missing DNS data');
    }
 
    
    private function db_connect(): void
    {
        if (empty($this->config['user']) && empty($this->config['pass'])) {
            throw new Exception('Missing user or password');
        }
        $this->pdo = new PDO($this->getDns(), $this->config['user'], $this->config['pass']);
        
    }
    public function connection(): PDO {
        return $this->pdo;
    }

}