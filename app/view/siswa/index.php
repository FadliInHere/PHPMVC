
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
        foreach($data['siswa'] as $sis)
            ?>

            <tr>
            <td>1</td>
            <td><?= $sis['nama']?></td>
        
            </tr>

        </tbody>
    </table>
</body>
</html>