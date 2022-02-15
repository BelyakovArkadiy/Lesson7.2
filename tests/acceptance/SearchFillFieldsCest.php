<?php

namespace acceptance;

use AcceptanceTester;
use Codeception\Example;
use Faker\Factory;
use Helper\CustomFakerProvider;
use Page\Acceptance\FormPage;
use const Faker\Provider\ru_RU;

/*
 * Класс для тестирование формы
 */

class SearchFillFieldsCest
{
    /**
     * Проверяем заполнение полей с помощью фейкера
     * @dataProvider getMonthAndYear
     * @param AcceptanceTester $I
     * @param Example $dataCard
     * @return void
     */
    public function checkFillFields(AcceptanceTester $I, Example $dataCard)
    {
        $faker = Factory::create('ru_RU');
        $faker->addProvider(new CustomFakerProvider($faker));

        $I->amOnPage('');
        $I->fillField(FormPage::$firstName, $faker-> irstName);
        $I->fillField(FormPage::$lastName, $faker->lastName);
        $I->fillField(FormPage::$email, $faker->email);
        $I->fillField(FormPage::$phone, $faker >getPhoneKz);
        $I->fillField(FormPage::$address, $faker->address);
        $I->fillField(FormPage::$city, $faker->city);
        $I->fillField(FormPage::$region, $faker->region);
        $I->fillField(FormPage::$postalCode, $faker->postcode);
        $I->click(FormPage::$paymentMethodCards);
        $I->waitForText('Credit Card');
        $I->fillField(FormPage::$firstNameInCard, $faker->firstName);
        $I->fillField(FormPage::$lastNameInCard, $faker->lastName);
        $I->fillField(FormPage::$numberCard, $faker->getCardsNumber);
        $I->fillField(FormPage::$securityCodeCard, $faker->numberBetween(100,999));
        $I->click(FormPage::$expirationMonth);
        $I->waitForElementVisible(sprintf(FormPage::$nameOfMonth, $dataCard['month']));
        $I->click(sprintf(FormPage::$nameOfMonth, $dataCard['month']));
        $I->click(FormPage::$expirationYear);
        $I->waitForElementVisible(sprintf(FormPage::$year, $dataCard['year']));
        $I->click(sprintf(FormPage::$year, $dataCard['year']));
        $I->click(FormPage::$btnSubmit);
        $I->waitForText('Good job');
    }

    /**
     * Возвращает  месяц и год
     */
    protected function getMonthAndYear()
    {
        return [
            ['month'=> 'January', 'year'=> "2025"],
            ['month'=>'February','year'=> '2024'],
            ['month'=>'March','year'=>'2023']
        ];
    }
 }
