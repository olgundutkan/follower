<?php namespace Dutkan\Followers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class FollowersServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('dutkan/followers');

		AliasLoader::getInstance()->alias('Follower', 'Dutkan\Followers\Follower');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['follower'] = $this->app->share(function($app)
        {
            return new Follow;
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('follower');
	}

}
