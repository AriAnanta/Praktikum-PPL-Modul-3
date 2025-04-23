<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class daftartest extends DuskTestCase
{
    /**
     * A Dusk test example,
     * @group daftar
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser -> visit('/')
                -> clickLink('Register')
                -> type ('name', 'admin')
                -> type ('email', 'admin@gmail.com')
                -> type ('password', 'password')
                -> type ('password_confirmation', 'password')
                -> press('REGISTER')
                ->assertPathIs('/dashboard');$browser->visit('/')
                    ->assertSee('Laravel');
        });
    }
}
