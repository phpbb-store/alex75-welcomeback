<?php
/** 
* 
* @package welcome back
* @copyright (c) 2015 alex75 https://www.phpbb-store.it
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2 
* 
*/ 
if (!defined('IN_PHPBB'))
{
exit;
}
if (empty($lang) || !is_array($lang))
{
$lang = array();
}
$lang = array_merge($lang, array(
'WELCOMEBACK_ON'			=> 'Welcome back on %s',
'WELCOMEBACK_HI'			=> 'Hi',
'WELCOMEBACK_SEE'			=> 'Nice to see you here',
'WBMY_TOPICS'				=> 'Your Topics',
'YOUR_SUBSCRIBED'			=> 'Your subscribed',
'YOUR_BOOKMARKS'			=> 'Your bookmarks',
'YOUR_DRAFTS'		    	=> 'Your drafts',
'YOUR_ATTACHMENTS'		   	=> 'Your attachments',
'IN_THIS_FORUM'		    	=> 'In this forum',
'IN_THIS_TOPIC'		    	=> 'In this topic',
'YOU_ARE_HERE'		    	=> 'You are here',
));
