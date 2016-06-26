<?php

namespace Sifoni\Model;

use Illuminate\Database\Eloquent\Model;
use Sifoni\Engine;
use Sifoni\Exception;

if (!defined('SIFONI_ENABLED_CAPSULE')) {
    $app = Engine::getInstance()->getApp();
    if (isset($app['capsule'])) {
        define('SIFONI_ENABLED_CAPSULE', true);
        $capsule = $app['capsule'];
    } else {
        throw Exception('Please load capsule library before use Eloquent Model !');
    }
}

/*
 * Base Model extends Eloquent ORM
 */
abstract class Base extends Model
{
}
