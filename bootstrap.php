<?php

$config = require 'config.php';
require 'classes/Db.php';
require 'classes/Pagination.php';

return Db::connect($config['database']);
