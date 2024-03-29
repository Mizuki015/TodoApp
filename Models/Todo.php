<?php

require_once('config/dbconnect.php');

// Todoを操作するクラス（もの）
// - 追加する機能
// - 検索する機能
// - 編集する機能
// - 削除する機能

class Todo
{
    // プロパティ
    // - テーブル名
    // - DbManagerインスタンスを持つ変数

    // テーブル名
    public $table = 'tasks';

    // DbManager
    private $db_manager;

    // コンストラクタ：生まれた瞬間に実行
    public function __construct()
    {
        // db_managerプロパティは、
        // DbManagerクラスのインスタンス
        $this->db_manager = new DbManager();

        // データベースに接続
        $this->db_manager->connect();
    }

    // public function create($task)
    // {
    //     // INSERT文の準備
    //     $stmt = $this->db_manager->dbh->prepare('INSERT INTO ' . $this->table . '(name) VALUES (?)');
    //     // 準備したものを実行
    //     $stmt->execute([$task]);
        
    // }
    public function create($task)
  {
    // INSERT分の準備
    $stmt = $this->db_manager->dbh->prepare('INSERT INTO ' . $this->table . '(name) VALUES (?)');
    // 準備したものを実行
    $stmt->execute([$task]);
  }

  public function getAll()
  {
    // INSERT分の準備
    $stmt = $this->db_manager->dbh->prepare('SELECT * FROM ' . $this->table);
    // 準備したものを実行
    $stmt->execute();
    $results = $stmt->fetchAll();

    return $results;
  }

  public function delete()
  {

  }
}
?>
