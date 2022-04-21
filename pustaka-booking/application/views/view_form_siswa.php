<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Siswa</title>
</head>
<body>
    <center>
        <form action="<?= base_url('Formsiswa/cetak'); ?>"method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Siswa
                    </th>
                </tr>
                <tr>
                    <td clospan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>nama siswa</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" id="nama">
                        <?= form_error('nama', '<small style="color:red">', '</small>'); ?>
                    </td>
                </tr>
                <tr>
                    <th>NIS</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="NIS" id="NIS">
                        <?= form_error('NIS', '<small style="color:red">', '</small>'); ?>
                    </td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="kelas" id="kelas">
                        <?= form_error('kelas', '<small style="color:red">', '</small>'); ?>
                    </td>
                </tr>
                <tr>
                    <th>tanggal lahir</th>
                    <td>:</td>
                    <td>
                        <input type="date" name="tanggal">
                        <?= form_error('tanggal', '<small style="color:red">', '</small>'); ?>
                    </td>
                </tr>
                <tr>
                    <th>tempat lahir </th>
                    <td>:</td>
                    <td>
                        <input type="text" name="tempat" id="tempat">
                        <?= form_error('tempat', '<small style="color:red">', '</small>'); ?>
                    </td>
                </tr>
                <tr>
                    <th>alamat</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="alamat" id="alamat">
                        <?= form_error('alamat', '<small style="color:red">', '</small>'); ?>
                    </td>
                </tr>
                <tr>
                    <th>jenis kelamin</th>
                    <td>:</td>
                    <td>
                        <label><input type="radio" name="jenis_kelamin" value="laki-laki" /> Laki-laki</label>
                        <label><input type="radio" name="jenis_kelamin" value="Perempuan" /> Perempuan</label>
                        <?= form_error('jenis_kelamin', '<small style="color:red">', '</small>'); ?>
                    </td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td>
                        <select name="agama" id="agama">
                        <option value="">Pilih Agama</option>
                        <option value="islam">islam</option>
                        <option value="kristen">kristen</option>
                        <option value="katolik">katolik</option>
                        <option value="budhha">budhha</option>
                        <option value="hindu">hindu</option>
                        <option value="protestan">protestan</option>
                        <option value="khonghucu">khonghucu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>