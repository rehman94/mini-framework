<?php
class Connection {
	public static function connect($config) {
		try {
			return new PDO(
				$config['connection'].';dbname='.$config['name'],
				$config['username'],
				$config['password'],
				$config['options']);
				// 'mysql:host=127.0.0.1;dbname='.$dbname,'sherlock','sherlock12345');
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
}