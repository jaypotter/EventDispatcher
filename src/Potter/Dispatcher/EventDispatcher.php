<?php

declare(strict_types=1);

namespace Potter\Dispatcher;

use \Psr\EventDispatcher\ListenerProviderInterface;

final class EventDispatcher extends AbstractEventDispatcher
{
    use EventDispatcherTrait;
    
    public function __construct(ListenerProviderInterface $listenerProvider)
    {
        $this->setListenerProvider($listenerProvider);
    }
}