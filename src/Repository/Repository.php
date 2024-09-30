<?php

namespace Prope\MySharedPackage\Repository;

use Prope\MySharedPackage\Interfaces\RepositoryInterface;

class Repository implements RepositoryInterface
{
    public function getData($id)
    {
       return "connected";
        // return $this->model::find($id);
    }
}
