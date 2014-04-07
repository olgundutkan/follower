<?php namespace Dutkan\Followers\Laravel;

use Dutkan\Followers\Follower as FollowerInterface;

class Follower implements FollowerInterface
{
    public static function followTo($userId)
    {        
        return 'Follow To Laravel';

    }

    public static function unfollowFrom($userId)
    {
        return 'UnFollow To Laravel';

    }
}