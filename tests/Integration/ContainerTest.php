<?php

namespace Tests\Integration;

use P2pCareReminder\Service\AppConfigService;
use Monolog\Logger;
use P2pCareReminder\Service\PlaceholderService;
use PHPUnit\Framework\TestCase;

class ContainerTest extends TestCase
{
    public function testGetServiceFromContainer(): void
    {
        $service = getContainer()->get(PlaceholderService::class);
        self::assertInstanceOf(PlaceholderService::class, $service);
    }

    public function testGetLogger(): void
    {
        $logger = getLogger();
        self::assertInstanceOf(Logger::class, $logger);
    }
}
