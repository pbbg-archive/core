<?php

require __DIR__ . '/../vendor/autoload.php';

use Illuminate\Support\Carbon;

date_default_timezone_set('UTC');

Carbon::setTestNow(Carbon::now());
