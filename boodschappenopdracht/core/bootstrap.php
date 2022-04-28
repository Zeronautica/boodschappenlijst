<?php
require 'core/database/QueryBuilder.php';
require 'core/database/Connection.php';
require 'core/router.php';
require 'core/request.php';
$config = require 'config.php';
$table = new QueryBuilder(Connection::connect($config['database']));