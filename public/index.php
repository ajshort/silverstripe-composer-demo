<?php
/**
 * The entry point for the silverstripe application. This file includes the
 * composer auto loader, and passes control to the application object.
 *
 * @package silverstripe
 */

require_once __DIR__ . '/../vendor/autoload.php';

Application::respond();
