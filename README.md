The Settings Plugin allows you to manage your database settings (normally used with cake's Configure-class) in cake's Configure-class.

Is easy to use: you can use the Configure::read() methods via the Configure-class.

Admin console to update setting.

Note: The Settings-plugin is prefix-minded. An example: Prefix.Name.
Installation

You can install this plugin into your CakePHP application using composer. For existing applications you can add the following to your composer.json file:

"require": {
    "prakashw3expert/settings": "dev-master"
}
And run /composer update.

Configuration

You will need to add the following line to your application's bootstrap.php file:

Plugin::load('Settings', ['bootstrap' => true, 'routes' => true]);

// or run in your shell

