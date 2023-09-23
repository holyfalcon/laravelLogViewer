# laravel Log Viewer

This package gives you a list of project logs. You can regularly check the log content with the time and level of that
log in separate records.

## Advantages of this package
Unlike other similar packages that read and display the records from the laravel.log file to check the project log, in this package, as soon as the log is created, before a record is saved in the file, it converts it to the appropriate format and the important parts of each record. For example: it extracts the content, level, date and channel of the record and stores it in the database.
This makes the log list not dependent on the file, and if the size of the log file increases, the loading speed of the page related to the logs will not decrease.

## Install package
Install via composer
```bash
composer require holyfalcon/logviewer
```
Add Service Provider to `config/app.php` in `providers` section
```php
Falcon\Logviewer\LogviewerServiceProvider::class,
```
To get the log in real time we should define new channel in `config/logging.php` inside `channels` array below of `stack` channel
```php
'stack' => [
...
],

'log-viewer' => [
    'driver' => 'custom',
    'via' => \Falcon\Logviewer\Services\LogviewerService::class,
    'level' => 'debug',
],
```
Add this `log-viewer` in channels of `stack`
```php
'stack' => [
            'driver' => 'stack',
            'channels' => ['single', 'log-viewer'],
            'ignore_exceptions' => false,
        ],
```
Migrate logs table for storing records:
```php
php artisan migrate
```
Now you can publish the views by the artisan command:
```bash
php artisan vendor:publish --tag=views
```

That's it after this steps in `/logs` you can see logs of your project.