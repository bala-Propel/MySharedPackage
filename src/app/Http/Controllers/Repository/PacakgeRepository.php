<?php

namespace  Prope\MySharedPackage\app\Http\Controllers\Repository;

use Prope\MySharedPackage\app\Http\Controllers\Interface\PacakgeInterface;
use Prope\MySharedPackage\App\Models\Product;

class PacakgeRepository implements PacakgeInterface
{
    public function getall()
    {
        $response = Product::all();
        return $response;
    }
}
