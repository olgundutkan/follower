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

## Migrations
You can installing the package' s migration file into your application, by running the follwing command:

	php artisan migrate dutkan/followers

## Create Model
That's it! You're all set to go. Run the `artisan` command from the Terminal to see the new `follow:model` commands.

	php artisan follow:model Follow

## Configuration
After installing, you can publish the package's configuration file into your application, by running the following command:

	php artisan config:publish dutkan/followers

This will publish the config file to app/config/packages/dutkan/followers/config.php where you modify the package configuration.

