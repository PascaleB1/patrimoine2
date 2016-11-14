<?php

namespace Patrimoine2Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class Patrimoine2Type extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre1')
            ->add('article1')
            ->add('titre2')
            ->add('article2')
            ->add('image1')
            ->add('image2')
            ->add('file1', FileType::class, array('label' => 'insérer une image', 'required' => false))
            ->add('file2', FileType::class, array('label' => 'insérer une image', 'required' => false));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Patrimoine2Bundle\Entity\Patrimoine2'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'patrimoine2bundle_patrimoine2';
    }


}
