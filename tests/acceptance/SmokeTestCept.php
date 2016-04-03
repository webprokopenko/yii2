<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('See than landing page id up');
$I->amOnPage('/');
$I->see('Our CRM');
