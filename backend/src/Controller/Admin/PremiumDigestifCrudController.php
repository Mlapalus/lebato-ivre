<?php

namespace App\Controller\Admin;

use App\Entity\PremiumDigestif;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class PremiumDigestifCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PremiumDigestif::class;
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
