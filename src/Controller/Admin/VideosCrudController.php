<?php

namespace App\Controller\Admin;

use App\Entity\Videos;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;

class VideosCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Videos::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title'),
            UrlField::new('url'),
        ];
    }
}
