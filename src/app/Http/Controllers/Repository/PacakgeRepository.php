<?php

namespace  Prope\MySharedPackage\app\Http\Controllers\Repository;

use App\Models\Product;
use Prope\MySharedPackage\app\Http\Controllers\Interface\PacakgeInterface;

class PacakgeRepository implements PacakgeInterface
{
    public function getall()
    {
        $response = Product::all();
        return $response;
    }
}
