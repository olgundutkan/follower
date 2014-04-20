<?php namespace Dutkan\Followers\Laravel;

use Dutkan\Followers\Follower as FollowerInterface;
use Auth, Follow;
use Dutkan\Followers\Exceptions\AuthenticationException;

class Follower implements FollowerInterface
{
    public static function followTo($userId)
    {        
        if (Auth::check()) {

        	$currentUser = Auth::user();

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
        if (Auth::check()) {

        	$currentUser = Auth::user();

	        $follow = Follow::where('user_id', $currentUser->id)->where('follower_id', $userId);

	        $follow->delete();

            return TRUE;
        }

        throw new AuthenticationException("Authentication Failed");

    }
}