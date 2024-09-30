<?php

namespace Prope\MySharedPackage\Repository;

use Prope\MySharedPackage\Interfaces\RepositoryInterface;

class Repository implements RepositoryInterface
{
    protected $model;

    public function __construct($model)
    {
        $this->model = $model; // Inject the model
    }

    public function getData($id)
    {
       return "connected";
        // return $this->model::find($id);
    }
}
