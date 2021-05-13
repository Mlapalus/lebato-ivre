<?php

namespace App\Controller\Admin\CRUD;

use App\Entity\Cocktail;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;

class CocktailCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Cocktail::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            SlugField::new('slug')
                ->setTargetFieldName('name'),
            MoneyField::new('price')
                ->setCurrency('EUR'),
            MoneyField::new('priceHH')
                ->setCurrency('EUR'),
            IntegerField::new('quantity'),
            ArrayField::new('ingredients')

        ];
    }
}