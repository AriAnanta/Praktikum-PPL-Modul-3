<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class masuktest extends DuskTestCase
{
    /**
     * A Dusk test example,
     * @group login
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser -> visit('/')
                -> clickLink('Log in')
                -> type ('email', 'admin@gmail.com')
                -> type ('password', 'password')
                -> press('LOG IN')
                ->assertPathIs('/dashboard');
        });
    }
}
