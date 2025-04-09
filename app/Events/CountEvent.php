<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CountEvent implements ShouldBroadcastNow
{
    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;

    public function __construct(
        private readonly int $count
    ) {}

    public function broadcastAs(): string
    {
        return 'count';
    }

    public function broadcastWith(): array
    {
        return [
            'count' => $this->count,
        ];
    }

    public function broadcastOn(): array
    {
        return [
            new Channel('public-count')
        ];
    }
}
