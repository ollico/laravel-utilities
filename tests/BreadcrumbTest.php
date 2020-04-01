<?php

namespace Ollico\Utilities\Tests;

use Ollico\Utilities\Breadcrumb;
use Orchestra\Testbench\TestCase;

class BreadcrumbTest extends TestCase
{
    /** @test */
    function it_can_create_admin_breadcrumbs()
    {
        $expected = [
            0 => (object) [
                'label' => 'Admin',
                'url' => 'https://website.com/admin',
                'isActive' => false,
            ],
            1 => (object) [
                'label' => 'Admin place',
                'url' => null,
                'isActive' => true,
            ],
        ];

        $breadcrumbs = Breadcrumb::make()
            ->admin('Admin', 'https://website.com/admin')
            ->item('Admin place')
            ->toArray();

        $this->assertEquals($expected, $breadcrumbs);
    }

    /** @test */
    function it_can_make_home_breadcrumbs()
    {
        $expected = [
            0 => (object) [
                'label' => 'Dashboard',
                'url' => 'https://website.com/dashboard',
                'isActive' => false,
            ],
            1 => (object) [
                'label' => 'Website place',
                'url' => null,
                'isActive' => true,
            ],
        ];

        $breadcrumbs = Breadcrumb::make()
            ->admin('Dashboard', 'https://website.com/dashboard')
            ->item('Website place')
            ->toArray();

        $this->assertEquals($expected, $breadcrumbs);
    }

    /** @test */
    function it_can_create_breadcrumbs()
    {
        $expected = [
            0 => (object) [
                'label' => 'Home',
                'url' => 'https://website.com/',
                'isActive' => false,
            ],
            1 => (object) [
                'label' => 'Website place',
                'url' => null,
                'isActive' => true,
            ],
        ];

        $breadcrumbs = Breadcrumb::make()
            ->item('Home', 'https://website.com/')
            ->item('Website place')
            ->toArray();

        $this->assertEquals($expected, $breadcrumbs);
    }
}
