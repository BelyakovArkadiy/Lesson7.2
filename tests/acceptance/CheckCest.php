<?php

class CheckCest // Класс для проверки главной страницы
{
    public function checkQuickView(AcceptanceTester $I)  // Проверяем быстрый просмотр товара
    {
        $I->amOnPage('');
        $I->seeElement('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.product_img_link > img');
        $I->moveMouseOver('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.product_img_link > img');
        $I->seeElementInDOM('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view');
        $I->moveMouseOver('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view');
        $I->click('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view');
        $I->wait(7);
        $I->seeInPageSource('Blouse');
    }
}