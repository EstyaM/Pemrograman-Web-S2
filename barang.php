<?= $this->extend('layout/template'); ?>

    <?= $this->section('content'); ?>

        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="mt-2">Daftar Device</h1>
                    <table class="table">
                        <thead>
                            
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Device Name</th>
                                <th scope="col">Merk</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($device as $d) : ?>
                                <tr>
                                    <th scope="row">1</th>
                                    <td><img src="https://4.bp.blogspot.com/-aGNqHBzk5LE/WSMQ4A2BdYI/AAAAAAAAAzc/iWZlL1J_U40XSKGszU6Yc_L1Kirde1ZRgCLcB/s1600/arduino-real.png" width=100 px></td>
                                    <td><?= $d['device_name']; ?></td>
                                    <td><?= $d['merk']; ?></td>
                                    <td><?= $d['jumlah']; ?></td>
                                    <td><?= $d['status']; ?></td>
                                    <td><button type="button" class="btn btn-success">Details</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td><img src="http://3.bp.blogspot.com/-Z6zQvJUkJyM/VVgxQ5fpbyI/AAAAAAAAKnk/zJ1zWCcejT8/s1600/gambar%2Bkomputer%2B(21).jpg" width= 100 px></td>
                                    <td><?= $d['device_name']; ?></td>
                                    <td><?= $d['merk']; ?></td>
                                    <td><?= $d['jumlah']; ?></td>
                                    <td><?= $d['status']; ?></td>
                                    <td><button type="button" class="btn btn-success">Details</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td><img src="https://www.portlandprojectorrental.com/wp-content/uploads/2014/01/cpx10000-4.jpg" width= 100 px></td>
                                    <td><?= $d['device_name']; ?></td>
                                    <td><?= $d['merk']; ?></td>
                                    <td><?= $d['jumlah']; ?></td>
                                    <td><?= $d['status']; ?></td>
                                    <td><button type="button" class="btn btn-success">Details</td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <?= $this->endSection(); ?>