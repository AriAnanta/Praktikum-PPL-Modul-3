<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class EditNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group notes
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/notes')
                    ->assertSee('Edit')
                    ->click('Edit')
                    ->assertPathIs('/edit-page/1')
                    ->assertSee('Test Note')
                    ->press('UPDATE')
                    ->assertPathIs('/notes');
        });
    }
}
