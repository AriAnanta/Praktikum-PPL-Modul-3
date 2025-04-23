<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class NotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group notes
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser -> visit('/')
                -> clickLink('Log in')
                -> type ('email', 'admin@gmail.com')
                -> type ('password', 'password')
                -> press('LOG IN')
                ->assertPathIs('/dashboard')
                -> visit('/notes')
                -> clickLink('Create Note')
                -> type ('title', 'Test Note')
                -> type ('description', 'This is a test note.')
                -> press('CREATE');
        });
    }
}
