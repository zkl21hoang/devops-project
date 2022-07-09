<?php

class DevopsTest
{
    public $project_name;

    public function getProjectName()
    {
        return trim("$this->project_name");
    }
}
