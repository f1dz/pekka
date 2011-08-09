<?php

/* -----------------------------------------------------------------------------
 * File     : proses_daftar.php
 * Project  : pekka
 * Date     : Aug 9, 2011 at 10:09:36 PM by Ofidz
 *                                                 * Offiedz - offiedz@gmail.com
 * -----------------------------------------------------------------------------
 */
require_once 'class/peserta.php';
$peserta = new peserta();
$peserta->no_induk = $_POST[no_induk];
$peserta->nama = $_POST[nama];
$peserta->tgl_lahir = $_POST[tgl_lahir];
$peserta->umur = $_POST[umur];
$peserta->alamat = $_POST[alamat];
$peserta->kd_pendidikan = $_POST[kd_pendidikan];
$peserta->kd_pekerjaan = $_POST[kd_pekerjaan];
$peserta->kd_sebab = $_POST[kd_sebab];
$peserta->sebab_lain = $_POST[sebab_lain];
$peserta->jml_tanggungan = $_POST[jml_tanggungan];
$peserta->tgl_gabung = $_POST[tgl_gabung];
$peserta->nm_kelompok = $_POST[nm_kelompok];

$peserta->daftar_peserta();
header('location:pekka.php');

?>
