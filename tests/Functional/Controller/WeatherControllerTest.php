<?php

namespace App\Tests\Functional\Controller;

use Override;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class WeatherControllerTest extends WebTestCase
{
    #[Override]
    protected function setUp(): void
    {
        // TODO: Установить ArrayCache адаптер с помощью установки соответсвующей реализации
        // CacheInterface в Service Container
        parent::setUp();
    }

    public function testGetWeatherForVladovostok(): void
    {
        // TODO: Реализовать функциональный тест, проверяющий, что в ответе хранится прогноз погоды для Владивостока
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $this->assertTrue(true);
    }

    public function testGetWeatherFormMoscow(): void
    {
        // TODO; Реализовать функциональный тест, проверяющий, что в ответе хранится прогноз погоды для Москвы
        $this->assertTrue(true);
    }
}
