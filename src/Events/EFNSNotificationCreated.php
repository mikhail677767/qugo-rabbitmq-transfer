<?php

namespace Qugo\RabbitMQTransfer\Events;

use Qugo\RabbitMQTransfer\BaseEvent;
use Qugo\RabbitMQTransfer\DTO\DTOFNSNotificationCreated;

/**
 * Class EFNSNotificationCreated
 *
 * @package Qugo\RabbitMQTransfer\Events
 */
class EFNSNotificationCreated extends BaseEvent
{
    /**
     * @var int
     */
    public $externalID;

    /**
     * @var string
     */
    public $inn;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * EFNSNotificationCreated constructor.
     *
     * @param DTOFNSNotificationCreated $dto
     */
    public function __construct(DTOFNSNotificationCreated $dto)
    {
        parent::__construct($dto);
        $this->externalID = $dto->data['externalID'];
        $this->inn = $dto->data['inn'];
        $this->title = $dto->data['title'];
        $this->text = $dto->data['text'];
        $this->createdAt = $dto->data['createdAt'];
    }
}
