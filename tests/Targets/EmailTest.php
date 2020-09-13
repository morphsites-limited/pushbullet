<?php

declare(strict_types=1);

namespace NotificationChannels\Pushbullet\Test\Targets;

use NotificationChannels\Pushbullet\Exceptions\CouldNotSendNotification;
use NotificationChannels\Pushbullet\Targets\Email;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \NotificationChannels\Pushbullet\Targets\Email
 */
class EmailTest extends TestCase
{
    /**
     * @test
     *
     * @covers ::__construct
     * @covers ::getTarget
     */
    public function it_is_properly_represented_as_array()
    {
        $sut = new Email('email@example.com');

        $this->assertEquals(['email' => 'email@example.com'], $sut->getTarget());
    }

    /**
     * @test
     *
     * @covers ::__construct
     */
    public function invalid_email_is_not_accepted()
    {
        $this->expectException(CouldNotSendNotification::class);

        $sut = new Email('email');
    }
}
