<?php

class File
{

  private static $_timesFileIsChecked = 0;

	public static function checkImage($file = '')
	{
		self::$_timesFileIsChecked++;
		$size = getimagesize($file); 
		return ( !empty($size)) ? $size : 'Not an image';
	}

  public static function getTimesFileIsChecked()
  {
  	return self::$_timesFileIsChecked; 
  }

}