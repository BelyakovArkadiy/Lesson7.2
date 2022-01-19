<?php
/*
 * Класс для проверки Поиска
 */

class SearchCest
{
    /*
     * Проверяем поиск по ключевым словам
     */
    public function checkSearch(FunctionalTester $I)
    {
        $I->amOnPage('');
        $I->seeElement("#search_query_top");
        $I->fillField('#search_query_top', "Printed dress");
        $I->seeElement('#searchbox > button');
        $I->click('#searchbox > button');
        $I->seeNumberOfElements('#center_column > ul > li.ajax_block_product',5);
    }
}
