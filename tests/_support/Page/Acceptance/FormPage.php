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
