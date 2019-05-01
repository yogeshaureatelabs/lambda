<?php

namespace Controller;

use Model\StaticBlock;

/**
 * Class League
 * @package Controller
 */
class Cmsblock extends AbstractController
{
    /**
     * League constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return mixed
     * @throws \Exception
     */
    public function indexMethod()
    {
        $model = new StaticBlock();
        return $model->getData();
    }
}
