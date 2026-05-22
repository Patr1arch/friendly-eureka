<?php

namespace App\Tests\Unit\Service;

use App\Model\Weather;
use DateTime;
use Override;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class WeatherServiceTest extends TestCase
{
    #[Override]
    protected function setUp(): void
    {
        parent::setUp();
        // TODO: настроить моки и тестируемый сервис
    }

    #[DataProvider('provideWeathers')]
    public function testGetWeather(float $expectedLan, float $expectedLot, array $expectedWeathers): void
    {
        // TODO: Написать тест, что WeatherService вернет массив Weather
        // Проверить, что CacheInterface вызовется и вернется массив Weather
        $this->assertTrue(true);
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
