<?php

/* -----------------------------------------------------------------------------
 * File     : peserta.php
 * Project  : pekka
 * Date     : Aug 9, 2011 at 9:59:01 PM by Ofidz
 *                                                 * Offiedz - offiedz@gmail.com
 * -----------------------------------------------------------------------------
 */
require_once 'db.php';
class peserta extends db {

    var $no_induk;
    var $nama;
    var $tgl_lahir;
    var $umur;
    var $alamat;
    var $kd_pendidikan;
    var $kd_pekerjaan;
    var $kd_sebab;
    var $sebab_lain;
    var $jml_tanggungan;
    var $tgl_gabung;
    var $nm_kelompok;

    function daftar_peserta() {
        $sql  = "INSERT INTO peserta ";
        $sql .= "VALUES('$this->no_induk','$this->nama','$this->tgl_lahir', ";
        $sql .= "'$this->alamat','$this->umur','$this->kd_pendidikan','$this->kd_pekerjaan', ";
        $sql .= "'$this->kd_sebab','$this->sebab_lain','$this->jml_tanggungan','$this->tgl_gabung','$this->nm_kelompok') ";
        $this->conn->exec($sql);
    }

}

?>
