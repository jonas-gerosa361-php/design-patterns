<?php

namespace Composite;

use Composite\folderInterface;

class RootFolder implements folderInterface
{
    private string $id;
    private array $elements = [];
    private ?string $parentId;
    
    public function __construct($parentId = null)
    {
        $this->id = uniqid();
        $this->parentId = $parentId;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getParentId()
    {
        return $this->parentId;
    }

    public function addChild($child): bool
    {
        $this->elements[] = new $child($this->id);
        return true;
    }

    public function getElements(): array
    {
        return $this->elements;
    }
}
