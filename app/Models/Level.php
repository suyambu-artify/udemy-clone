<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
	private static $levelArr = ['Beginner', 'Intermediate', 'Advanced', 'All Levels'];

	public function __construct()
	{

	}

    /**
     * Gets site settings
     *
     * @return site settings array
     */
    public static function get()
    {
    	return self::$levelArr;
    }
}
