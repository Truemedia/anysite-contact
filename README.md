# anysite-contact
Contact package for anysite

== CLI commands for this package ==
1) Run the following command in the root directory of your laravel installation:
php artisan controller:make NewController --bench=anysite/contact

2) Add the following line after the first php opening tag of the newly generated file inside the packages `controller` folder
namespace Anysite\Contact\Controllers;

3) Run the following command in the root directory and your package directory
composer dump-autoload

=== Accessing admin area ===
Admin controller is restful, therefore has following pages available:
/contact/manage/ 
/contact/manage/create
/contact/manage/{lobby_id}
/contact/manage/{lobby_id}/edit