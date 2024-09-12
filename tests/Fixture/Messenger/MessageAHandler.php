<?php

/*
 * This file is part of the zenstruck/messenger-test package.
 *
 * (c) Kevin Bond <kevinbond@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zenstruck\Messenger\Test\Tests\Fixture\Messenger;

/**
 * @author Kevin Bond <kevinbond@gmail.com>
 */
final class MessageAHandler
{
    /** @var MessageA[] */
    public array $messages = [];

    public function __invoke(MessageA $message, string|null $additionalArgument = null): void
    {
        if ($message->fail) {
            throw new \RuntimeException('handling failed...');
        }

        $message->additionalArgument = $additionalArgument;

        $this->messages[] = $message;
    }
}
