<?php

/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 17-12-23
 * Time: 上午9:51
 */
class mysql
{
    var $dbms;  //数据库类型
    var $host;  //数据库主机名
    var $dbName;    //使用的数据库
    var $user;  //数据库连接用户名
    var $password;  //对应的密码
    var $dsn;

    public function __construct()
    {
        $this->dbms = DB_MS;
        $this->host = DB_HOST;
        $this->dbName = DB_DBNAME;
        $this->user = DB_USER;
        $this->password = DB_PWD;
        $this->dsn = "$this->dbms:host=$this->host;dbname=$this->dbName";
    }

    /**
     * 连接数据库，初始化
     * @return PDO
     */
    private function connect()
    {
        try {
            $conn = new PDO($this->dsn, $this->user, $this->password);
            $charset="set names ".DB_CHARSET;
            $conn->exec($charset);
            //默认这个不是长连接，如果需要数据库长连接，需要最后加一个参数：array(PDO::ATTR_PERSISTENT => true) 变成这样：
//            $conn = new PDO($this->dsn, $this->user, $this->password, array(PDO::ATTR_PERSISTENT => true));
            echo "连接成功<br/>";
            return $conn;
        } catch (PDOException $e) {
            die("Error!:" . $e->getMessage() . "<br/>");
        }
    }

    /**
     * 记录的插入操作
     * @param string $table
     * @param array $array
     * @return int $count
     */
    public function insert($table,$array){
        $keys=join(",",array_keys($array));
        $values="'".join("','",array_values($array))."'";
        $sql="insert {$table}({$keys}) values({$values})";
//        var_dump($sql);
        $count=$this->connect()->exec($sql);
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
    public function update($table,$array,$where=null){
        foreach ($array as $key=>$val){
            if ($str==null){
                $sep="";
            }else{
                $sep=",";
            }
            $str.=$sep.$key."='".$val."'";
        }
        $sql="`update` {$table} `set` {$str}".($where==null?null:"where ".$where);
        $count=$this->connect()->exec($sql);
        return $count;
    }

    /**
     * 删除记录
     * @param string $table
     * @param string $where
     * @return int $count
     */
    public function delete($table,$where=null){
        $where=($where==null?null:"where ".$where);
        $sql="`delete` `from` {$table} {$where}";
        $count=$this->connect()->exec($sql);
        return $count;
    }

    /**
     * 得到一条记录
     * @param string $sql
     * @param int $result_type
     * @return mixed
     */
    public function fetchOne($sql,$result_type=PDO::FETCH_ASSOC){
        $sth=$this->connect()->prepare($sql);
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
    public function fetchAll($sql,$result_type=PDO::FETCH_ASSOC){
        $sth=$this->connect()->prepare($sql);
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
    public function getResultNum($sql,$result_type=PDO::FETCH_ASSOC){
        $sth=$this->connect()->prepare($sql);
        $sth->execute();
        $result = $sth->fetchAll($result_type);
        return count($result);
    }
}
