<?php

namespace D2bg\BlogBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use D2bg\BlogBundle\Entity\Identite;
use D2bg\BlogBundle\Form\IdentiteType;

/**
 * Identite controller.
 *
 * @Route("/identite")
 */
class IdentiteController extends Controller
{

    /**
     * Lists all Identite entities.
     *
     * @Route("/", name="identite")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('D2bgBlogBundle:Identite')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Identite entity.
     *
     * @Route("/", name="identite_create")
     * @Method("POST")
     * @Template("D2bgBlogBundle:Identite:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Identite();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('identite_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Identite entity.
     *
     * @param Identite $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Identite $entity)
    {
        $form = $this->createForm(new IdentiteType(), $entity, array(
            'action' => $this->generateUrl('identite_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Identite entity.
     *
     * @Route("/new", name="identite_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Identite();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Identite entity.
     *
     * @Route("/{id}", name="identite_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('D2bgBlogBundle:Identite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Identite entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Identite entity.
     *
     * @Route("/{id}/edit", name="identite_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('D2bgBlogBundle:Identite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Identite entity.');
        }
      
        $entity->setAdresses($em->getRepository ( 'D2bgBlogBundle:Adresse' )->findByIdentite ( $entity->getId () ));
        
        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Identite entity.
    *
    * @param Identite $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Identite $entity)
    {
    	
    	$form = $this->createForm(new IdentiteType(), $entity, array(
            'action' => $this->generateUrl('identite_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Identite entity.
     *
     * @Route("/{id}", name="identite_update")
     * @Method("PUT")
     * @Template("D2bgBlogBundle:Identite:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('D2bgBlogBundle:Identite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Identite entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('identite_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Identite entity.
     *
     * @Route("/{id}", name="identite_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('D2bgBlogBundle:Identite')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Identite entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('identite'));
    }

    /**
     * Creates a form to delete a Identite entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('identite_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
