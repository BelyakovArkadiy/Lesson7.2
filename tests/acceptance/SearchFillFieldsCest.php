<?php

namespace acceptance;

use AcceptanceTester;
use Faker\Factory;
use Page\Acceptance\FormPage;
use const kk_KZ;

/*
 * Класс для тестирование формы
 */

class SearchFillFieldsCest
{
    /*
     * Проверяем заполнение полей с помощью фейкера
     */
    public function checkFillFields(AcceptanceTester $I)
    {
        $faker = Factory::create(kk_KZ);

        $I->amOnPage('');
        $I->fillField(FormPage::$firstName, $faker->firstName);
        $I->fillField(FormPage::$lastName, $faker->lastName);
        $I->fillField(FormPage::$email, $faker->email);
        $I->fillField(FormPage::$phone, $faker->phoneNumber);
        $I->fillField(FormPage::$address, $faker->address);
        $I->fillField(FormPage::$city, $faker->city);
        $I->fillField(FormPage::$region, $faker->randomElement(a,b,c));
        $I->fillField(FormPage::$postalCode,$faker->postcode);
        $I->click(FormPage::$btnSubmit);
        $I->waitForText('Good job');


    }
}
