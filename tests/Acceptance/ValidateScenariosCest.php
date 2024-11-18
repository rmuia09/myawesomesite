<?php
namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class ValidateScenariosCest
{
    // public function _before(AcceptanceTester $I)
    // {
    //     $I->amOnPage('/');
    // }

    // public function testPageLoads(AcceptanceTester $I)
    // {
    //     $I->seeElement('body');
    //     $I->see('Visit');
    //     $I->see('Dashboard');
    // }

    // public function testPrivacySettings(AcceptanceTester $I) 
    // {
    //     $I->amOnPage('/wp-admin/options-privacy.php');
    //     $I->seeElement('.privacy-settings-tabs-wrapper');
    //     $I->see('Settings');
    //     $I->see('Policy Guide');
    // }

    // public function testSecureConnection(AcceptanceTester $I)
    // {
    //     $I->seeElement('body');
    //     $I->seeCurrentURLIsHttps();
    // }

    // public function testAdminNavigation(AcceptanceTester $I)
    // {
    //     $I->amOnPage('/wp-admin');
    //     $I->seeElement('nav');
    //     $I->seeElement('#adminmenu');
    // }

    public function validateRequiredFields(AcceptanceTester $I)
     {
        $I->amOnPage('/new-years-party-rsvp-form-template');
        $I->click('Awesome Motive');
        
      // Submit without filling required fields
        $I->click('Submit');
        
    //     // Verify validation messages
     $I->see('This field is required', '.wpforms-field-name');
     $I->see('This field is required', '.wpforms-field-email');
}
}