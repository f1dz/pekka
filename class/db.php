<?php

/* -----------------------------------------------------------------------------
 * File     : db.php
 * Project  : pekka
 * Date     : Aug 9, 2011 at 9:58:07 PM by Ofidz
 *                                                 * Offiedz - offiedz@gmail.com
 * -----------------------------------------------------------------------------
 */

class db {

    private $host = 'localhost';
    private $db = 'pekka';
    private $user = 'root';
    private $pass = '';
    private $attrib = array('PDO_ATTR_PERSISTENT' => true);
    var $conn = null;

    public function __construct() {
        $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->pass, $this->attrib);
    }

}
?>
