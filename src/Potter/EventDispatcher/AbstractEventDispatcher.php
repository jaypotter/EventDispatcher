<?php

declare(strict_types=1);

namespace Potter\EventDispatcher;

abstract class AbstractEventDispatcher
    extends \League\Event\EventDispatcher
    implements EventDispatcherInterface
{ }
