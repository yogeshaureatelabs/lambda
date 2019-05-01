<?php

namespace Model;

/**
 * Class AbstractModel
 * @package Model
 */
abstract class AbstractModel
{
    /**
     * @return mixed
     */
    abstract public function getData();

    /**
     * @return mixed
     */
    abstract public function staticData();
}
