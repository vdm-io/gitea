<?php
/**
 * @package    vdm/gitea
 *
 * @created    4th September, 2022
 * @author     Llewellyn van der Merwe <https://dev.vdm.io>
 * @git        VDM Gitea Library <https://git.vdm.dev/joomla/vdm-gitea>
 * @copyright  Copyright (C) 2015 Vast Development Method. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace VastDevelopmentMethod\Gitea\Joomla\Gitea\Utilities;


use Joomla\CMS\Http\Http as JoomlaHttp;
use Joomla\Registry\Registry;


/**
 * The Gitea Http
 * 
 * @since 3.2.0
 */
final class Http extends JoomlaHttp
{
	/**
	 * The token
	 *
	 * @var    string
	 * @since 3.2.0
	 */
	protected string $_token_; // to avoid collusions (but allow swapping)

	/**
	 * Constructor.
	 *
	 * @param   string|null     $token     The Gitea API token.
	 *
	 * @since   3.2.0
	 * @throws  \InvalidArgumentException
	 **/
	public function __construct(?string $token)
	{
		// setup config
		$config = [
			'userAgent' => 'JoomlaGitea/3.0',
			'headers' => [
				'Content-Type' => 'application/json'
			]
		];

		// add the token if given
		if (is_string($token))
		{
			$config['headers']['Authorization'] = $token;
			$this->_token_ = $token;
		}

		$options = new Registry($config);

		// run parent constructor
		parent::__construct($options);
	}

	/**
	 * Change the Token.
	 *
	 * @param   string     $token     The Gitea API token.
	 *
	 * @since   3.2.0
	 **/
	public function setToken(string $token): void
	{
		// get the current headers
		$headers = (array) $this->getOption('headers', [
				'Content-Type' => 'application/json'
			]
		);

		// add the token
		$headers['Authorization'] = $token;
		$this->_token_ = $token;

		$this->setOption('headers', $headers);
	}

	/**
	 * Get the Token.
	 *
	 * @return  string|null
	 * @since   3.2.0
	 **/
	public function getToken(): ?string
	{
		return $this->_token_ ?? null;
	}
}

