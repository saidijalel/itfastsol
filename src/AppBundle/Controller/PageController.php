<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class PageController extends Controller
{
    /**
     * @Route("/", name="page_home")
     */
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();

        $posts = $em->getRepository('AppBundle:Post')->findAll();

        return $this->render('page/index.html.twig', array(
            'posts' => $posts,
        ));
    }

    /**
     * @Route("/page/about", name="page_about")
     */
    public function aboutAction()
    {
        return $this->render('page/about.html.twig');
    }
    /**
     * @Route("/page/contact", name="page_contact")
     */
    public function contactAction()
    {
        return $this->render('page/contact.html.twig');
    }


}

