<?php namespace Dutkan\Followers\Sentry;

use Dutkan\Followers\Follower as FollowerInterface;
use Sentry, Follow;
use Dutkan\Followers\Exceptions\AuthenticationException;

class Follower implements FollowerInterface
{
    public static function followTo($userId)
    {        
        if (Sentry::check()) {
        	$currentUser = Sentry::getUser();

	        $follow = new Follow();

	        $follow->user_id = $currentUser->id;

	        $follow->follower_id = $userId;

	        $follow->save();

	        return TRUE;
        }

        throw new AuthenticationException("Authentication Failed");        

    }

    public static function unfollowFrom($userId)
    {
        if (Sentry::check()) {
        	$currentUser = Sentry::getUser();

	        $follow = Follow::findOrFail($currentUser->id);

	        $follow->delete();
        }

        throw new AuthenticationException("Authentication Failed");

    }
}