<?php

namespace Patrimoine2Bundle\Controller;

use Patrimoine2Bundle\Entity\Patrimoine2;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Patrimoine2 controller.
 *
 */
class Patrimoine2Controller extends Controller
{
    /**
     * Lists all patrimoine2 entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $patrimoine2s = $em->getRepository('Patrimoine2Bundle:Patrimoine2')->findAll();

        return $this->render('Patrimoine2Bundle:patrimoine2:index.html.twig', array(
            'patrimoine2s' => $patrimoine2s,
        ));
    }

    /**
     * Creates a new patrimoine2 entity.
     *
     */
    public function newAction(Request $request)
    {
        $patrimoine2 = new Patrimoine2();
        $form = $this->createForm('Patrimoine2Bundle\Form\Patrimoine2Type', $patrimoine2);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($patrimoine2);
            $em->flush($patrimoine2);

            return $this->redirectToRoute('patrimoine2_show', array('id' => $patrimoine2->getId()));
        }

        return $this->render('Patrimoine2Bundle:patrimoine2:new.html.twig', array(
            'patrimoine2' => $patrimoine2,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a patrimoine2 entity.
     *
     */
    public function showAction(Patrimoine2 $patrimoine2)
    {
        $deleteForm = $this->createDeleteForm($patrimoine2);

        return $this->render('Patrimoine2Bundle:patrimoine2:show.html.twig', array(
            'patrimoine2' => $patrimoine2,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing patrimoine2 entity.
     *
     */
    public function editAction(Request $request, Patrimoine2 $patrimoine2)
    {
        $deleteForm = $this->createDeleteForm($patrimoine2);
        $editForm = $this->createForm('Patrimoine2Bundle\Form\Patrimoine2Type', $patrimoine2);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('patrimoine2_edit', array('id' => $patrimoine2->getId()));
        }

        return $this->render('Patrimoine2Bundle:patrimoine2:edit.html.twig', array(
            'patrimoine2' => $patrimoine2,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a patrimoine2 entity.
     *
     */
    public function deleteAction(Request $request, Patrimoine2 $patrimoine2)
    {
        $form = $this->createDeleteForm($patrimoine2);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($patrimoine2);
            $em->flush($patrimoine2);
        }

        return $this->redirectToRoute('patrimoine2_index');
    }

    /**
     * Creates a form to delete a patrimoine2 entity.
     *
     * @param Patrimoine2 $patrimoine2 The patrimoine2 entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Patrimoine2 $patrimoine2)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('patrimoine2_delete', array('id' => $patrimoine2->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
