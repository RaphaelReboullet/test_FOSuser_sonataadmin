<?php
/**
 * Created by PhpStorm.
 * User: raphael
 * Date: 16/12/18
 * Time: 15:51
 */

namespace App\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;


class UserAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('username')
            ->add('name')
            ->add('firstname')
            ->add('birthdate')
            ->add('email')
            ->add('lastLogin')
            ->add('roles');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('username')
            ->add('name')
            ->add('firstname')
            ->add('birthdate')
            ->add('email')
            ->add('lastLogin')
            ->add('roles');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('id')
                   ->add('username')
                   ->add('name')
                   ->add('firstname')
                   ->add('birthdate')
                   ->add('email')
                   ->add('lastLogin')
                   ->add('roles')
                   ->add('_action', 'actions', array(
                    'actions' => array(
                        'show' => array(),
                        'edit' => array(),
                        )));
    }
}