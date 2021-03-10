<?php

namespace App\Form;

use App\Entity\Fiche;
use App\Repository\MedicamentRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class FicheType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options )
    {
        
        $builder
            ->add('qte')
            ->add('prix_vente')

            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Fiche::class,
        ]);
    }
}
