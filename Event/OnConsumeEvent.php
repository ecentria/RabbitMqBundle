<?php

namespace OldSound\RabbitMqBundle\Event;

use OldSound\RabbitMqBundle\RabbitMq\Consumer;

/**
 * Class OnConsumeEvent
 *
 * @package OldSound\RabbitMqBundle\Command
 */
class OnConsumeEvent extends AMQPEvent
{
    /**
     * OnConsumeEvent constructor.
     *
     * @param Consumer $consumer
     */
    public function __construct(Consumer $consumer)
    {
        $this->setConsumer($consumer);
    }
}
