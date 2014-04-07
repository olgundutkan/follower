<?php namespace Dutkan\Followers;

use Evenement\EventEmitterInterface;

interface Follower
{
    public static function followTo($userId);

    public static function unfollowFrom($userId);
}