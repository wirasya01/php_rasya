<!DOCTYPE html>
<html>
<head>
<title>form biodata diri</title>
</head>
<body>
    <center> 
        <h2>form biodata diri</h2>
        <!--form-->
        <form method="POST" action="">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tgl_lahir"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><input type="radio" name="jk" value="Laki-Laki">Laki_laki
                    <input type="radio" name="jk" value="Perempuan">Perempuan</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="alamat" id="" cols="30" rows="5"></textarea></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td><select name="agama">
                        <option value="islam">islam</option>
                        <option value="kristen">kristen</option>
                        <option value="katolik">katolik</option>
                        <option value="budha">budha</option>
                        <option value="konghucu">konghucu</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Pendidikan Terakhir</td>
                    <td>:</td>
                    <td><select name="pendidikan_terakhir" id="">
                        <option value="tk">TK</option>
                        <option value="sd">SD</option>
                        <option value="smp">SMP</option>
                        <option value="sma">SMA</option>
                        <option value="s1">S1</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td><input type="text" name="status"></td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td>:</td>
                    <td><input type="text" name="hobi"></td>
                </tr>
                <tr>
                    <td>Cita-Cita</td>
                    <td>:</td>
                    <td><input type="text" name="cita_cita"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="simpan" value='KIRIM'></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php 
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tgl_lahir'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $pendidikan_terakhir = $_POST['pendidikan_terakhir'];
    $status = $_POST['status'];
    $hobi = $_POST['hobi'];
    $cita_cita = $_POST['cita_cita'];
    echo "<p><center>==================================<center>";   
    echo "========== BIODATA DIRI ========== <br>";
    echo "================================== <br>";
    echo "-Nama   = $nama <br>";
    echo "-Tanggal_Lahir   = $tanggal_lahir <br>";
    echo "-Jenis Kelamin   = $jk <br>";
    echo "-Alamat   = $alamat <br>";
    echo "-Agama   = $agama <br>";
    echo "-Pendidikan Terakkir   = $pendidikan_terakhir <br>";
    echo "-Status   = $status <br>";
    echo "-Hobi   = $hobi <br>";
    echo "-Cita-Cita   = $cita_cita <br>";
    
}
?>