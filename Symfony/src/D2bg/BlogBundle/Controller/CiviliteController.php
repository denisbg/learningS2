<?php

namespace D2bg\BlogBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use D2bg\BlogBundle\Entity\Civilite;
use D2bg\BlogBundle\Form\CiviliteType;

/**
 * Civilite controller.
 *
 * @Route("/civilite")
 */
class CiviliteController extends Controller
{

    /**
     * Lists all Civilite entities.
     *
     * @Route("/", name="civilite")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('D2bgBlogBundle:Civilite')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Civilite entity.
     *
     * @Route("/", name="civilite_create")
     * @Method("POST")
     * @Template("D2bgBlogBundle:Civilite:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Civilite();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('civilite_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Civilite entity.
     *
     * @param Civilite $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Civilite $entity)
    {
        $form = $this->createForm(new CiviliteType(), $entity, array(
            'action' => $this->generateUrl('civilite_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Civilite entity.
     *
     * @Route("/new", name="civilite_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Civilite();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Civilite entity.
     *
     * @Route("/{id}", name="civilite_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('D2bgBlogBundle:Civilite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Civilite entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Civilite entity.
     *
     * @Route("/{id}/edit", name="civilite_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('D2bgBlogBundle:Civilite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Civilite entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Civilite entity.
    *
    * @param Civilite $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Civilite $entity)
    {
        $form = $this->createForm(new CiviliteType(), $entity, array(
            'action' => $this->generateUrl('civilite_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Civilite entity.
     *
     * @Route("/{id}", name="civilite_update")
     * @Method("PUT")
     * @Template("D2bgBlogBundle:Civilite:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('D2bgBlogBundle:Civilite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Civilite entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('civilite_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Civilite entity.
     *
     * @Route("/{id}", name="civilite_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('D2bgBlogBundle:Civilite')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Civilite entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('civilite'));
    }

    /**
     * Creates a form to delete a Civilite entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('civilite_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
