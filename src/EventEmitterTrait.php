<?php

namespace Archman\BugsBunny;

trait EventEmitterTrait
{
    public function emit($event, array $arguments = [])
    {
        // 非Whisper预定义事件就加上当前对象在参数末尾
        if (strpos($event, '__') !== 0) {
            $arguments[] = $this;
        }

        parent::emit($event, $arguments);
    }
}