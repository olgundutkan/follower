# Laravel 4 Basic Follower Package
This Laravel 4 package provides a command. These generator include:

`follow:model`

## Package Inslallation

Begin by installing this package through Composer. Edit your project's `composer.json` file to require `dutkan/followers`.

	"require": {
		"laravel/framework": "4.1.*",
		"dutkan/followers": "dev-develop"
	}

Next, update Composer from the Terminal:

	composer update

Once this operation completes, the final step is to add the service provider. Open app/config/app.php, and add a new item to the providers array.

	'Dutkan\Followers\FollowersServiceProvider'

That's it! You're all set to go. Run the `artisan` command from the Terminal to see the new `follow:model` commands.

	php artisan follow:model Follow


"dutkan/followers": "dev-develop"

'Dutkan\Followers\FollowersServiceProvider'

$follow = Follower::followTo('User', $id);
