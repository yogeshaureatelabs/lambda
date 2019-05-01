<?php

namespace Controller;

use Core\Template;

/**
 * Class AbstractController
 * @package Controller
 */
class AbstractController
{
    /**
     * @var Template
     */
    private $template;

    /**
     * @var
     */
    private $request;

    /**
     * AbstractController constructor.
     */
    public function __construct()
    {
        $this->template = new Template();
    }

    /**
     * @param $controller
     * @param array $variables
     * @return mixed
     * @throws \Exception
     */
    protected function getView($controller, array $variables = [])
    {
        return $this->template->getView($controller, $variables);
    }

    /**
     * @return mixed
     */
    protected function getRequest()
    {
        return $this->request;
    }

    /**
     * @param $request
     */
    public function setRequest($request)
    {
        $this->request = $request;
    }
}
