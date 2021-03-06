<?php namespace Anysite\Contact;

use Illuminate\Support\ServiceProvider;
use App\Artisan\InstallCommand;

class ContactServiceProvider extends ServiceProvider {

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
		$root_dir = __DIR__ . '/../../';

		// Include routes
		include $root_dir . 'routes.php';

		// View directory
		$this->loadViewsFrom($root_dir . 'views', 'contact');

		// Publish public folder when vendor:publish command is used
		$this->publishes([
		    $root_dir . '/../public' => public_path('packages/contact'),
		], 'public');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// Register commands
		$this->registerCommands();

        $this->commands('install');
	}

	/**
	 * Register all commands available in the package
	 *
	 * @return void
	 */
	private function registerCommands()
    {
        $this->app['install'] = $this->app->share(function($app)
        {
            return new InstallCommand;
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
