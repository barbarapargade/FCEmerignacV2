<?php

namespace App\Form;

use App\Entity\Adversaires;
use App\Entity\Equipe;
use App\Entity\MatchAVenir;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MatchAVenirType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('matchDate',DateTimeType::class)
            ->add('equipe', EntityType::class,[
                'class'=>Equipe::class,
            ])
            ->add('adversaire',EntityType::class,[
                'class'=> Adversaires::class,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => MatchAVenir::class,
        ]);
    }
}
