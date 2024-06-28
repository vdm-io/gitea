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
 * The Gitea Repository Mirror
 * 
 * @since 3.2.0
 */
class Mirror extends Api
{
	/**
	 * Sync a mirrored repository.
	 *
	 * @param	string $owner	The owner name.
	 * @param	string $repo	The repository name.
	 *
	 * @return string
	 * @since 3.2.0
	 */
	public function sync(string $owner, string $repo): string
	{
		// Build the request path.
		$path = "/repos/{$owner}/{$repo}/mirror-sync";

		// Send the POST request.
		return $this->response->get(
			$this->http->post(
				$this->uri->get($path)
			), 200, 'success'
		);
	}

}

