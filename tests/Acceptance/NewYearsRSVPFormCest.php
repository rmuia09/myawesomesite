<?php
namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class NewYearsRSVPFormCest


{
    // public function fillOutRSVPForm(\AcceptanceTester $I)
    public function fillOutRSVPForm(AcceptanceTester $I)
    {
        $I->amOnPage('/new-years-party-rsvp-form-template');
        $I->click('Awesome Motive');
        // <a class="wp-block-pages-list__item__link wp-block-navigation-item__content" href="http://localhost:8885/?page_id=9">Awesome Motive</a>


    //     $I->waitForElement('form');
    
    // // Print page source to see actual form structure
    // $I->see('form');
    // $I->seeInSource('wpforms');
        // $I->waitForElement('form.wpforms-form');

//         $I->amOnPage('/login');
// $I->fillField('username', 'davert');
// $I->fillField('password', 'qwerty');
// $I->click('LOGIN');
// $I->see('Welcome, Davert!');
        
    //     // Fill out name field
    // $I->fillField('#wpforms-6-field_1', 'John');
        // $I->fillField('First', 'wpforms-6-field_1', 'John'); //wpforms[fields][1][first]
        // $I->fillField('#wpforms-1-field-1-first', 'John');
        $I->fillField(['name' => 'wpforms[fields][1][first]'], 'John'); //wpforms[fields][1][first]
        $I->fillField(['name' => 'wpforms[fields][1][last]'], 'Smith');
        
    //     // Fill email
        $I->fillField(['name' => 'wpforms[fields][7]'], 'john.smith@example.com');
        
    //     // Select "Can you make it?"
        $I->selectOption(['name' => 'wpforms[fields][2]'], 'Yes');
        
    //     // Select number of guests
        $I->selectOption(['name' => 'wpforms[fields][4]'], '+2');
        
    //     // Select what they're bringing
        $I->selectOption(['name' => 'wpforms[fields][5]'], 'Snacks');
        
    //     // Add additional notes
        $I->fillField(['name' => 'wpforms[fields][6]'], 'Looking forward');
        
    //     // Submit the form
        $I->click('Submit');
        
    //     // Verify success message
        // $I->see('Thanks for your RSVP to the New Years party!'); //Please wait a little longer before submitting. We’re running a quick security check.
        // $I->see('Please wait a little longer before submitting. We’re running a quick security check.');

      // public function validateRequiredFields(AcceptanceTester $I)
    // {
    //     $I->amOnPage('/new-years-party-rsvp-form-template');
        
    //     // Submit without filling required fields
    //     $I->click('Submit');
        
    //     // Verify validation messages
    //     $I->see('This field is required', '.wpforms-field-name');
    //     $I->see('This field is required', '.wpforms-field-email');
    }
}
