<?php

namespace Zdc\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username')
            ->add('firtsName')
            ->add('lastName')
            ->add('email', 'email')
            ->add('password', 'password')
            ->add('role', 'choice', array('choices' => array('Seleccione un rol','ROLE_ADMIN' => 'Administrador', 'ROLE_USER' => 'Usuario')))
            ->add('isActive', 'checkbox')
            ->add('save', 'submit', array('label' => 'Save user'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Zdc\UserBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'user';
    }
}