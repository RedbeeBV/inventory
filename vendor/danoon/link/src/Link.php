<?php

class_alias('\Link\Router', '\Link');

set_error_handler('\Link\ExceptionHandler::error');

set_exception_handler('\Link\ExceptionHandler::exception');
