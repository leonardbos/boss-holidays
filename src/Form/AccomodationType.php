<?php

namespace App\Form;

use App\Entity\Accomodation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AccomodationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Title')
            ->add('Description')
            ->add('Location')
            ->add('Type')
            ->add('PricePerNight')
            ->add('NumberOfRooms')
            ->add('Capacity')
            ->add('Rating')
            ->add('ContactInformation')
            ->add('CheckInTime')
            ->add('CheckOutTime')
            ->add('Policies')
            ->add('Latitude')
            ->add('Longitude')
            ->add('CreatedAt')
            ->add('UpdatedAt')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Accomodation::class,
        ]);
    }
}
