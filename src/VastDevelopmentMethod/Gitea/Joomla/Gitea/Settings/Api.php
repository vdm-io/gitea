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

namespace VastDevelopmentMethod\Gitea\Joomla\Gitea\Settings;


use VastDevelopmentMethod\Gitea\Joomla\Gitea\Abstraction\Api as BaseAPI;


/**
 * The Gitea Settings Api
 * 
 * @since 3.2.0
 */
class Api extends BaseAPI
{
	/**
	 * Get instance's global settings for API.
	 *
	 * @return  object|null
	 * @since   3.2.0
	 **/
	public function get(): ?object
	{
		// Build the request path.
		$path = "/settings/api";

		// Send the get request.
		return $this->response->get(
			$this->http->get(
				$this->uri->get($path)
			)
		);
	}

}

