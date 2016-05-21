<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Purchase;
use AppBundle\Form\PurchaseType;

/**
 * Purchase controller.
 *
 * @Route("/purchase")
 */
class PurchaseController extends Controller
{
    /**
     * Lists all Purchase entities.
     *
     * @Route("/", name="purchase_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $purchases = $em->getRepository('AppBundle:Purchase')->findAll();

        return $this->render('purchase/index.html.twig', array(
            'purchases' => $purchases,
        ));
    }

    /**
     * Creates a new Purchase entity.
     *
     * @Route("/new", name="purchase_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $purchase = new Purchase();
        $form = $this->createForm('AppBundle\Form\PurchaseType', $purchase);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($purchase);
            $em->flush();

            return $this->redirectToRoute('purchase_show', array('id' => $purchase->getId()));
        }

        return $this->render('purchase/new.html.twig', array(
            'purchase' => $purchase,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Purchase entity.
     *
     * @Route("/{id}", name="purchase_show")
     * @Method("GET")
     */
    public function showAction(Purchase $purchase)
    {
        $deleteForm = $this->createDeleteForm($purchase);

        return $this->render('purchase/show.html.twig', array(
            'purchase' => $purchase,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Purchase entity.
     *
     * @Route("/{id}/edit", name="purchase_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Purchase $purchase)
    {
        $deleteForm = $this->createDeleteForm($purchase);
        $editForm = $this->createForm('AppBundle\Form\PurchaseType', $purchase);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($purchase);
            $em->flush();

            return $this->redirectToRoute('purchase_edit', array('id' => $purchase->getId()));
        }

        return $this->render('purchase/edit.html.twig', array(
            'purchase' => $purchase,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Purchase entity.
     *
     * @Route("/{id}", name="purchase_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Purchase $purchase)
    {
        $form = $this->createDeleteForm($purchase);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($purchase);
            $em->flush();
        }

        return $this->redirectToRoute('purchase_index');
    }

    /**
     * Creates a form to delete a Purchase entity.
     *
     * @param Purchase $purchase The Purchase entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Purchase $purchase)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('purchase_delete', array('id' => $purchase->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
