<?php
// this is an alternative for dotenv php package / same as what laravel is using
if ( !function_exists('env') )
{
	function env($key = null, $default = null)
	{
		if ( file_exists('.env') )
		{
			$read_env = file_get_contents('.env');
			$exploded = explode("\r\n", $read_env);

			if ( $default == null )
			{
				foreach ($exploded as $i => $value)
				{
					$exploded_value = explode('=', $value);
					if ( in_array($key, $exploded_value) )
					{
						return $exploded_value[1];
					}
				}
			}
			else
			{
				return $default;
			}
		}
	}
}