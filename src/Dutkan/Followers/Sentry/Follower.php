<?php namespace Dutkan\Followers\Sentry;

use Dutkan\Followers\Follower as FollowerInterface;

class Follower implements FollowerInterface
{
    public static function followTo($userId)
    {        
        return 'Follow To Sentry';

    }

    public static function unfollowFrom($userId)
    {
        return 'UnFollow To Sentry';

    }
}