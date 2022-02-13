<?php
namespace Helper;


use Faker\Provider\Base;

/**
 * Класс кастомного фейкера
 */
class CustomFakerProvider extends Base {
    protected $phoneCodes = [
        '775',
        '701',
        '777',
        '774',
        '702'
    ];

    /**
     * @return string
     * Возращает рандомный казахстанский номер
     */
   public function getPhoneKz()
   {
       return sprintf (
           "+7 %d %d %d %d",
           $this->phoneCodes[array_rand($this->phoneCodes)],
           rand(100,999),
           rand(10,99),
           rand(10,99)

       );
   }
}
