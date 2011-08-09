<?php
/* -----------------------------------------------------------------------------
 * File     : pekka.php
 * Project  : test
 * Date     : Aug 9, 2011 at 4:32:20 PM by Ofidz
 *                                                 * Offiedz - offiedz@gmail.com
 * -----------------------------------------------------------------------------
 */
?>
<link rel="stylesheet" type="text/css" href="form.css">
<link rel="stylesheet" type="text/css" href="jq/css/ui-lightness/jquery-ui-1.8.2.custom.css">
<link rel="stylesheet" type="text/css" href="jq/development-bundle/themes/ui-lightness/jquery.ui.datepicker.css">
<script type="text/javascript" src="jq/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="jq/js/jquery-ui-1.8.2.custom.min.js"></script>
<script type="text/javascript" src="jq/development-bundle/ui/jquery.effects.core.js"></script>
<script type="text/javascript" src="jq/development-bundle/ui/jquery.ui.datepicker.js"></script>
<script type="text/javascript" src="jq/development-bundle/ui/i18n/jquery.ui.datepicker-id.js"></script>
<script type="text/javascript" src="jq/js/jquery.validate.js"></script>
<script type="text/javascript">
    function pekka_lain(t){
        if(t.value == '7'){
            document.getElementById('sebab_lain').disabled = false;
        }else{
            document.getElementById('sebab_lain').disabled = true;
        }
    }
    function skatedate(DOB) {
        if (DOB.value != '') {
            now = new Date()
            dob = DOB.value.split('-');
            if (dob.length === 3) {
                born = new Date(dob[0], dob[1] * 1 - 1, dob[2]);
                age = Math.floor((now.getTime() - born.getTime()) / (365.25 * 24 * 60 * 60 * 1000));
                document.getElementById('umur').value = age;
            }}}
    $(document).ready(function(){
        $('#tgl_gabung').datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true,
            yearRange: '2000:'
        })
        $('#tgl_lahir').datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true,
            firstDay: 1,
            //minDate : new Date(1950, 1 - 1, 1),
            yearRange: '1950:2000'
        })
        $('#daftar').validate({
            rules: {
                no_induk : {
                    required : true,
                    minlength: 4
                },
                nama : {
                    required: true,
                    minlength: 4
                }
            },
            messages: {
                no_induk : 'Nomor Induk harus diisi dengan benar',
                nama : 'Nomor Induk harus diisi, minimal 4 huruf'
            }
        })
    })
