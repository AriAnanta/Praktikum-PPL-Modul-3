<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class KeluarTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testKeluar(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Enterprise Application Development') //Command untuk memverifikasi bahwa text "Enterprise Application Development" muncul di halaman
                ->clickLink('Log in') //Command untuk mengklik link yang bertuliskan "Log in"
                ->type('email', 'admin@gmail.com') // Command untuk mengisi field 'email' dengan nilai admin@gmail.com
                ->type('password', 'password') // Command untuk mengisi field 'password' dengan nilai 'password'
                ->press('LOG IN') // Command untuk mengklik tombol yang bertuliskan "LOG IN"
                ->assertSee('Dashboard')// Command untuk memverifikasi bahwa text "Dashboard" muncul di halaman setelah login berhasil
            ->press('admin') // Command untuk mengklik tombol yang bertuliskan "admin"
            ->clickLink('Log Out') // Command untuk mengklik link yang bertuliskan "Log Out"
            ->assertSee('Enterprise Application Development'); // Command untuk memverifikasi bahwa text "Enterprise Application Development" muncul di halaman setelah logout berhasil
        });
    }
}
