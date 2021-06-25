<?php

namespace Composite;

interface folderInterface
{
    public function getId(): string;
    public function getParentId();
    public function addChild($child): bool;
    public function getElements(): array;
}
