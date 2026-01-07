<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    // Jika baris di bawah ini hilang, controller lain mungkin error 
    // saat menjalankan $this->validate() atau $this->authorize()
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}