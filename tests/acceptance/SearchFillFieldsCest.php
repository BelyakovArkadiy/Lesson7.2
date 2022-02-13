<?php

namespace acceptance;

use AcceptanceTester;
use Faker\Factory;
use Helper\CustomFakerProvider;
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
        $faker = Factory::create('ru_RU');
        $faker->addProvider(new CustomFakerProvider($faker));

        $I->amOnPage('');
        $I->fillField(FormPage::$firstName, $faker -> firstName);
        $I->fillField(FormPage::$lastName, $faker -> lastName);
        $I->fillField(FormPage::$email, $faker -> email);
        $I->fillField(FormPage::$phone, $faker -> getPhoneKz);
        $I->fillField(FormPage::$address, $faker -> address);
        $I->fillField(FormPage::$city, $faker -> city);
        $I->fillField(FormPage::$region, $faker -> region);
        $I->fillField(FormPage::$postalCode,$faker -> postcode);
        $I->wait(10);
        $I->click(FormPage::$btnSubmit);
        $I->waitForText('Good job');


    }
}
