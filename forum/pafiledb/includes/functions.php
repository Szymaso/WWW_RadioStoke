<?php
/*
  paFileDB 3.0
  �2001/2002 PHP Arena
  Written by Todd
  todd@phparena.net
  http://www.phparena.net
  Keep all copyright links on the script visible
  Please read the license included with this script for more information.
*/

if ( !defined('IN_PHPBB') )
{
	die("Hacking attempt");
}

function jumpmenu($pageurl, $type='jump', $default='')
{
	global $db, $lang;

	switch ($type)
	{
		default:
		case 'jump':
		{
			$cache = @jumpmenu_option(0, 0, 'jump', '');

			$out .=  '<form name="form1">'
			.'<select name="menu1" class="forminput">'
			.'<option value="' . $pageurl . '" selected="selected">' . $lang['Jump'] . '</option>'
			.'<option value="' . $pageurl . '">---------</option>';

			$out .= $cache;

			$out .= '</select>&nbsp;<input type="submit" name="go" value="' . $lang['Go'] . '"></form>';

			return $out;
			break;
		}

		case 'admin':
		{
			$out = @jumpmenu_option(0, 0, 'admin', $default);

			return $out;

			break;
		}
	}
}

function jumpmenu_option($par, $depth, $type='jump', $default='')
{
	global $db, $lang;

	static $cats = false;

	if (!is_array($cats))
	{
		$sql =	'SELECT * FROM ' . PA_CATEGORY_TABLE . ' ORDER BY cat_order ASC, cat_name ASC';

		if ( !($result = $db->sql_query($sql)) )
		{
			message_die(GENERAL_ERROR, 'Couldnt Query Jump Menu', '', __LINE__, __FILE__, $sql);
		}

		while ($cat = $db->sql_fetchrow($result))
		{
			$cats[$cat['cat_id']] = $cat;
		}
	}

	$out = '';

	$pre = str_repeat('---', $depth);

	$meow = $cats; // whatever, it works...

	foreach ($meow as $cat)
	{
		if ($cat['cat_parent'] == $par)
		{
			switch ($type)
			{
				default:

				case 'jump':
				{
					$out .= '<option value="' . append_sid("dload.php?action=category&amp;id=" . $cat['cat_id']) . '">' . $pre . $cat['cat_name'] . "</option>\n"
					.@jumpmenu_option($cat['cat_id'], ($depth + 1), 'jump', $default);

					break;
				}

				case 'admin':
				{
					if (is_array($default))
					{
						if (isset($default[$cat['cat_id']]))
						{
							$sel = ' selected="selected"';
						}
						else
						{
							$sel = '';
						}
					}

					$out .= '<option value="' . $cat['cat_id'] . '"' . $sel . '>' . $pre . $cat['cat_name'] . "</option>"
					.@jumpmenu_option($cat['cat_id'], ($depth + 1), 'admin', $default);

					break;
				}
			}
		}
	}

	return $out;
}

function comment_suite($comments_text)
{
	global $config;
	
	// Start Remove images/links in sigs mods
	if ( $comments_text != "" )
	{	
		if($config['allow_comment_images'] == 0)
		{
			$no_image_message = $config['no_comment_image_message'];
			if(preg_match('/(<img src=)(.+?)(\>)/i', $comments_text))
			{
				$comments_text = preg_replace('/(<img src=)(.+?)(\>)/i', $no_image_message, $comments_text); 
			}
			
			if(preg_match('/(\[img\])([^\[]*)(\[\/img\])/i', $comments_text))
			{
				$sig = preg_replace('/(\[img\])([^\[]*)(\[\/img\])/i', $no_image_message, $comments_text); 
			}
		}
		
		if($config['allow_comment_links'] == 0)
		{
			$no_link_message = $config['no_comment_link_message'];
			
			if(preg_match('/(\[url=(.*?)\])([^\[]*)(\[\/url\])/i', $comments_text))
			{
				$comments_text = preg_replace('/(\[url=(.*?)\])([^\[]*)(\[\/url\])/i', $no_link_message, $comments_text); 
			}
			
			if(preg_match('/(\[url\])([^\[]*)(\[\/url\])/i', $comments_text))
			{
				$comments_text = preg_replace('/(\[url\])([^\[]*)(\[\/url\])/i', $no_link_message, $comments_text); 
			}
			
			if (preg_match("#([\n ])http://www\.([a-z0-9\-]+)\.([a-z0-9\-.\~]+)((?:/[^,\t \n\r]*)?)#i", $comments_text) )
			{
				$comments_text = preg_replace("#([\n ])http://www\.([a-z0-9\-]+)\.([a-z0-9\-.\~]+)((?:/[^,\t \n\r]*)?)#i", $no_link_message, $comments_text);
			}

			if (preg_match("#([\n ])www\.([a-z0-9\-]+)\.([a-z0-9\-.\~]+)((?:/[^,\t \n\r]*)?)#i", $comments_text) )
			{
				$comments_text = preg_replace("#([\n ])www\.([a-z0-9\-]+)\.([a-z0-9\-.\~]+)((?:/[^,\t \n\r]*)?)#i", $no_link_message, $comments_text);
			}
		}
	}
	return $comments_text;
}

