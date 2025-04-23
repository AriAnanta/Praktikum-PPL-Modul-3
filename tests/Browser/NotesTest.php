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
            $browser->visit('/')
                ->assertSee('Enterprise Application Development') // Memverifikasi bahwa teks "Enterprise Application Development" muncul di halaman
                ->clickLink('Log in') //Command untuk mengklik link yang bertuliskan "Log in"
                ->type('email', 'admin@gmail.com') // Command untuk mengisi field 'email' dengan nilai admin@gmail.com
                ->type('password', 'password') // Command untuk mengisi field 'password' dengan nilai 'password'
                ->press('LOG IN') // Command untuk mengklik tombol yang bertuliskan "LOG IN"
                ->assertSee('Dashboard')// Command untuk memverifikasi bahwa text "Dashboard" muncul di halaman setelah login berhasil
                ->clickLink('Notes') // Command untuk mengklik link yang bertuliskan "Notes"
                ->clickLink('Create Note') // Command untuk mengklik link yang bertuliskan "Create Note"
                ->type('title', 'praktikum ppl modul 3') // Command untuk mengisi field 'title' dengan nilai 'praktikum ppl modul 3'
                ->type('description', 'praktikum ppl modul 3 unit testing') // Command untuk mengisi field 'description' dengan nilai 'praktikum ppl modul 3 unit testing'
                ->press('CREATE') // Command untuk mengklik tombol yang bertuliskan "CREATE"
                ->waitForText('new note has been created') // Command untuk menunggu hingga teks 'new note has been created' muncul di halaman
                ->assertSee('new note has been created'); // Command untuk memverifikasi bahwa text "new note has been created" muncul di halaman setelah catatan berhasil dibuat
        });
    }
}
