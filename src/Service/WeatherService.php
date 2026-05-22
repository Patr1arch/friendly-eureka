<?php

namespace App\Service;

use App\Model\Weather;
use DateTime;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class WeatherService 
{
    public function __construct(private CacheInterface $cache, private HttpClientInterface $client)
    {
    }

    // @return array<Weather>
    // Возвращает массив объектов Weather по определенной широте ($lat) и долготе ($lon)
    // Содержание объектов определяется по количеству $forecastDays
    public function getWeather(float $lat, float $lon, int $forecastDays = 10): array
    {
        // TODO: Реализовать кеширование по ключу $lat и $lon
        // Установите время жизни, равное $forecastDays

        // TODO: Реализовать запрос к open-meteo.com по $lat, $lon и $forecastDays
        // Достаточно вернуть дату прогноза с максимальной и минимальной температурой 
        // Обработайте ответ и верните массив объектов Weather
        // Ссылка на документацию: https://open-meteo.com/en/docs
        return [new Weather(new DateTime('2026-05-01 00:00:00'), 15.0, 5.5)];
    }
}
