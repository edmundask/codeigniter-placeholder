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
		$params['text']      	= (empty($params['text'])) ? $params['width'] . ' x '. $params['height'] : $params['text'];
		$params['background']	= (empty($params['background'])) ? 'CCCCCC' : $params['height'];
		$params['foreground']	= (empty($params['foreground'])) ? '969696' : $params['foreground'];

		return '<img src="http://placehold.it/'. $params['width'] . 'x'. $params['height'] . '/' . $params['background'] . '/' . $params['foreground'] . '&text='. $params['text'] . '" alt="Placeholder">';
	}
}

/**
 * Generates lorem ipsum (dummy) text paragraphs
 *
 * @access	public
 * @param 	integer	number of paragraphs to generate
 * @param 	string 	length of each paragraph
 * @param 	array  	extra options
 * @return	string 	HTML
 */
if(!function_exists('lipsum'))
{
	function lipsum($paragraphs = 2, $length = 'medium', $flags = array())
	{
		$contents = file_get_contents('http://loripsum.net/api/' . $paragraphs . '/' . $length . join('/', $flags));

		return $contents;
	}
}

/* End of file placeholder_helper.php */