<?php

use LaravelEnso\StructureManager\app\Classes\StructureMigration;

class CreateStructureForDocumentsManager extends StructureMigration
{
    protected $permissionGroup = [
        'name' => 'core.documents', 'description' => 'Documents permissions group',
    ];

    protected $permissions = [
        ['name' => 'core.documents.store', 'description' => 'Upload documents', 'type' => 1, 'is_default' => false],
        ['name' => 'core.documents.index', 'description' => 'List documents for documentable', 'type' => 0, 'is_default' => false],
        ['name' => 'core.documents.link', 'description' => 'Get document download temporary link', 'type' => 0, 'is_default' => false],
        ['name' => 'core.documents.show', 'description' => 'Open document in browser', 'type' => 0, 'is_default' => false],
        ['name' => 'core.documents.download', 'description' => 'Download document', 'type' => 0, 'is_default' => false],
        ['name' => 'core.documents.destroy', 'description' => 'Delete document', 'type' => 1, 'is_default' => false],
    ];
}
