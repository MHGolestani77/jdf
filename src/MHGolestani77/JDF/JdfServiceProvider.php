<?php
namespace MHGolestani77\JDF;

use Illuminate\Support\ServiceProvider;

class JdfServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['jdf'] = $this->app->share(function($app)
		{
			return new Jdf;
		});

		$this->app->booting(function()
		{
			$loader = \Illuminate\Foundation\AliasLoader::getInstance();
			$loader->alias('jdf', 'MHGolestani77\Jdf\Facades\Jdf');
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