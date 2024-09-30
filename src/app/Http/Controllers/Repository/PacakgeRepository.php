<?php

namespace  Prope\MySharedPackage\app\Http\Controllers\Repository;

use App\Models\category;
use Prope\MySharedPackage\app\Http\Controllers\Interface\PacakgeInterface;

class PacakgeRepository implements PacakgeInterface
{
    public function get()
    {
        $result = category::all();
        return $result;
    }
}
