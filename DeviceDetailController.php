<?php

namespace App\Controllers;


class DiviceDetailController extends BaseController
{
    public function detail()
    {
        $data = [
            'title' => 'Device Detail'
        ];

        return view('devicedetail/detail', $data);
    }

    
}