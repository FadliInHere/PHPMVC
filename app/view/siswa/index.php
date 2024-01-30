
<body>
    <h1>Daftar Siswa</h1>

    <table>
        <thead>
            <tr>
            <td>No</td>
            <td>Nama</td>
        </tr>
        </thead>
        
        <tbody>


        <?php
        $no = 1;
        foreach($data['siswa'] as $sis)
            ?>

            <tr>
            <td><?= $no++ ?></td>
            <td><?= $sis['nama']?></td>
        
            </tr>

        </tbody>
    </table>
</body>
</html>