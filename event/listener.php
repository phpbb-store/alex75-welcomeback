<?php
/**
*
* @package welcome back
* @copyright (c) 2015 alex75 https://www.phpbb-store.it
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace alex75\welcomeback\event;

/**
 * @ignore
 */
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * welcome back Event listener.
 */
class listener implements EventSubscriberInterface
{

	protected $user;
	protected $template;
	protected $root_path;
	protected $phpEx;
	protected $config;
	protected $language;

	public function __construct(
		\phpbb\user $user,
		\phpbb\config\config $config,
		\phpbb\template\template $template,
		$root_path,
		$phpEx,
		\phpbb\language\language $language)
	{
		$this->user			= $user;
		$this->config		= $config;
		$this->template		= $template;
		$this->root_path	= $root_path;
		$this->phpEx		= $phpEx;
		$this->language		= $language;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'	=> 'load_language',
			'core.page_header'	=> 'wb_tpl_vars', 
		);
	}

	public function load_language($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'alex75/welcomeback',
			'lang_set' => 'welcomebacklang',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}

	public function wb_tpl_vars($event)
	{
		$url_1 = append_sid($this->root_path . 'search.' . $this->phpEx, 'author=' . $this->user->data['username'] . '&amp;sf=firstpost&amp;sr=topics');
		$url_2 = append_sid($this->root_path . "ucp." . $this->phpEx, "i=ucp_main&amp;mode=drafts");
		$url_3 = append_sid($this->root_path . "ucp." . $this->phpEx, "i=ucp_main&amp;mode=subscribed");
		$url_4 = append_sid($this->root_path . "ucp." . $this->phpEx, "i=ucp_main&amp;mode=bookmarks");
		$url_5 = append_sid($this->root_path . "ucp." . $this->phpEx, "i=ucp_attachments&amp;mode=attachments");

		$this->template->assign_vars(array(
			'U_WBYOURTOPICS'		=> $url_1,
			'U_WBYOURDRAFTS'		=> $url_2,
			'U_WBYOURSUBSCRIBED'	=> $url_3,
			'U_WBYOURBOOKMARKS'		=> $url_4,
			'U_WBYOURATTACHMENTS'	=> $url_5,
			'WB_SITENAME'			=> $this->language->lang('WELCOMEBACK_ON', $this->config['sitename']),
		));
	}
}
