<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListTiketController extends Controller
{
    function tampilkan ($id, $kelas){
        return view('list_tiket', ['id' => $id, 'kelas' => $kelas]);
    }
}
