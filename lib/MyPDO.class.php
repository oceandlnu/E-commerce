<?php

/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 17-12-23
 * Time: 上午9:51
 */
class MyPDO
{
    protected static $_instance = null;
    protected $dbms;  //数据库类型
    protected $host;  //数据库主机名
    protected $dbName;    //使用的数据库
    protected $user;  //数据库连接用户名
    protected $password;  //对应的密码
    protected $dsn;
    protected $dbh;

    /**
     * 初始化数据库实例
     * MyPDO constructor.
     */
    public function __construct()
    {
        $this->dbms = DB_MS;
        $this->host = DB_HOST;
        $this->dbName = DB_DBNAME;
        $this->user = DB_USER;
        $this->password = DB_PWD;
        $this->dsn = "$this->dbms:host=$this->host;dbname=$this->dbName";
        try {
            //            $conn = new PDO($this->dsn, $this->user, $this->password);
            //默认这个不是长连接，如果需要数据库长连接，需要最后加一个参数：array(PDO::ATTR_PERSISTENT => true) 变成这样：
            $this->dbh = new PDO($this->dsn, $this->user, $this->password, array(PDO::ATTR_PERSISTENT => true));
            $charset = "set names " . DB_CHARSET;
            $this->dbh->exec($charset);
        } catch (PDOException $e) {
            $this->outputError($e->getMessage());
        }
    }

    /**
     * 得到一个实例
     * @return MyPDO|null
     */
    public static function getInstance()
    {
        if (self::$_instance === null) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /**
     * 打印错误信息
     * @param $strErrMsg
     * @throws Exception
     */
    private function outputError($strErrMsg)
    {
        throw new Exception('MySQL Error: ' . $strErrMsg);
    }

    /**
     * 调试
     * @param $debuginfo
     */
    private function debug($debuginfo)
    {
        var_dump($debuginfo);
        exit();
    }

    /**
     * getPDOError 捕获PDO错误信息
     */
    private function getPDOError()
    {
        if ($this->dbh->errorCode() != '00000') {
            $arrayError = $this->dbh->errorInfo();
            $this->outputError($arrayError[2]);
        }
    }

    /**
     * 关闭数据库连接
     */
    public function destruct()
    {
        $this->dbh = null;
    }

    /**
     * 记录的插入操作
     * @param string $table
     * @param array $array
     * @return int $count
     */
    public function insert($table, $array)
    {
        $keys = join(",", array_keys($array));
        $values = "'" . join("','", array_values($array)) . "'";
        $sql = "insert {$table}({$keys}) values({$values})";
        $count = $this->dbh->exec($sql);
        return $count;
    }

    /**
     * 记录的更新操作
     * @param string $table
     * @param array $array
     * @param string $where
     * @return int $count
     */
    //update shop_admin set username='ocean' where id='1';
    public function update($table, $array, $where = null)
    {
        $str = null;
        foreach ($array as $key => $val) {
            if ($str == null) {
                $sep = "";
            } else {
                $sep = ",";
            }
            $str .= $sep . $key . "='" . $val . "'";
        }
        $sql = "update {$table} set {$str} " . ($where == null ? null : "where " . $where);
        $count = $this->dbh->exec($sql);
        return $count;
    }

    /**
     * 删除记录
     * @param string $table
     * @param string $where
     * @return int $count
     */
    public function delete($table, $where = null)
    {
        $where = ($where == null ? null : "where " . $where);
        $sql = "delete from {$table} {$where}";
        $count = $this->dbh->exec($sql);
        return $count;
    }

    /**
     * 得到一条记录
     * @param string $sql
     * @param int $result_type
     * @return mixed
     */
    public function fetchOne($sql, $result_type = PDO::FETCH_ASSOC)
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute();
        $result = $sth->fetch($result_type);
        return $result;
    }

    /**
     * 得到结果集中所有记录
     * @param string $sql
     * @param int $result_type
     * @return array
     */
    public function fetchAll($sql, $result_type = PDO::FETCH_ASSOC)
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute();
        $result = $sth->fetchAll($result_type);
        return $result;
    }

    /**
     * 得到结果集中的记录条数
     * @param string $sql
     * @param int $result_type
     * @return int count
     */
    public function getResultNum($sql, $result_type = PDO::FETCH_ASSOC)
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute();
        $result = $sth->fetchAll($result_type);
        return count($result);
    }

    /**
     * 返回最后插入行的ID或序列值
     * @return string
     */
    public function getInsertId()
    {
        return $this->dbh->lastInsertId("id");
    }

    /**
     * 截断表
     * @param $table
     * @return int
     */
    public function truncate($table)
    {
        $sql = "TRUNCATE TABLE {$table}";
        $res = $this->dbh->exec($sql);
        return $res;
    }
}