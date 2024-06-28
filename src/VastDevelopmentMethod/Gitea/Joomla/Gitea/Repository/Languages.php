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

namespace VastDevelopmentMethod\Gitea\Joomla\Gitea\Repository;


use VastDevelopmentMethod\Gitea\Joomla\Gitea\Abstraction\Api;


/**
 * The Gitea Repository Languages
 * 
 * @since 3.2.0
 */
class Languages extends Api
{
	/**
	 * Get languages and number of bytes of code written in a repository.
	 *
	 * @param   string  $owner  The owner name.
	 * @param   string  $repo   The repository name.
	 *
	 * @return  object|null
	 * @since   3.2.0
	 **/
	public function getLanguages(string $owner, string $repo): ?object
	{
		// Build the request path.
		$path = "/repos/{$owner}/{$repo}/languages";

		// Build the URI.
		$uri = $this->uri->get($path);

		// Send the GET request.
		return $this->response->get(
			$this->http->get($uri)
		);
	}

}

