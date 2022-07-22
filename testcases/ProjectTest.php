<?php

use PHPUnit\Framework\TestCase;

class ProjectTest extends TestCase
{
    public function testReturnsProjectName()
    {
        require('Test.php');

        $project = new DevopsTest;

        $project->project_name = "DevopsProject";

        $this->assertEquals('DevopsProject', $project->getProjectName());
    }
    public function testProjectNameIsEmpty()
    {
        $project = new DevopsTest;
        $this->assertEquals('', $project->getProjectName());
    }

    /**
     * @test
     */
}
