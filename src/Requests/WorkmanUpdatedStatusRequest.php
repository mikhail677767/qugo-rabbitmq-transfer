<?php

namespace Qugo\RabbitMQTransfer\Requests;

use Qugo\RabbitMQTransfer\BaseEvent;
use Qugo\RabbitMQTransfer\BaseRequest;
use Qugo\RabbitMQTransfer\DTO\DTOWorkmanUpdatedStatus;
use Qugo\RabbitMQTransfer\Events\EWorkmanUpdatedStatus;
use Qugo\RabbitMQTransfer\RabbitMQTransferService;

/**
 * Class WorkmanUpdatedStatusRequest
 *
 * @package Qugo\RabbitMQTransfer\Requests
 */
class WorkmanUpdatedStatusRequest extends BaseRequest
{
    /**
     * @var string
     */
    public static $signature = 'workman.status.updated';

    /**
     * @var DTOWorkmanUpdatedStatus
     */
    public $dto;

    /**
     * WorkmanUpdatedStatusRequest constructor.
     *
     * @param DTOWorkmanUpdatedStatus $dto
     */
    public function __construct(DTOWorkmanUpdatedStatus $dto)
    {
        parent::__construct($dto);
    }

    /**
     * @return array
     */
    public function getQueues(): array
    {
        return [
            RabbitMQTransferService::QUEUE_TO_QUGO
        ];
    }

    /**
     * @return BaseEvent
     */
    public function getEvent(): BaseEvent
    {
        return new EWorkmanUpdatedStatus($this->dto);
    }

    /**
     * @return string
     */
    public static function getDTOClass(): string
    {
        return DTOWorkmanUpdatedStatus::class;
    }
}
