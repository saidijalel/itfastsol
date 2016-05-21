<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;


class PurchaseType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('title', TextType::class, array(
                    'label' => 'Title',
                    'attr'  => array('class' => 'form-control')
                )
            )

            ->add('description', TextareaType::class, array(
                    'label' => 'Description',
                    'attr'  => array('class' => 'form-control')
                )
            )

            ->add('start_date', DateType::class, array(
                    'label' => 'Start date',
                    'attr'  => array('class' => 'form-control')
                )
            )

            ->add('end_date', DateType::class, array(
                    'label' => 'End date',
                    'attr'  => array('class' => 'form-control')
                )
            )


          //  ->add('title')
          //  ->add('description')
          //  ->add('start_date', 'date')
          //  ->add('end_date', 'date')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Purchase'
        ));
    }
}
