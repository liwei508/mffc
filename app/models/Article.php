<?php
/**
* Article Model
*/
class Article extends Illuminate\Database\Eloquent\Model
{
  public $timestamps = false;
  /*public static function first()
  {
    $connection = @mysql_connect("localhost","root","");
    if (!$connection) {
      die('Could not connect: ' . mysql_error());
    }

    mysql_set_charset("UTF8", $connection);

    mysql_select_db("andaitongmysql", $connection);

    $result = mysql_query("SELECT `admin_name`,`admin_pwd` FROM hd_admin limit 0,1");

    if ($row = mysql_fetch_row($result)) {
      return $row;
    }

    mysql_close($connection);
  }*/
}