function locbar($locbar)
{
	$loc = '<table width="100%" cellpadding="2" cellspacing="2"><tr><td valign="bottom">' . $locbar . '</td></tr></table>';
	return $loc;
}

function pafiledb_config() 
{
	global $db;

	$sql="SELECT * FROM " . PA_SETTINGS_TABLE;

	if ( !($result = $db->sql_query($sql)) )
	{
		message_die(GENERAL_ERROR, 'Couldnt query Download configuration', '', __LINE__, __FILE__, $sql);
	}

	return ($db->sql_fetchrow($result));
}

function check_file($ext,$filename,$type)
{
	$ext = strtolower(trim($ext));
	$ext = preg_replace('#([0-9]+)#', '', $ext);
	$filename = strtolower(trim($filename));
	$filename = preg_replace('#([0-9]+)#', '', $filename);
	$filename_array = explode('.', $filename);

	$white_list = array('gif', 'png', 'jpeg', 'jpg', 'tif', 'tga', 'gtar', 'gz', 'tar', 'zip', 'rar', 'ace', 'txt', 'c', 'h', 'cpp', 'hpp', 'diz', 'xls', 'doc', 'dot', 'pdf', 'ai', 'ps', 'ppt', 'rm', 'wma', 'avi', 'mpg', 'mpeg', 'mp3', 'wav');
	$black_list = array('php', 'phtml', 'cgi', 'pl', 'asp', 'py', 'jsp', 'htm', 'html', 'shtml', 'sh', 'htaccess', 'inc');

	if( in_array($ext, $white_list) )
	{
		return (!$type) ? true : $ext;
	}
	else
	{
		foreach( $filename_array as $key )
		{
			if ( in_array($key, $black_list) )
			{	
				return (!$type) ? false : $key;
			}
		}
	}
	return $ext;
}

function pafiledb_is_valid_ext($ext)
{
	global $db, $table_prefix, $userfile_name;

	if ( is_array($ext) || trim($ext) == '' )
	{
		// empty extensions are not allowed
		return false;
	}

	$ext = strtolower(trim($ext));

	// doesn't matter if php files are not on forbidden list, never ever do not allow to use them! You have been warned!!
	if (substr($ext,0,3) == 'php')
	{
		return false;
	}

	if( !check_file($ext, $userfile_name, 0) )
	{
		return false;
	}
	
	if (!defined('FORBIDDEN_EXTENSIONS_TABLE'))
	{
		define('FORBIDDEN_EXTENSIONS_TABLE', $table_prefix . 'forbidden_extensions');
	}

	$sql = "SELECT extension FROM " . FORBIDDEN_EXTENSIONS_TABLE;

	if ( !($result = $db->sql_query($sql)) )
	{
		message_die(GENERAL_ERROR, 'Could not query forbidden extensions', '', __LINE__, __FILE__, $sql);
	}

	$extensionrow = $db->sql_fetchrowset($result);
	$num_extensionrow = $db->sql_numrows($result);
	$db->sql_freeresult($result);

	for ($i = 0; $i < $num_extensionrow; $i++)
	{
		if ( $ext == strtolower(trim($extensionrow[$i]['extension'])) )
		{
			// this extension is blocked
			return false;
		}
	}

	return true;
}

function pafiledb_get_extension($filename)
{
	if (!stristr($filename, '.'))
	{
		return '';
	}
	$extension = strrchr(strtolower($filename), '.');
	$extension[0] = ' ';
	$extension = strtolower(trim($extension));
	if (is_array($extension))
	{
		return '';
	}
	else
	{
		if( $check_file = check_file($extension, $filename, 1) )
		{
			return $check_file;
		}
		return $extension;
	}
}

?>