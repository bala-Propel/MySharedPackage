<?php

namespace  Prope\MySharedPackage\app\Http\Controllers\Repository;

use Prope\MySharedPackage\app\Http\Controllers\Interface\PacakgeInterface;

class PacakgeRepository implements PacakgeInterface
{
    public function get()
    {
        return "connected";
    }
}
