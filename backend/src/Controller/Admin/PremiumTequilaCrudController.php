<?php

namespace App\Controller\Admin;

use App\Entity\PremiumTequila;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PremiumTequilaCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PremiumTequila::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            SlugField::new('slug')
            ->setTargetFieldName('name'),
            MoneyField::new('lowPrice')
            ->setCurrency('EUR'),
            MoneyField::new('highPrice')
            ->setCurrency('EUR')
        ];
    }
}
