<?php

namespace App\Controller;

use App\Entity\Accomodation;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class AccomodationController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Accomodation::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            yield TextField::new('title'),
            yield TextField::new('description'),
            yield TextField::new('location'),
            yield TextField::new('type'),
            yield TextField::new('pricepernight'),
            yield TextField::new('numberofrooms'),
            yield TextField::new('capacity'),
            yield TextField::new('rating'),

            yield TextField::new('contactinformation'),
            yield TextField::new('checkintime'),
            yield TextField::new('checkouttime'),
            yield TextField::new('policies'),
            yield TextField::new('latitude'),
            yield TextField::new('longitude'),
        ];
    }


}