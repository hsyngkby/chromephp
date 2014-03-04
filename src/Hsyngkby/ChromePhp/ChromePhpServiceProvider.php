<?php namespace Hsyngkby\ChromePhp;

use Illuminate\Support\ServiceProvider;

class ChromePhpServiceProvider extends ServiceProvider {

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
		// Register the package
		$this->package('hsyngkby/chromephp', 'chromephp', __DIR__.'/../../');

		// Register IoC bindings
		$this->registerBindings();

		// Shortcut so developers don't need to add an Alias in app/config/app.php
		if ($alias = $this->app['config']->get('chromephp::alias', 'l'))
		{
			$this->app->booting(function() use ($alias)
			{
				$loader = \Illuminate\Foundation\AliasLoader::getInstance();

				$loader->alias($alias, '\Hsyngkby\ChromePhp\ChromePhpFacade');
			});
		}

		// Include various files
		require __DIR__ . '/../../helpers.php';
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//include "ChromePhp.php";
	}

	/**
	 * Register IoC bindings
	 * @return void
	 */
	public function registerBindings()
	{
		$this->app->singleton('chromephp', function($app)
		{
			return new ChromePhp();
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}