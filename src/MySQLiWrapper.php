<?php
declare(strict_types=1);

namespace Debugteam\mySQLiWrapper;

/**
 * Used to substitude mysql database driver with mysqli
 * used for automigrate php5 to php7
 * do not use it in long term but instead recreate all queries
 *
 * Class mySQLiWrapper
 */
class MySQLiWrapper extends MySQLiBase
{

    /**
     * @param $link
     * @return int
     */
    public function dbAffectedRows($link) : int
    {
        return mysqli_affected_rows($link);
    }

    /**
     * @param $result
     * @param $offset
     * @return bool
     */
    public function dbDataSeek($result, $offset) : bool
    {
        return mysqli_data_seek($result, $offset);
    }

    /**
     * @param $result
     * @param $type
     * @return mixed
     */
    public function dbFetchArray($result, $type) : ?array
    {
        return mysqli_fetch_array($result, $type);
    }

    /**
     * @param $result
     * @return mixed
     */
    public function dbFetchAssoc($result) : ?array
    {
        return mysqli_fetch_assoc($result);
    }

    /**
     * @param $result
     * @return mixed
     */
    public function dbFetchLengths($result) // : array|bool
    {
        return mysqli_fetch_lengths($result);
    }

    /**
     * @param $result
     * @param $class
     * @param $params
     * @return mixed
     */
    public function dbFetchObject($result, $class, $params) : ?object
    {
        return mysqli_fetch_object($result, $class, $params);
    }

    /**
     * @param $result
     * @return mixed
     */
    public function dbFetchRow($result) : ?array
    {
        return mysqli_fetch_row($result);
    }

    /**
     * @param $result
     * @param $number
     * @return mixed
     */
    public function dbFieldSeek($result, $number) : bool
    {
        return mysqli_field_seek($result, $number);
    }

    /**
     * @param $result
     * @return mixed
     */
    public function dbFreeResult($result) : void
    {
        return mysqli_free_result($result);
    }

    /**
     * @param $link
     * @return mixed
     */
    public function dbInsertId($link) // : int|string
    {
        return mysqli_insert_id($link);
    }

    /**
     * @param $result
     * @return mixed
     */
    public function dbNumRows($result) : int
    {
        return mysqli_num_rows($result);
    }

    /**
     * @param $link
     * @param $query
     * @return mixed
     */
    public function dbQuery($link, $query)
    {
        return mysqli_query($link, $query);
    }

    /**
     * @param $link
     * @param $escapeString
     * @return string
     */
    public function dbRealEscapeStr($link, $escapeString) : string
    {
        return mysqli_real_escape_string($link, $escapeString);
    }

    /**
     * @param $link
     * @return mixed
     */
    public function dbThreadId($link) : int
    {
        return mysqli_thread_id($link);
    }

}