<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
	/**
	 * Register bindings in the container.
	 *
	 * @return void
	 */
	public function boot()
	{

		// Using Closure based composers...
		view()->composer('*', function ($view) {
			$title = "";
		});
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}
}