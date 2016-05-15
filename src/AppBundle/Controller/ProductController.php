<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Product;
use AppBundle\Entity\Category;
use AppBundle\Form\PostType;

/**
 * Post controller.
 *
 * @Route("/product")
 */
class ProductController extends Controller
{
    /**
     * Lists all Products entities.
     *
     * @Route("/", name="product_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $dql   = "SELECT p FROM AppBundle:Product p";
        $query = $em->createQuery($dql);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/, 2/*limit per page*/);

        // parameters to template
        return $this->render('product/index.html.twig', array('pagination' => $pagination));

    }

    /**
     * Search Products.
     *
     * @Route("/search", name="product_search")
     * @Method("POST")
     */
    public function searchAction(Request $request) {
        if ($request->getMethod() == 'POST') {
            $title = $request->get('search_term');
            $em = $this->getDoctrine()->getManager();
            $products = $em->getRepository('AppBundle:Product')->findByTitle($title);

        }
        return $this->render('product/search.html.twig'
            , array('products' => $products));
    }





























}

