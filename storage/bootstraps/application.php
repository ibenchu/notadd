<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2016, notadd.com
 * @datetime 2016-11-21 11:36
 */
declare(strict_types = 1);
$application = new \Notadd\Foundation\Application(realpath(__DIR__ . '/../../'));
$application->singleton(Illuminate\Contracts\Http\Kernel::class, Notadd\Foundation\Http\Kernel::class);
$application->singleton(Illuminate\Contracts\Console\Kernel::class, Notadd\Foundation\Console\Kernel::class);
$application->singleton(Illuminate\Contracts\Debug\ExceptionHandler::class, Notadd\Foundation\Exception\Handler::class);

return $application;
