<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Generates a placeholder image
 *
 * @access	public
 * @param 	mixed  	width as integer or array of params
 * @param 	integer	height
 * @param 	string 	text
 * @param 	string 	background color
 * @param 	string 	foreground color
 * @return	string 	HTML
 */
if(!function_exists('placeholder'))
{
	function placeholder($width, $height = NULL, $text = NULL, $background = NULL, $foreground = NULL)
	{
		$params = array();

		if(is_array($width))
		{
			$params = $width;
		}
		else
		{
			$params['width']     	= $width;
			$params['height']    	= $height;
			$params['text']      	= $text;
			$params['background']	= $background;
			$params['foreground']	= $foreground;
		}

		$params['height']    	= (empty($params['height'])) ? $params['width'] : $params['height'];
		$params['text']      	= (empty($params['text'])) ? $params['width'] . ' x '. $params['height'] : $text;
		$params['background']	= (empty($params['background'])) ? 'CCCCCC' : $params['height'];
		$params['foreground']	= (empty($params['foreground'])) ? '969696' : $params['foreground'];

		return '<img src="http://placehold.it/'. $params['width'] . 'x'. $params['height'] . '/' . $params['background'] . '/' . $params['foreground'] . '&text='. $params['text'] . '" alt="Placeholder">';
	}
}

/* End of file placeholder_helper.php */