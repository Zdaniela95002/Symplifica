<?php

namespace Zdc\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Httpfoundation\Response;
use Symfony\Component\Validator\Constraints as Assert;
use Zdc\UserBundle\Entity\User;
use Zdc\UserBundle\Form\UserType;

class UserController extends Controller
{
    public function indexAction()
    {
           // return new Response('ola k asesdsdsd');
        	//getDoctrine es un metodo de acceso directo para obtener los servicios del doctrine, getManager el manejo de persistencia para traer los objetos desde y para la bd.

        $eme= $this->getDoctrine()->getManager();

        //Realizar la consulta a un determinado objeto.. se llama el bundel y luego la entidad el metodo find trae todo lo de la bd
        $users=$eme->getRepository('ZdcUserBundle:User')->findAll();

       //Apuntar al bundle donde se va a crear la carpeta User que va a contener el archivo .twig, valor que se envia a la platillan
       return $this->render('ZdcUserBundle:User:index.html.twig', array('users' =>$users));
    }

  
     public function addAction()
    {
        $user = new User();
        $form = $this->createCreateForm($user);
        
        return $this->render('ZdcUserBundle:User:add.html.twig', array('form' => $form->createView()));
    }

     private function createCreateForm(User $entity)
     {
        $form = $this->createForm(new UserType(), $entity, array(
                'action' => $this->generateUrl('zdc_user_create'),
                'method' => 'POST'
            ));
        
        return $form;
    }

	public function createAction(Request $request)
    {
        $user = new User();//necesitamos tener el form
        $form = $this->createCreateForm($user);
        //llamar la peticion para el formulario
        $form->handleRequest($request); 

         if($form->isValid())
        {
        	$em=$this->getDoctrine()->getManager();
        	$em->persist($user);
        	//Realizar y guardar cada uno de los campos
        	$em->flush();

        	return $this->redirect($this->generateUrl('zdc_user_index'));
        }
        return $this->render('ZdcUserBundle:User:add.html.twig', array('form' => $form->createView())); 
    }

        public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('ZdcUserBundle:User')->find($id);

        
        $form = $this->createEditForm($user);
        
        return $this->render('ZdcUserBundle:User:edit.html.twig', array('user' => $user, 'form' => $form->createView()));
        
    }

     private function createEditForm(User $entity)
    {
        $form = $this->createForm(new UserType(), $entity, array('action' => $this->generateUrl('zdc_user_update', array('id' => $entity->getId())), 'method' => 'PUT'));
        
        return $form;
    }

      public function updateAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();     
        $user = $em->getRepository('ZdcUserBundle:User')->find($id);
        $form = $this->createEditForm($user);
        $form->handleRequest($request);     
        if($form->isSubmitted() && $form->isValid())
        {
            $em->flush();
            return $this->redirect($this->generateUrl('zdc_user_index'));
        }
        return $this->render('ZdcUserBundle:User:edit.html.twig', array('user' => $user, 'form' => $form->createView()));
    }

        public function viewAction($id)
    {
        $repository = $this->getDoctrine()->getRepository('ZdcUserBundle:User');
        
        $user = $repository->find($id);
        
        
       $deleteForm = $this->createDeleteForm($user);
        
        return $this->render('ZdcUserBundle:User:view.html.twig', array('user' => $user,
        	'delete_form'=> $deleteForm->createView()));
    }
    
    private function createDeleteForm($user)
    {
    	return $this->createFormBuilder()
    	->setAction($this->generateUrl('zdc_user_delete', array('id' =>$user->getId())))
    	->setMethod('DELETE')
    	->getForm();
    }

      public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $user = $em->getRepository('ZdcUserBundle:User')->find($id);

        $form= $this->createDeleteForm($user);
       $form->handleRequest($request);          
        
         if($form->isSubmitted() && $form->isValid())
        {
        	$em->remove($user);
        	$em->flush();
        	return $this->redirect($this->generateUrl('zdc_user_index')); 
        }
    }
   

}
