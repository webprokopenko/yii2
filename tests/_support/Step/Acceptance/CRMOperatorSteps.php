<?php
namespace Step\Acceptance;

use Faker\Factory;

class CRMOperatorSteps extends \AcceptanceTester
{
    function amInAddCustomerUi()
    {
        $I = $this;
        $I->amOnPage('/customers/add');
    }
    public function ImagineCustomer()
    {
        $faker = new Factory();
        $faker = $faker->create();

        return [
            'CustomerRecord[name]'          =>  $faker->name,
            'CustomerRecord[birth_date]'    =>  $faker->sentence(8),
            'CustomerRecord[notes]'         =>  $faker->sentence(8),
            'CustomerRecord[number]'        =>  $faker->phoneNumber,
        ];
    }
    function fillCustomerDataForm($fieldsData)
    {
        $I = $this;
        foreach ($fieldsData as $key=>$value) {
            $I->fillField($key,$value);
        }
    }
    function submitCustomerDataForm()
    {
        $I = $this;
        $I->click('Submit');
    }
    public function seeIAmInListCustomersUi()
    {
        $I = $this;
        $I->seeCurrentUrlMatches('/customers/');
    }
    function amInListCustomersUi()
    {
        $I = $this;
        $I->amOnPage('/customers');
    }

}