<?php

namespace App\Controllers;


class DivicesController extends BaseController
{
    public function barang()
    {
        $data =[
            'title' => 'Daftar Device',
            'device' => [
                [
                    'device_name' => 'Arduino',
                    'merk' => 'Genuino',
                    'jumlah' => '19',
                    'status' => '1'
                ],
                [
                    'device_name' => 'Komputer',
                    'merk' => 'Samsung',
                    'jumlah' => '20',
                    'status' => '1'
                ],
                [
                    'device_name' => 'Projector',
                    'merk' => 'Canon',
                    'jumlah' => '2',
                    'status' => '0'
                ]
            ]
        ];
        return view('devices/barang', $data);
    }
}