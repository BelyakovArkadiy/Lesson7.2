<?php
namespace Page\Acceptance;
/*
 * Страница с формой
 */

class FormPage
{
    /**
     * Локатор поля first name
     */
    public static $firstName = "#firstName";

    /**
     * Локатор поля last name
     */
    public static $lastName = "#lastName";

    /**
     * Локатор поля e-mail
     */
    public static $email = "//*[@type='email']";

    /**
     * Локатор поля phone
     */
    public static $phone = "//input[@id='phoneNumber']";

    /**
     * Локатор поля address
     */
    public static $address = "//input[@id='address']";

    /**
     * Локатор поля city
     */
    public static $city = "//input[@id='city']";

    /**
     * Локатор поля state
     */
    public static $region = "//input[@id='state']";

    /**
     * Локатор поля postal code
     */
    public static $postalCode = "//input[@id='postal']";

    /**
     * Локатор чек бокса тип оплаты
     */
    public static $paymentMethodCards = "(//input[@id='input_32_paymentType_credit'])[1]";

    /**
     * Локатор поля имя на кредитной карте
     */
    public static $firstNameInCard = "//input[@id='input_32_cc_firstName']";

    /**
     * Локатор поля фамилия на кредитной карте
     */
    public static $lastNameInCard = "//input[@id='input_32_cc_lastName']";

    /**
     * Локатор поля номер кредитной карты
     */
    public static $numberCard = "//input[@id='input_32_cc_number']";

    /**
     * Локатор поля security code кредитной карты
     */
    public static $securityCodeCard = "//input[@id='input_32_cc_ccv']";

    /**
     * Локатор списка Expiration month
     */
    public static $expirationMonth = "//select[@id='input_32_cc_exp_month']";

    /**
     * Локатор поля название месяца
     */
    public static $nameOfMonth = "//option[@value='%s']";

    /**
     * Локатор списка Expiration year
     */
    public static $expirationYear = "//select[@id='input_32_cc_exp_year']";

    /**
     * Локатор поля год
     */
    public static $year = "//option[@value='%s']";

    /**
     * Локатор кнопки регистрация
     */
    public static $btnSubmit = "//button[@type='submit']";


    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

}
