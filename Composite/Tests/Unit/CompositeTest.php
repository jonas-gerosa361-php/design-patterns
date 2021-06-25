<?php

use PHPUnit\Framework\TestCase;

final class CompositeTest extends TestCase
{
    public function testShouldBeAbleToCreateNode(): void
    {
        $node = new Composite\RootFolder();
        $this->assertNotEmpty($node->getId());
    }

    public function testRootFolderShouldNotHaveParent(): void
    {
        $node = new Composite\RootFolder();
        $this->assertNull($node->getParentId());
    }

    public function testNodeShouldBeAbleToCreateChildNode(): void
    {
        $node = new Composite\RootFolder();
        $node->addChild(new Composite\Folder());
        $this->assertNotEmpty($node->getElements());
        $this->assertInstanceOf(Composite\folderInterface::class, $node->getElements()[0]);
        $this->assertNotEquals($node->getId(), $node->getElements()[0]->getId());
    }
}
