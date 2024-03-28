<?php

namespace App\Controller\Admin;

use App\Entity\Artistes;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ArtistesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Artistes::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('Nom'),
            TextField::new('Image'),
            TextField::new('description'),
        ];
    }

}
