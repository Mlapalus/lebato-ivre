<?php

namespace App\Controller\Admin\CRUD;

use App\Entity\Photo;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;

class PhotoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Photo::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            SlugField::new('slug')
                ->setTargetFieldName('name'),
            ImageField::new('image')
                ->setBasePath('upload')
                ->setUploadDir('public/upload')
                ->setRequired(false)
                ->setUploadFileNamePattern('[randomhash].[extension]'),
            DateField::new('publishedAt')
        ];
    }
}