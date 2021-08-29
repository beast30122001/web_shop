<?php

namespace App\Form;

use App\Entity\Publisher;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PublisherType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('CompanyName')
            ->add('Country')
            // ->add('Quantity', EntityType::class, [
            //     'class' => Phone::class
            //     'Cho'
            // ])
            ->add('Image', FileType::class,
            [
                'label' => 'Publisher Image',
                'data_class' => null,
                'required' => is_null($builder->getData()->getImage())
            ])
            ->add('Founded')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Publisher::class,
        ]);
    }
}
