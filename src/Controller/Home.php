<?php

namespace Controller;

/**
 * Class Home
 * @package Controller
 */
class Home extends AbstractController
{
    /**
     * Home constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return mixed
     * @throws \Exception
     *
     *  return parent::getView(
     *      __METHOD__,
     *      [
     *          'title' => APP_NAME.' - Home',
     *          'header' => 'League list',
     *          'league_list' => 'A B C',
     *      ]
     *  );
     *
     */
    public function indexMethod()
    {
        /**
         * Retrieve GET, POST data
         *
         * $this->>getRequest()->getGet()
         * $this->>getRequest()->getPost()
         * $this->>getRequest()->getFile()
         * $this->>getRequest()->getServer()
         *
         */

        return json_encode([
            'error' => '404',
            'message' => 'Invalid Action'
        ]);
    }
}
