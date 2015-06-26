<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

WARNING - 2015-06-26 11:03:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 11:03:18 --> Fatal Error - Call to undefined method Fuel\Core\View::myFunc() in D:\projects\tools\fuelphp-1.7.3\fuel\app\classes\controller\extendscoreclass.php on line 2
WARNING - 2015-06-26 11:03:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 11:03:27 --> Fatal Error - Call to undefined method Fuel\Core\View::myFunc() in D:\projects\tools\fuelphp-1.7.3\fuel\app\classes\controller\extendscoreclass.php on line 2
WARNING - 2015-06-26 11:04:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 11:04:21 --> Fatal Error - Call to undefined method Fuel\Core\View::myFunc() in D:\projects\tools\fuelphp-1.7.3\fuel\app\classes\controller\extendscoreclass.php on line 2
WARNING - 2015-06-26 11:04:22 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 11:04:22 --> Fatal Error - Call to undefined method Fuel\Core\View::myFunc() in D:\projects\tools\fuelphp-1.7.3\fuel\app\classes\controller\extendscoreclass.php on line 2
WARNING - 2015-06-26 11:10:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 11:10:19 --> Fatal Error - Call to undefined method Fuel\Core\View::myFunc() in D:\projects\tools\fuelphp-1.7.3\fuel\app\classes\controller\extendscoreclass.php on line 2
WARNING - 2015-06-26 11:12:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 11:12:08 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/controller/extendscoreclass.php" does not contain class "Controller_Extendscoreclass" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 11:13:32 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 11:13:32 --> Error - Class Controller_extendscoreclass does not have a constructor, so you cannot pass any constructor arguments in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\request.php on line 400
WARNING - 2015-06-26 11:14:37 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-06-26 11:23:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-06-26 11:24:51 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 11:24:51 --> Warning - include(D:\projects\tools\fuelphp-1.7.3\fuel\app\classes\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 363
ERROR - 2015-06-26 11:24:51 --> Fatal Error - Uncaught exception 'Fuel\Core\PhpErrorException' with message 'include(D:\projects\tools\fuelphp-1.7.3\fuel\app\classes\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory' in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php:363
Stack trace:
#0 D:\projects\tools\fuelphp-1.7.3\fuel\core\bootstrap.php(109): Fuel\Core\Error::error_handler(2, 'include(D:\proj...', 'D:\projects\too...', 363)
#1 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(363): {closure}(2, 'include(D:\proj...', 'D:\projects\too...', 363, Array)
#2 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(363): Fuel\Core\Autoloader::init_class()
#3 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(236): Fuel\Core\Autoloader::init_class('View', 'D:\projects\too...')
#4 [internal function]: Fuel\Core\Autoloader::load('View')
#5 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\error.php(215): spl_autoload_call('View')
#6 D:\projects\to in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 363
WARNING - 2015-06-26 11:25:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 11:25:30 --> Warning - include(D:\projects\tools\fuelphp-1.7.3\fuel\packages\mymathclasses\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 363
ERROR - 2015-06-26 11:25:30 --> Fatal Error - Uncaught exception 'Fuel\Core\PhpErrorException' with message 'include(D:\projects\tools\fuelphp-1.7.3\fuel\app\classes\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory' in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php:363
Stack trace:
#0 D:\projects\tools\fuelphp-1.7.3\fuel\core\bootstrap.php(109): Fuel\Core\Error::error_handler(2, 'include(D:\proj...', 'D:\projects\too...', 363)
#1 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(363): {closure}(2, 'include(D:\proj...', 'D:\projects\too...', 363, Array)
#2 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(363): Fuel\Core\Autoloader::init_class()
#3 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(236): Fuel\Core\Autoloader::init_class('View', 'D:\projects\too...')
#4 [internal function]: Fuel\Core\Autoloader::load('View')
#5 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\error.php(215): spl_autoload_call('View')
#6 D:\projects\to in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 363
WARNING - 2015-06-26 11:25:37 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 11:25:37 --> Warning - include(D:\projects\tools\fuelphp-1.7.3\fuel\packages\mymathclasses\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 363
ERROR - 2015-06-26 11:25:37 --> Fatal Error - Uncaught exception 'Fuel\Core\PhpErrorException' with message 'include(D:\projects\tools\fuelphp-1.7.3\fuel\app\classes\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory' in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php:363
Stack trace:
#0 D:\projects\tools\fuelphp-1.7.3\fuel\core\bootstrap.php(109): Fuel\Core\Error::error_handler(2, 'include(D:\proj...', 'D:\projects\too...', 363)
#1 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(363): {closure}(2, 'include(D:\proj...', 'D:\projects\too...', 363, Array)
#2 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(363): Fuel\Core\Autoloader::init_class()
#3 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(236): Fuel\Core\Autoloader::init_class('View', 'D:\projects\too...')
#4 [internal function]: Fuel\Core\Autoloader::load('View')
#5 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\error.php(215): spl_autoload_call('View')
#6 D:\projects\to in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 363
WARNING - 2015-06-26 11:25:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 11:25:38 --> Warning - include(D:\projects\tools\fuelphp-1.7.3\fuel\packages\mymathclasses\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 363
ERROR - 2015-06-26 11:25:38 --> Fatal Error - Uncaught exception 'Fuel\Core\PhpErrorException' with message 'include(D:\projects\tools\fuelphp-1.7.3\fuel\app\classes\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory' in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php:363
Stack trace:
#0 D:\projects\tools\fuelphp-1.7.3\fuel\core\bootstrap.php(109): Fuel\Core\Error::error_handler(2, 'include(D:\proj...', 'D:\projects\too...', 363)
#1 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(363): {closure}(2, 'include(D:\proj...', 'D:\projects\too...', 363, Array)
#2 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(363): Fuel\Core\Autoloader::init_class()
#3 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(236): Fuel\Core\Autoloader::init_class('View', 'D:\projects\too...')
#4 [internal function]: Fuel\Core\Autoloader::load('View')
#5 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\error.php(215): spl_autoload_call('View')
#6 D:\projects\to in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 363
WARNING - 2015-06-26 11:28:25 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 11:28:25 --> Warning - include(D:\projects\tools\fuelphp-1.7.3\fuel\packages\mymathclasses\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 363
ERROR - 2015-06-26 11:28:25 --> Fatal Error - Uncaught exception 'Fuel\Core\PhpErrorException' with message 'include(D:\projects\tools\fuelphp-1.7.3\fuel\app\classes\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory' in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php:363
Stack trace:
#0 D:\projects\tools\fuelphp-1.7.3\fuel\core\bootstrap.php(109): Fuel\Core\Error::error_handler(2, 'include(D:\proj...', 'D:\projects\too...', 363)
#1 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(363): {closure}(2, 'include(D:\proj...', 'D:\projects\too...', 363, Array)
#2 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(363): Fuel\Core\Autoloader::init_class()
#3 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(236): Fuel\Core\Autoloader::init_class('View', 'D:\projects\too...')
#4 [internal function]: Fuel\Core\Autoloader::load('View')
#5 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\error.php(215): spl_autoload_call('View')
#6 D:\projects\to in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 363
WARNING - 2015-06-26 11:29:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 11:29:42 --> Warning - include(D:\projects\tools\fuelphp-1.7.3\fuel\app\classes\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 363
ERROR - 2015-06-26 11:29:42 --> Fatal Error - Uncaught exception 'Fuel\Core\PhpErrorException' with message 'include(D:\projects\tools\fuelphp-1.7.3\fuel\app\classes\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory' in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php:363
Stack trace:
#0 D:\projects\tools\fuelphp-1.7.3\fuel\core\bootstrap.php(109): Fuel\Core\Error::error_handler(2, 'include(D:\proj...', 'D:\projects\too...', 363)
#1 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(363): {closure}(2, 'include(D:\proj...', 'D:\projects\too...', 363, Array)
#2 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(363): Fuel\Core\Autoloader::init_class()
#3 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(236): Fuel\Core\Autoloader::init_class('View', 'D:\projects\too...')
#4 [internal function]: Fuel\Core\Autoloader::load('View')
#5 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\error.php(215): spl_autoload_call('View')
#6 D:\projects\to in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 363
WARNING - 2015-06-26 11:29:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 11:29:44 --> Warning - include(D:\projects\tools\fuelphp-1.7.3\fuel\app\classes\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 363
ERROR - 2015-06-26 11:29:44 --> Fatal Error - Uncaught exception 'Fuel\Core\PhpErrorException' with message 'include(D:\projects\tools\fuelphp-1.7.3\fuel\app\classes\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory' in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php:363
Stack trace:
#0 D:\projects\tools\fuelphp-1.7.3\fuel\core\bootstrap.php(109): Fuel\Core\Error::error_handler(2, 'include(D:\proj...', 'D:\projects\too...', 363)
#1 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(363): {closure}(2, 'include(D:\proj...', 'D:\projects\too...', 363, Array)
#2 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(363): Fuel\Core\Autoloader::init_class()
#3 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(236): Fuel\Core\Autoloader::init_class('View', 'D:\projects\too...')
#4 [internal function]: Fuel\Core\Autoloader::load('View')
#5 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\error.php(215): spl_autoload_call('View')
#6 D:\projects\to in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 363
WARNING - 2015-06-26 11:31:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 11:31:08 --> Warning - include(D:\projects\tools\fuelphp-1.7.3\fuel\app\classes\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 363
ERROR - 2015-06-26 11:31:08 --> Fatal Error - Uncaught exception 'Fuel\Core\PhpErrorException' with message 'include(D:\projects\tools\fuelphp-1.7.3\fuel\app\classes\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory' in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php:363
Stack trace:
#0 D:\projects\tools\fuelphp-1.7.3\fuel\core\bootstrap.php(109): Fuel\Core\Error::error_handler(2, 'include(D:\proj...', 'D:\projects\too...', 363)
#1 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(363): {closure}(2, 'include(D:\proj...', 'D:\projects\too...', 363, Array)
#2 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(363): Fuel\Core\Autoloader::init_class()
#3 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(236): Fuel\Core\Autoloader::init_class('View', 'D:\projects\too...')
#4 [internal function]: Fuel\Core\Autoloader::load('View')
#5 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\error.php(215): spl_autoload_call('View')
#6 D:\projects\to in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 363
WARNING - 2015-06-26 11:31:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 11:31:09 --> Warning - include(D:\projects\tools\fuelphp-1.7.3\fuel\app\classes\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 363
ERROR - 2015-06-26 11:31:09 --> Fatal Error - Uncaught exception 'Fuel\Core\PhpErrorException' with message 'include(D:\projects\tools\fuelphp-1.7.3\fuel\app\classes\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory' in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php:363
Stack trace:
#0 D:\projects\tools\fuelphp-1.7.3\fuel\core\bootstrap.php(109): Fuel\Core\Error::error_handler(2, 'include(D:\proj...', 'D:\projects\too...', 363)
#1 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(363): {closure}(2, 'include(D:\proj...', 'D:\projects\too...', 363, Array)
#2 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(363): Fuel\Core\Autoloader::init_class()
#3 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(236): Fuel\Core\Autoloader::init_class('View', 'D:\projects\too...')
#4 [internal function]: Fuel\Core\Autoloader::load('View')
#5 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\error.php(215): spl_autoload_call('View')
#6 D:\projects\to in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 363
WARNING - 2015-06-26 11:31:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 11:31:10 --> Warning - include(D:\projects\tools\fuelphp-1.7.3\fuel\app\classes\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 363
ERROR - 2015-06-26 11:31:10 --> Fatal Error - Uncaught exception 'Fuel\Core\PhpErrorException' with message 'include(D:\projects\tools\fuelphp-1.7.3\fuel\app\classes\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory' in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php:363
Stack trace:
#0 D:\projects\tools\fuelphp-1.7.3\fuel\core\bootstrap.php(109): Fuel\Core\Error::error_handler(2, 'include(D:\proj...', 'D:\projects\too...', 363)
#1 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(363): {closure}(2, 'include(D:\proj...', 'D:\projects\too...', 363, Array)
#2 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(363): Fuel\Core\Autoloader::init_class()
#3 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(236): Fuel\Core\Autoloader::init_class('View', 'D:\projects\too...')
#4 [internal function]: Fuel\Core\Autoloader::load('View')
#5 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\error.php(215): spl_autoload_call('View')
#6 D:\projects\to in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 363
WARNING - 2015-06-26 11:32:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 11:32:26 --> Warning - include(D:\projects\tools\fuelphp-1.7.3\fuel\app\classes\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 363
ERROR - 2015-06-26 11:32:26 --> Fatal Error - Uncaught exception 'Fuel\Core\PhpErrorException' with message 'include(D:\projects\tools\fuelphp-1.7.3\fuel\app\classes\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory' in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php:363
Stack trace:
#0 D:\projects\tools\fuelphp-1.7.3\fuel\core\bootstrap.php(109): Fuel\Core\Error::error_handler(2, 'include(D:\proj...', 'D:\projects\too...', 363)
#1 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(363): {closure}(2, 'include(D:\proj...', 'D:\projects\too...', 363, Array)
#2 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(363): Fuel\Core\Autoloader::init_class()
#3 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(236): Fuel\Core\Autoloader::init_class('View', 'D:\projects\too...')
#4 [internal function]: Fuel\Core\Autoloader::load('View')
#5 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\error.php(215): spl_autoload_call('View')
#6 D:\projects\to in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 363
WARNING - 2015-06-26 11:32:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 11:32:27 --> Warning - include(D:\projects\tools\fuelphp-1.7.3\fuel\app\classes\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 363
ERROR - 2015-06-26 11:32:27 --> Fatal Error - Uncaught exception 'Fuel\Core\PhpErrorException' with message 'include(D:\projects\tools\fuelphp-1.7.3\fuel\app\classes\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory' in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php:363
Stack trace:
#0 D:\projects\tools\fuelphp-1.7.3\fuel\core\bootstrap.php(109): Fuel\Core\Error::error_handler(2, 'include(D:\proj...', 'D:\projects\too...', 363)
#1 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(363): {closure}(2, 'include(D:\proj...', 'D:\projects\too...', 363, Array)
#2 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(363): Fuel\Core\Autoloader::init_class()
#3 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(236): Fuel\Core\Autoloader::init_class('View', 'D:\projects\too...')
#4 [internal function]: Fuel\Core\Autoloader::load('View')
#5 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\error.php(215): spl_autoload_call('View')
#6 D:\projects\to in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 363
WARNING - 2015-06-26 11:32:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 11:32:58 --> Warning - include(D:\projects\tools\fuelphp-1.7.3\fuel\packages\mymathclasses\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 363
ERROR - 2015-06-26 11:32:58 --> Fatal Error - Uncaught exception 'Fuel\Core\PhpErrorException' with message 'include(D:\projects\tools\fuelphp-1.7.3\fuel\app\classes\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory' in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php:363
Stack trace:
#0 D:\projects\tools\fuelphp-1.7.3\fuel\core\bootstrap.php(109): Fuel\Core\Error::error_handler(2, 'include(D:\proj...', 'D:\projects\too...', 363)
#1 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(363): {closure}(2, 'include(D:\proj...', 'D:\projects\too...', 363, Array)
#2 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(363): Fuel\Core\Autoloader::init_class()
#3 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(236): Fuel\Core\Autoloader::init_class('View', 'D:\projects\too...')
#4 [internal function]: Fuel\Core\Autoloader::load('View')
#5 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\error.php(215): spl_autoload_call('View')
#6 D:\projects\to in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 363
WARNING - 2015-06-26 11:34:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 11:34:16 --> Warning - include(D:\projects\tools\fuelphp-1.7.3\fuel\packages\mymathclasses\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 363
ERROR - 2015-06-26 11:34:16 --> Fatal Error - Uncaught exception 'Fuel\Core\PhpErrorException' with message 'include(D:\projects\tools\fuelphp-1.7.3\fuel\app\classes\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory' in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php:363
Stack trace:
#0 D:\projects\tools\fuelphp-1.7.3\fuel\core\bootstrap.php(109): Fuel\Core\Error::error_handler(2, 'include(D:\proj...', 'D:\projects\too...', 363)
#1 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(363): {closure}(2, 'include(D:\proj...', 'D:\projects\too...', 363, Array)
#2 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(363): Fuel\Core\Autoloader::init_class()
#3 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(236): Fuel\Core\Autoloader::init_class('View', 'D:\projects\too...')
#4 [internal function]: Fuel\Core\Autoloader::load('View')
#5 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\error.php(215): spl_autoload_call('View')
#6 D:\projects\to in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 363
WARNING - 2015-06-26 11:34:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 11:34:17 --> Warning - include(D:\projects\tools\fuelphp-1.7.3\fuel\packages\mymathclasses\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 363
ERROR - 2015-06-26 11:34:17 --> Fatal Error - Uncaught exception 'Fuel\Core\PhpErrorException' with message 'include(D:\projects\tools\fuelphp-1.7.3\fuel\app\classes\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory' in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php:363
Stack trace:
#0 D:\projects\tools\fuelphp-1.7.3\fuel\core\bootstrap.php(109): Fuel\Core\Error::error_handler(2, 'include(D:\proj...', 'D:\projects\too...', 363)
#1 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(363): {closure}(2, 'include(D:\proj...', 'D:\projects\too...', 363, Array)
#2 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(363): Fuel\Core\Autoloader::init_class()
#3 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(236): Fuel\Core\Autoloader::init_class('View', 'D:\projects\too...')
#4 [internal function]: Fuel\Core\Autoloader::load('View')
#5 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\error.php(215): spl_autoload_call('View')
#6 D:\projects\to in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 363
WARNING - 2015-06-26 11:35:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 11:35:19 --> Warning - include(D:\projects\tools\fuelphp-1.7.3\fuel\packages\mymathclasses\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 363
ERROR - 2015-06-26 11:35:19 --> Fatal Error - Uncaught exception 'Fuel\Core\PhpErrorException' with message 'include(D:\projects\tools\fuelphp-1.7.3\fuel\app\classes\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory' in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php:363
Stack trace:
#0 D:\projects\tools\fuelphp-1.7.3\fuel\core\bootstrap.php(109): Fuel\Core\Error::error_handler(2, 'include(D:\proj...', 'D:\projects\too...', 363)
#1 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(363): {closure}(2, 'include(D:\proj...', 'D:\projects\too...', 363, Array)
#2 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(363): Fuel\Core\Autoloader::init_class()
#3 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(236): Fuel\Core\Autoloader::init_class('View', 'D:\projects\too...')
#4 [internal function]: Fuel\Core\Autoloader::load('View')
#5 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\error.php(215): spl_autoload_call('View')
#6 D:\projects\to in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 363
WARNING - 2015-06-26 11:37:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-06-26 11:37:55 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 11:37:55 --> Warning - include(D:\projects\tools\fuelphp-1.7.3\fuel\packages\mymathclasses\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 363
ERROR - 2015-06-26 11:37:55 --> Fatal Error - Uncaught exception 'Fuel\Core\PhpErrorException' with message 'include(D:\projects\tools\fuelphp-1.7.3\fuel\app\classes\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory' in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php:363
Stack trace:
#0 D:\projects\tools\fuelphp-1.7.3\fuel\core\bootstrap.php(109): Fuel\Core\Error::error_handler(2, 'include(D:\proj...', 'D:\projects\too...', 363)
#1 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(363): {closure}(2, 'include(D:\proj...', 'D:\projects\too...', 363, Array)
#2 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(363): Fuel\Core\Autoloader::init_class()
#3 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(236): Fuel\Core\Autoloader::init_class('View', 'D:\projects\too...')
#4 [internal function]: Fuel\Core\Autoloader::load('View')
#5 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\error.php(215): spl_autoload_call('View')
#6 D:\projects\to in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 363
WARNING - 2015-06-26 11:42:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 11:42:31 --> Warning - include(D:\projects\tools\fuelphp-1.7.3\fuel\packages\mymathclasses\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 363
ERROR - 2015-06-26 11:42:31 --> Fatal Error - Uncaught exception 'Fuel\Core\PhpErrorException' with message 'include(D:\projects\tools\fuelphp-1.7.3\fuel\packages\mymathclasses\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory' in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php:243
Stack trace:
#0 D:\projects\tools\fuelphp-1.7.3\fuel\core\bootstrap.php(109): Fuel\Core\Error::error_handler(2, 'include(D:\proj...', 'D:\projects\too...', 243)
#1 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(243): {closure}(2, 'include(D:\proj...', 'D:\projects\too...', 243, Array)
#2 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(243): Fuel\Core\Autoloader::load()
#3 [internal function]: Fuel\Core\Autoloader::load('View')
#4 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\error.php(215): spl_autoload_call('View')
#5 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\error.php(127): Fuel\Core\Error::show_php_error(Object(Fuel\Core\PhpErrorException))
#6 D:\proje in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 243
WARNING - 2015-06-26 11:43:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 11:43:17 --> Warning - include(D:\projects\tools\fuelphp-1.7.3\fuel\packages\mymathclasses\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 363
ERROR - 2015-06-26 11:43:17 --> Fatal Error - Uncaught exception 'Fuel\Core\PhpErrorException' with message 'include(D:\projects\tools\fuelphp-1.7.3\fuel\packages\mymathclasses\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory' in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php:243
Stack trace:
#0 D:\projects\tools\fuelphp-1.7.3\fuel\core\bootstrap.php(109): Fuel\Core\Error::error_handler(2, 'include(D:\proj...', 'D:\projects\too...', 243)
#1 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(243): {closure}(2, 'include(D:\proj...', 'D:\projects\too...', 243, Array)
#2 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(243): Fuel\Core\Autoloader::load()
#3 [internal function]: Fuel\Core\Autoloader::load('View')
#4 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\error.php(215): spl_autoload_call('View')
#5 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\error.php(127): Fuel\Core\Error::show_php_error(Object(Fuel\Core\PhpErrorException))
#6 D:\proje in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 243
WARNING - 2015-06-26 11:43:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 11:43:18 --> Warning - include(D:\projects\tools\fuelphp-1.7.3\fuel\packages\mymathclasses\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 363
ERROR - 2015-06-26 11:43:18 --> Fatal Error - Uncaught exception 'Fuel\Core\PhpErrorException' with message 'include(D:\projects\tools\fuelphp-1.7.3\fuel\packages\mymathclasses\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory' in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php:243
Stack trace:
#0 D:\projects\tools\fuelphp-1.7.3\fuel\core\bootstrap.php(109): Fuel\Core\Error::error_handler(2, 'include(D:\proj...', 'D:\projects\too...', 243)
#1 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(243): {closure}(2, 'include(D:\proj...', 'D:\projects\too...', 243, Array)
#2 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(243): Fuel\Core\Autoloader::load()
#3 [internal function]: Fuel\Core\Autoloader::load('View')
#4 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\error.php(215): spl_autoload_call('View')
#5 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\error.php(127): Fuel\Core\Error::show_php_error(Object(Fuel\Core\PhpErrorException))
#6 D:\proje in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 243
WARNING - 2015-06-26 11:45:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 11:45:12 --> Warning - include(D:\projects\tools\fuelphp-1.7.3\fuel\packages\mymathclasses\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 243
ERROR - 2015-06-26 11:45:12 --> Fatal Error - Uncaught exception 'Fuel\Core\PhpErrorException' with message 'include(D:\projects\tools\fuelphp-1.7.3\fuel\packages\mymathclasses\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory' in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php:243
Stack trace:
#0 D:\projects\tools\fuelphp-1.7.3\fuel\core\bootstrap.php(109): Fuel\Core\Error::error_handler(2, 'include(D:\proj...', 'D:\projects\too...', 243)
#1 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(243): {closure}(2, 'include(D:\proj...', 'D:\projects\too...', 243, Array)
#2 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(243): Fuel\Core\Autoloader::load()
#3 [internal function]: Fuel\Core\Autoloader::load('View')
#4 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\error.php(215): spl_autoload_call('View')
#5 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\error.php(127): Fuel\Core\Error::show_php_error(Object(Fuel\Core\PhpErrorException))
#6 D:\proje in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 243
WARNING - 2015-06-26 11:45:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 11:45:16 --> Warning - include(D:\projects\tools\fuelphp-1.7.3\fuel\packages\mymathclasses\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 243
ERROR - 2015-06-26 11:45:16 --> Fatal Error - Uncaught exception 'Fuel\Core\PhpErrorException' with message 'include(D:\projects\tools\fuelphp-1.7.3\fuel\packages\mymathclasses\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory' in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php:243
Stack trace:
#0 D:\projects\tools\fuelphp-1.7.3\fuel\core\bootstrap.php(109): Fuel\Core\Error::error_handler(2, 'include(D:\proj...', 'D:\projects\too...', 243)
#1 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(243): {closure}(2, 'include(D:\proj...', 'D:\projects\too...', 243, Array)
#2 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(243): Fuel\Core\Autoloader::load()
#3 [internal function]: Fuel\Core\Autoloader::load('View')
#4 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\error.php(215): spl_autoload_call('View')
#5 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\error.php(127): Fuel\Core\Error::show_php_error(Object(Fuel\Core\PhpErrorException))
#6 D:\proje in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 243
WARNING - 2015-06-26 11:46:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 11:46:16 --> Warning - include(D:\projects\tools\fuelphp-1.7.3\fuel\packages\mymathclasses\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 243
ERROR - 2015-06-26 11:46:16 --> Fatal Error - Uncaught exception 'Fuel\Core\PhpErrorException' with message 'include(D:\projects\tools\fuelphp-1.7.3\fuel\packages\mymathclasses\view.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory' in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php:243
Stack trace:
#0 D:\projects\tools\fuelphp-1.7.3\fuel\core\bootstrap.php(109): Fuel\Core\Error::error_handler(2, 'include(D:\proj...', 'D:\projects\too...', 243)
#1 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(243): {closure}(2, 'include(D:\proj...', 'D:\projects\too...', 243, Array)
#2 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php(243): Fuel\Core\Autoloader::load()
#3 [internal function]: Fuel\Core\Autoloader::load('View')
#4 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\error.php(215): spl_autoload_call('View')
#5 D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\error.php(127): Fuel\Core\Error::show_php_error(Object(Fuel\Core\PhpErrorException))
#6 D:\proje in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 243
WARNING - 2015-06-26 11:48:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 11:48:06 --> Fatal Error - Class 'Mymath\Fuel\Core\View' not found in D:\projects\tools\fuelphp-1.7.3\fuel\packages\mymath\classes\view.php on line 5
WARNING - 2015-06-26 11:49:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 11:49:52 --> Fatal Error - Class 'Mymath\Fuel\Core\View' not found in D:\projects\tools\fuelphp-1.7.3\fuel\packages\mymath\classes\view.php on line 5
WARNING - 2015-06-26 11:50:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 11:50:29 --> Fatal Error - Class 'Mymath\View' not found in D:\projects\tools\fuelphp-1.7.3\fuel\packages\mymath\classes\view.php on line 4
WARNING - 2015-06-26 11:50:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 11:50:39 --> Fatal Error - Class 'View' not found in D:\projects\tools\fuelphp-1.7.3\fuel\packages\mymath\classes\view.php on line 4
WARNING - 2015-06-26 11:50:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 11:50:43 --> Fatal Error - Class 'View' not found in D:\projects\tools\fuelphp-1.7.3\fuel\packages\mymath\classes\view.php on line 4
WARNING - 2015-06-26 11:50:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 11:50:43 --> Fatal Error - Class 'View' not found in D:\projects\tools\fuelphp-1.7.3\fuel\packages\mymath\classes\view.php on line 4
WARNING - 2015-06-26 11:50:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 11:50:43 --> Fatal Error - Class 'View' not found in D:\projects\tools\fuelphp-1.7.3\fuel\packages\mymath\classes\view.php on line 4
WARNING - 2015-06-26 11:50:51 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 11:50:51 --> Fatal Error - Class 'Mymath\Fuel\Core\View' not found in D:\projects\tools\fuelphp-1.7.3\fuel\packages\mymath\classes\view.php on line 5
WARNING - 2015-06-26 11:51:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-06-26 11:53:32 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-06-26 11:53:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-06-26 11:53:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-06-26 13:18:22 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-06-26 13:18:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-06-26 14:24:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 14:24:55 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/welcome/404.php" does not contain class "Presenter\Welcome_404" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 14:30:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 14:30:29 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/welcome/404.php" does not contain class "Presenter\Welcome_404" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 14:30:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 14:30:30 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/welcome/404.php" does not contain class "Presenter\Welcome_404" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 14:30:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 14:30:31 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/welcome/404.php" does not contain class "Presenter\Welcome_404" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 14:30:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 14:30:31 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/welcome/404.php" does not contain class "Presenter\Welcome_404" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 14:31:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 14:31:12 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/welcome/404.php" does not contain class "Presenter\Welcome_404" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 14:31:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 14:31:13 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/welcome/404.php" does not contain class "Presenter\Welcome_404" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 14:37:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 14:37:31 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/welcome/404.php" does not contain class "Presenter\Welcome_404" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 14:38:20 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 14:38:20 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/welcome/404.php" does not contain class "Presenter\Welcome_404" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 14:38:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 14:38:21 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/welcome/404.php" does not contain class "Presenter\Welcome_404" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 14:38:32 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 14:38:32 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/welcome/404.php" does not contain class "Presenter\Welcome_404" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 14:38:33 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 14:38:33 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/welcome/404.php" does not contain class "Presenter\Welcome_404" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 15:53:55 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 15:53:55 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/preexam.php" does not contain class "Presenter\Preexam" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 15:54:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 15:54:49 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/preexam.php" does not contain class "Presenter\Preexam" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 15:54:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 15:54:50 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/preexam.php" does not contain class "Presenter\Preexam" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 15:54:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 15:54:52 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/preexam.php" does not contain class "Presenter\Preexam" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 15:55:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 15:55:48 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter.php" does not contain class "Presenter" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 15:56:00 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-06-26 15:57:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 15:57:24 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/preexam.php" does not contain class "Presenter\Preexam" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 16:02:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 16:02:45 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/preexam.php" does not contain class "Presenter\Preexam" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 16:03:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 16:03:38 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter//testnamespace/namespacepres.php" does not contain class "Presenter\_Testnamespace_Namespacepres" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 16:05:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 16:05:08 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/welcome/404.php" does not contain class "Presenter\Welcome_404" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 16:05:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 16:05:24 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/preexam.php" does not contain class "Presenter\Preexam" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 16:11:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 16:11:12 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/preexam.php" does not contain class "Presenter\Preexam" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 16:11:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 16:11:34 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/preexam.php" does not contain class "Presenter\Preexam" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 16:20:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 16:20:08 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/preexam.php" does not contain class "Presenter\Preexam" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 16:22:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 16:22:05 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/preexam.php" does not contain class "Presenter\Preexam" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 16:22:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 16:22:06 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/preexam.php" does not contain class "Presenter\Preexam" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 16:22:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 16:22:06 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/preexam.php" does not contain class "Presenter\Preexam" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 16:30:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-06-26 16:35:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-06-26 16:35:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 16:35:29 --> Fatal Error - Class 'Presenter\Presenter' not found in D:\projects\tools\fuelphp-1.7.3\fuel\app\classes\presenter\preexam.php on line 6
WARNING - 2015-06-26 16:36:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-06-26 16:37:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 16:37:59 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/testnamespace/namespacepres.php" does not contain class "Presenter_Testnamespace_Namespacepres" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 16:40:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 16:40:32 --> Fatal Error - Class 'Presenter\Testnamespace\Presenter' not found in D:\projects\tools\fuelphp-1.7.3\fuel\app\classes\presenter\testnamespace\namespacepres.php on line 4
WARNING - 2015-06-26 16:41:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 16:41:02 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/testnamespace/namespacepres.php" does not contain class "Presenter_Testnamespace_Namespacepres" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 16:45:32 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 16:45:32 --> Fatal Error - Class 'Presenter\Testnamespace\Presenter' not found in D:\projects\tools\fuelphp-1.7.3\fuel\app\classes\presenter\testnamespace\namespacepres.php on line 4
WARNING - 2015-06-26 16:46:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 16:46:06 --> Error - The requested view could not be found: presenter/testnamespace/namespacepres.php in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\view.php on line 398
WARNING - 2015-06-26 16:46:22 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 16:46:22 --> Error - The requested view could not be found: presenter/testnamespace/namespacepres.php in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\view.php on line 398
WARNING - 2015-06-26 16:46:23 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 16:46:23 --> Error - The requested view could not be found: presenter/testnamespace/namespacepres.php in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\view.php on line 398
WARNING - 2015-06-26 16:46:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 16:46:24 --> Error - The requested view could not be found: presenter/testnamespace/namespacepres.php in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\view.php on line 398
WARNING - 2015-06-26 16:46:33 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 16:46:33 --> Error - The requested view could not be found: presenter/testnamespace/namespacepres.php in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\view.php on line 398
WARNING - 2015-06-26 16:47:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 16:47:21 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/welcome/404.php" does not contain class "Presenter\Welcome_404" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 16:47:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 16:47:40 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/welcome/404.php" does not contain class "Presenter\Welcome_404" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 16:47:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 16:47:41 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/welcome/404.php" does not contain class "Presenter\Welcome_404" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 16:48:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 16:48:02 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/welcome/404.php" does not contain class "Presenter\Welcome_404" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 16:48:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 16:48:04 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/welcome/404.php" does not contain class "Presenter\Welcome_404" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 16:49:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 16:49:45 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/welcome/404.php" does not contain class "Presenter\Welcome_404" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 16:49:46 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 16:49:46 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/welcome/404.php" does not contain class "Presenter\Welcome_404" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 16:49:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 16:49:50 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/welcome/404.php" does not contain class "Presenter\Welcome_404" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 16:49:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 16:49:50 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/welcome/404.php" does not contain class "Presenter\Welcome_404" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 16:50:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 16:50:16 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/welcome/404.php" does not contain class "Presenter\Welcome_404" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 16:50:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 16:50:17 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/welcome/404.php" does not contain class "Presenter\Welcome_404" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 16:50:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 16:50:18 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/welcome/404.php" does not contain class "Presenter\Welcome_404" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 16:51:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 16:51:18 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/welcome/404.php" does not contain class "Presenter\Welcome_404" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 16:59:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 16:59:35 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/welcome/404.php" does not contain class "Presenter\Welcome_404" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 16:59:55 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-06-26 17:00:05 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 17:00:05 --> Fatal Error - Class 'Presenter\Presenter' not found in D:\projects\tools\fuelphp-1.7.3\fuel\app\classes\presenter\preexam.php on line 7
WARNING - 2015-06-26 17:00:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-06-26 17:04:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 17:04:26 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/testnamespace/namespacepres.php" does not contain class "Presenter_Testnamespace_Namespacepres" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
WARNING - 2015-06-26 17:05:25 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 17:05:25 --> Fatal Error - Undefined constant 'Presenter\Testnamespace' in D:\projects\tools\fuelphp-1.7.3\fuel\app\classes\presenter\testnamespace\namespacepres.php on line 2
WARNING - 2015-06-26 17:05:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 17:05:26 --> Fatal Error - Undefined constant 'Presenter\Testnamespace' in D:\projects\tools\fuelphp-1.7.3\fuel\app\classes\presenter\testnamespace\namespacepres.php on line 2
WARNING - 2015-06-26 17:05:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 17:05:28 --> Fatal Error - Undefined constant 'Presenter\Testnamespace' in D:\projects\tools\fuelphp-1.7.3\fuel\app\classes\presenter\testnamespace\namespacepres.php on line 2
WARNING - 2015-06-26 17:07:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-06-26 17:07:53 --> Error - File "D:/projects/tools/fuelphp-1.7.3/fuel/app/classes/presenter/testnamespace/namespacepres.php" does not contain class "Presenter_Testnamespace_Namespacepres" in D:\projects\tools\fuelphp-1.7.3\fuel\core\classes\autoloader.php on line 395