</script>
<fieldset class="form">
    <legend style="text-align: center;">Formulir Pendaftaran PEKKA</legend>
    <form id="daftar" name="input" method="POST" action="proses_daftar.php">
        <p>
            <label class="judul" for="no_induk">No. Induk Anggota</label>
            <input type="text" name="no_induk">
        </p>
        <p>
            <label class="judul" for="nama">Nama</label><input type="text" name="nama">
        </p>
        <p>
            <label class="judul" for="tgl_lahir">Tgl. Lahir/Umur</label>
            <input onchange="skatedate(this)" maxlength="10" size="7" type="text" name="tgl_lahir" id="tgl_lahir"> / 
            <input maxlength="3" size="2" type="text" name="umur" id="umur">
        </p>
        <p>
            <label class="judul" for="alamat">Alamat</label><textarea name="alamat" cols="40" rows="5"></textarea>
        </p>
        <fieldset class="pendidikan">
            <legend>Pendidikan</legend>
            <p>
                <label class="radio"><input type="radio" name="kd_pendidikan" value="1" checked>Tidak Sekolah</label>
                <label class="radio"><input type="radio" name="kd_pendidikan" value="2">Tidak Tamat SD</label>
                <label class="radio"><input type="radio" name="kd_pendidikan" value="3">Tamat SD</label>
            </p>
            <p>
                <label class="radio"><input type="radio" name="kd_pendidikan" value="4">Tidak Tamat SMP</label>
                <label class="radio"><input type="radio" name="kd_pendidikan" value="5">Tamat SMP</label>
                <label class="radio"><input type="radio" name="kd_pendidikan" value="6">Tidak Tamat SMA</label>
            </p>
            <p>
                <label class="radio"><input type="radio" name="kd_pendidikan" value="7">Tamat SMA</label>
                <label class="radio"><input type="radio" name="kd_pendidikan" value="8">Tidak Tamat PT</label>
                <label class="radio"><input type="radio" name="kd_pendidikan" value="9">Tamat PT</label>
            </p>
        </fieldset>
        <fieldset class="pendidikan">
            <legend>Pekerjaan</legend>
            <p>
                <label class="radio"><input type="radio" name="kd_pekerjaan" value="1" checked>Tani</label>
                <label class="radio"><input type="radio" name="kd_pekerjaan" value="2">Dagang</label>
                <label class="radio"><input type="radio" name="kd_pekerjaan" value="3">Buruh</label>
            </p>
            <p>
                <label class="radio"><input type="radio" name="kd_pekerjaan" value="4">Pengrajin</label>
                <label class="radio"><input type="radio" name="kd_pekerjaan" value="5">Jasa</label>
                <label class="radio"><input type="radio" name="kd_pekerjaan" value="6">Pengelola Makanan</label>
            </p>
            <p>
                <label class="radio"><input type="radio" name="kd_pekerjaan" value="7">Karyawan</label>
                <label class="radio"><input type="radio" name="kd_pekerjaan" value="8">Tidak Bekerja</label>
            </p>
        </fieldset>
        </p>
        <fieldset class="pendidikan">
            <legend>Sebab Menjadi PEKKA</legend>
            <p>
                <label class="radio"><input onchange="pekka_lain(this)" type="radio" name="kd_sebab" value="1" checked>Suami Meninggal</label>
                <label class="radio"><input onchange="pekka_lain(this)" type="radio" name="kd_sebab" value="2">Cerai</label>
                <label class="radio"><input onchange="pekka_lain(this)" type="radio" name="kd_sebab" value="3">Suami Merantau</label>
            </p>
            <p>
                <label class="radio"><input onchange="pekka_lain(this)" type="radio" name="kd_sebab" value="4">Suami Sakit</label>
                <label class="radio"><input onchange="pekka_lain(this)" type="radio" name="kd_sebab" value="5">Lajang</label>
                <label class="radio"><input onchange="pekka_lain(this)" type="radio" name="kd_sebab" value="6">Ditinggal Tanpa Kabar</label>
            </p>
            <p>
                <label class="radio"><input onchange="pekka_lain(this)" type="radio" name="kd_sebab" value="7">Lainnya</label>
                <label class="radio"><input id="sebab_lain" type="text" name="sebab_lain" disabled></label>
            </p>
        </fieldset>
        <fieldset class="pendidikan">
            <legend>Jumlah Tanggungan</legend>
            <p>
                <label class="radio"><input type="radio" name="jml_tanggungan" value="0" checked>Tidak ada</label>
                <label class="radio"><input type="radio" name="jml_tanggungan" value="1">1 orang</label>
                <label class="radio"><input type="radio" name="jml_tanggungan" value="2">2 orang</label>
            </p>
            <p>
                <label class="radio"><input type="radio" name="jml_tanggungan" value="3">3 orang</label>
                <label class="radio"><input type="radio" name="jml_tanggungan" value="4">4 orang</label>
                <label class="radio"><input type="radio" name="jml_tanggungan" value="5">>= 5 orang</label>
            </p>
        </fieldset>
        <p>
            <label class="judul" for="tgl_gabung">Tgl. Gabung PEKKA</label>
            <input type="text" size="7" name="tgl_gabung" id="tgl_gabung">
        </p>
        <p>
            <label class="judul" for="nm_kelompok">Nama Kelompok PEKKA</label><input type="text" name="nm_kelompok">
        </p>
        <center>
            <input type="submit" value="Daftar">
            <input type="reset" value="Reset">
        </center>
    </form>
</fieldset>