<link rel="stylesheet" href="admin.css">

<h5>Halaman Buku Tamu</h5>
<hr>
<table>
    <tr class="Table">
        <td><b>No</b></td>
        <td><b>Nama</b></td>
        <td><b>Email</b></td>
        <td><b>Asal</b></td>
        <td><b>Pekerjaan</b></td>
        <td><b>Keperluan</b></td>
        <td><b>Hapus</b></td>
        <td><b>Edit</b></td>
    </tr>

    <?php
        include 'koneksi.php';
        $no = 1;
        $sql = "SELECT * FROM tamu ORDER BY id_tamu DESC";
        $query = mysqli_query($koneksi,$sql);
        foreach($query as $data){ ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $data['username'] ?></td>
                <td><?= $data['email'] ?></td>
                <td><?= $data['asal'] ?></td>
                <td><?= $data['pekerjaan'] ?></td>
                <td><?= $data['keperluan'] ?></td>
                <td>
                    <a href="edit&id_tamu=<?= $data['id_tamu'] ?>">EDIT</a>
                </td>
                <td>
                    <a onclick="return confirm('Hapus Tamu?')" href="hapus&id_tamu=<?= $data['id_tamu'] ?>">HAPUS</a>
                </td>
            </tr>
            <?php
        } 
    ?>
</table>