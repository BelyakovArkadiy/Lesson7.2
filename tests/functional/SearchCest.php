<?php


class SearchCest // Класс для проверки Поиска
{
    public function checkSearch(FunctionalTester $I)   // Проверяем поиск по ключевым словам
    {
        $I->amOnPage('');
        $I->seeElement("#search_query_top");
        $I->fillField('#search_query_top', "Printed dress");
        $I->seeElement('#searchbox > button');
        $I->click('#searchbox > button');
        $I->seeNumberOfElements('#center_column > ul > li.ajax_block_product',5);
    }
}
