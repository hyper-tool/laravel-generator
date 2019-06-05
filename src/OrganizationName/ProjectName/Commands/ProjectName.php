<?php

namespace OrganizationName\ProjectName\Commands;

use Illuminate\Console\Command;
use OrganizationName\ProjectName\Controllers\ProjectNameController;

/**
 * Class Framework
 * @package App\Console\Commands
 */
class ProjectName extends Command
{
    /**
     * @var string
     */
    protected $signature = 'make:ProjectName';

    /**
     * @var string
     */
    protected $description = 'ProjectName description';

    /**
     * ProjectName constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     *
     */
    public function handle()
    {
        (new ProjectNameController())->handle();
    }


}
