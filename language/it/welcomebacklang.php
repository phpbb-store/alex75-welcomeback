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
'WELCOMEBACK_ON'			=> 'Bentornato su %s',
'WELCOMEBACK_HI'			=> 'Ciao',
'WELCOMEBACK_SEE'			=> 'Piacere di rivederti qui',
'WBMY_TOPICS'				=> 'I tuoi Argomenti',
'YOUR_SUBSCRIBED'			=> 'Le tue sottoscrizioni',
'YOUR_BOOKMARKS'			=> 'I tuoi segnalibri',
'YOUR_DRAFTS'		    	=> 'Le tue bozze',
'YOUR_ATTACHMENTS'		   	=> 'I tuoi allegati',
'IN_THIS_FORUM'		    	=> 'In questo forum',
'IN_THIS_TOPIC'		    	=> 'In questo argomento',
'YOU_ARE_HERE'		    	=> 'Sei su',
));
