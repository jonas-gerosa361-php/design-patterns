<?php

namespace Composite;

class Folder implements folderInterface
{
    private string $id;
    private array $elements;
    private ?string $parentId;

    public function __construct($id = null)
    {
        $this->id = uniqid();
        $this->parentId = $id;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getElements(): array
    {
        return $this->elements;
    }

    public function getParentId()
    {
        return $this->parentId;
    }

    public function addChild($child): bool
    {
        $this->elements = new $child;
        return $child;
    }
}
