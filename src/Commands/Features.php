<?php

namespace OrganizationName\ProjectName\Commands;

use Illuminate\Console\Command;
use OrganizationName\ProjectName\Controllers\FeaturesController;

/**
 * Class Framework
 * @package App\Console\Commands
 */
class Features extends Command
{
    /**
     * @var string
     */
    protected $signature = 'make:Features';

    /**
     * @var string
     */
    protected $description = 'Features description';

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
        (new FeaturesController())->handle();
    }


}
