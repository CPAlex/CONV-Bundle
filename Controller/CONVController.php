<?php

namespace CONV\CONVBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration as EXT;

class CONVController extends Controller
{
    /**
     * @EXT\Route("/index", name="conv_conv_index")
     * @EXT\Template
     *
     * @return Response
     */
    public function indexAction()
    {
        throw new \Exception('hello');
    }
}
