## Overview
ChromePhp is a PHP library for the Chrome Logger Google Chrome extension.

This library allows you to log variables to the Chrome console.

https://chrome.google.com/extensions/detail/noaneddfkdjfnfdakjjmocngnfkfehhd

    ```php
    include 'ChromePhp.php';
    ChromePhp::log('Hello console!');
    ChromePhp::log($_SERVER);
    ChromePhp::warn('something went wrong!');
    l::l('Log');
    ```


More information can be found here:
http://www.chromelogger.com

