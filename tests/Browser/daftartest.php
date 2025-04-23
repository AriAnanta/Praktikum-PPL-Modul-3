<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class daftartest extends DuskTestCase
{
    /**
     * A Dusk test example,
     * @group register
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/') 
                ->assertSee('Enterprise Application Development') //Command untuk memverifikasi bahwa text "Enterprise Application Development" muncul di halaman
                ->clickLink('Register') //Command untuk mengklik link yang bertuliskan "Register"
                ->type('name', 'admin') //Command untuk mengisi field 'name' dengan nilai 'admin'
                ->type('email', 'admin2@gmail.com') //Command untuk mengisi field 'email' dengan nilai 'admin2@gmail.com'
                ->type('password', 'password') //Command untuk mengisi field 'password' dengan nilai 'password'
                ->type('password_confirmation', 'password') //Command untuk mengisi field 'password_confirmation' dengan nilai 'password'
                ->press('REGISTER') //Command untuk mengklik tombol yang bertuliskan "REGISTER"
                ->assertSee('Dashboard');//Command untuk memverifikasi bahwa text "Dashboard" muncul di halaman setelah registrasi berhasil
        });
    }
}
