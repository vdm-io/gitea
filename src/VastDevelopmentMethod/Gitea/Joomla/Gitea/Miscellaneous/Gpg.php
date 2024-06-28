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

namespace VastDevelopmentMethod\Gitea\Joomla\Gitea\Miscellaneous;


use VastDevelopmentMethod\Gitea\Joomla\Gitea\Abstraction\Api;


/**
 * The Gitea Miscellaneous Gpg
 * 
 * @since 3.2.0
 */
class Gpg extends Api
{
	/**
	 * Get default signing-key.gpg.
	 *
	 * @return  string|null
	 * @since   3.2.0
	 **/
	public function get(): ?string
	{
		// Build the request path.
		$path = "/signing-key.gpg";

		// Send the get request.
		return $this->response->get(
			$this->http->get(
				$this->uri->get($path)
			)
		);
	}

}

