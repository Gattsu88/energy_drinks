<?php

class Db
{
    public static function connect($config)
    {
        try {
            return new Pdo(
                $config['db_dsn'],
                $config['db_user'],
                $config['db_pass'],
                $config['db_options']
            );
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }
}
