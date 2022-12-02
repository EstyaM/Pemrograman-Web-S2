<?= $this->extend('layout/template'); ?>

    <?= $this->section('content'); ?>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Selamat Datang!</h1>
                    <p>Aplikasi ini dapat dimanfaatkan untuk memonitoring IoT di Kantor ABA</p>
                    <p>Aplikasi di desain dengan pola perangkat lunak MVC dan framework Codeigniter</p>
                    <p>Mampu menampilkan beragam device IoT disertai detail setiap device 
                       yang tersedia di Kantor ABA</p>
                </div>
            </div>
        </div>
        <?= $this->endSection(); ?>