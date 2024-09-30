<?php

namespace Prope\MySharedPackage\Repository;

use Prope\MySharedPackage\Interfaces\RepositoryInterface;

class Repository implements RepositoryInterface
{
    protected $model;

    public function __construct($model)
    {
        $this->model = $model; 
    }

    public function getData($id)
    {
        return "yes connected";
    }
}
