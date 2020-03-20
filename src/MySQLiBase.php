<?php
declare(strict_types=1);

namespace Debugteam\mySQLiWrapper;

/**
 * Class mysqliBase
 * @author Jochen Schultz <jschultz@php.net>
 */
class MySQLiBase
{
    /**
     * @var string
     */
    private $host = '';

    /**
     * @var string
     */
    private $user = '';

    /**
     * @var string
     */
    private $pass = '';

    /**
     * @var string
     */
    private $database = '';

    /**
     * @var mySQLiWrapper
     */
    private static $instance;

    /**
     * @var \mysqli
     */
    private $connection;

    /**
     * leave empty to secure getInstance
     */
    private function __clone()
    {

    }

    /**
     * @return mySQLiWrapper
     */
    public static function getInstance() : MySQLiWrapper
    {
        if(!self::$instance)
        {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * @return \mysqli
     */
    public function getConnection() : \mysqli
    {
        return $this->connection;
    }

    /**
     * mySQLiWrapper constructor.
     */
    private function __construct()
    {
        $this->connection = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        if(mysqli_connect_error())
        {
            trigger_error(mysqli_connect_error(), E_USER_ERROR);
        }
    }

    /**
     * @param $link
     * @return bool
     */
    public function dbClose($link) : bool
    {
        return mysqli_close($link);
    }

    /**
     * @param $link
     * @return mixed
     */
    public function dbErrno($link)
    {
        return mysqli_errno($link);
    }

    /**
     * @param $link
     * @return mixed
     */
    public function dbError($link)
    {
        return mysqli_error($link);
    }

    /**
     * @return mixed
     */
    public function dbGetClientInfo()
    {
        return mysqli_get_client_info();
    }

    /**
     * @param $link
     * @return mixed
     */
    public function dbGetHostInfo($link)
    {
        return mysqli_get_host_info($link);
    }

    /**
     * @param $link
     * @return mixed
     */
    public function dbGetProtoInfo($link)
    {
        return mysqli_get_proto_info($link);
    }

    /**
     * @param $link
     * @return mixed
     */
    public function dbGetServerInfo($link)
    {
        return mysqli_get_server_info($link);
    }

    /**
     * @param $link
     * @return mixed
     */
    public function dbInfo($link)
    {
        return mysqli_info($link);
    }

    /**
     * @param $link
     * @param $database
     * @return mixed
     */
    public function dbSelectDb($link, $database)
    {
        return mysqli_select_db($link, $database);
    }

    /**
     * @param $link
     * @param $charset
     * @return mixed
     */
    public function dbSetCharset($link, $charset)
    {
        return mysqli_set_charset($link, $charset);
    }

    /**
     * @param $link
     * @return mixed
     */
    public function dbPing($link)
    {
        return mysqli_ping($link);
    }

    /**
     * @param $link
     * @return array
     */
    public function dbStat($link)
    {
        return mysqli_stat($link);
    }

}