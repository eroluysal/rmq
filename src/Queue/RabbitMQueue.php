<?php namespace Illuminate\Queue;

use Illuminate\Queue\Queue as BaseQueue;
use Illuminate\Contracts\Queue\Queue as QueueContract;

class RabbitMQueue extends BaseQueue implements QueueContract {}