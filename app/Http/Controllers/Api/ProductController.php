<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use Illuminate\Http\Request;
use Orion\Concerns\DisableAuthorization;

class ProductController extends Controller
{
    use DisableAuthorization;

    protected $model = Barang::class;
}
