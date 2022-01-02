<?php

namespace App\Form;

use App\Entity\Produit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('WazTypeOffre')
            ->add('WazTypeBien')
            ->add('WazNnPiece')
            ->add('WazReference')
            ->add('WazTitre')
            ->add('WazDescription')
            ->add('WazLocalisation')
            ->add('WazSurfaceHabitable')
            ->add('WazSurfaceTotale')
            ->add('WazOption')
            ->add('WazPrix')
            ->add('WazDiagnostique')
            ->add('WazPhotos')
            // ->add('WazDateAjout')
            // ->add('WazDateModif')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
