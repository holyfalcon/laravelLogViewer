<?php

namespace Falcon\Logviewer\Services;

use Falcon\Logviewer\Models\Log;
use Monolog\Formatter\JsonFormatter;
use Monolog\Logger;

class LogviewerService
{
    public function __invoke(array $config)
    {
        $logger = new Logger('stack');
        // Set the log format and handler as per your requirements
        $formatter = new JsonFormatter();
        $handler = new \Monolog\Handler\StreamHandler(storage_path('logs/logviewer.log'), $config['level']);
        $handler->setFormatter($formatter);
        // Add a custom LogProcessor to retrieve the log records befor they are written
        $logger->pushProcessor(function ($record) {
            $this->processLogRecord($record);
            return $record;
        });
        // Write the log records in our .log file
        $logger->pushHandler($handler);
        return $logger;
    }

    private function processLogRecord($record)
    {
        $content  = $record['message'];
        $channel  = $record['channel'];
        $time     = strtotime($record['datetime']->jsonSerialize());
        $dateTime = date ("Y/d/m H:i:s", $time);
        $level    = $record->level->getName();
        $context  = serialize([]);
        $extra    = serialize($record["extra"]);

        Log::create([
            'content'   => $content,
            'channel'   => $channel,
            'level'     => $level,
            'context'   => $context,
            'extra'     => $extra,
            'date' => $dateTime
        ]);
    }
}
