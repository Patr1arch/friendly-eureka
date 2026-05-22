<?php

namespace App\Tests\Integration\Serivce;

use Override;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use App\Model\Weather;
use DateTime;
use PHPUnit\Framework\Attributes\DataProvider;

class CacheWeatherServiceTest extends KernelTestCase
{
    #[Override]
    protected function setUp(): void
    {
        parent::setUp();
        // TODO: настроить моки и тестируемый сервис
        // использовать настоящий кеш ArrayAdapted
    }

    #[Override]
    protected function tearDown(): void
    {
        parent::tearDown();
        // TODO: реализовать очистку кеша
    }

    #[DataProvider('provideWeathers')]
    public function testGetWeathersWithoutCache(float $expectedLan, float $expectedLot, array $expectedWeathers): void
    {
        // TODO: Реализовать тест получения прогноза погоды без использования кеша
        $this->assertTrue(true);
    }

    #[DataProvider('provideWeathers')]
    public function testGetWeatherWithCache(float $expectedLan, float $expectedLot, array $expectedWeathers): void
    {
        // TODO: Реализовать тест получения прогноза погоды с использования кеша
        $this->assertTrue(true);
    }

    public function testGetWeatherClientReturnInvalidData(): void
    {
        // TODO: Реализовать тест, в котором Api возвращает невалидные данные (пару 4**, 5** тест-кейсов в DataProvider)
        // Необходимо обрботать такой сценарий в коде серивса
    }

    public static function provideWeathers(): array
    {
        // TODO: Дополнить тест-кейсы
        return [
            'firstWeather' => [
                1,
                1,
                [
                    new Weather(new DateTime('2026-01-01 00:00:00'), 10, -10)
                ]
            ]
        ];
    }
}
