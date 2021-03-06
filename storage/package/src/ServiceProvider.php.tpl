<?php echo "<?php\n"; ?>

namespace <?php echo $vendor; ?>\<?php echo $package; ?>;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    const CONFIG_PATH = __DIR__ . '/../config/<?php echo $configFileName; ?>.php';

    public function boot()
    {
        $this->publishes([
            self::CONFIG_PATH => config_path('<?php echo $configFileName; ?>.php'),
        ], 'config');

        $this->loadViewsFrom(__DIR__.'/resources/views', '<?php echo $package; ?>');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            self::CONFIG_PATH,
            '<?php echo $configFileName; ?>'
        );

        $this->app->bind('<?php echo $aliasName; ?>', function () {
            return new <?php echo $package; ?>();
        });
    }
}
