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
 * The Gitea Repository Assignees
 * 
 * @since 3.2.0
 */
class Assignees extends Api
{
	/**
	 * Return all users that have write access and can be assigned to issues.
	 *
	 * @param   string  $owner  The owner name.
	 * @param   string  $repo   The repository name.
	 *
	 * @return  array|null
	 * @since   3.2.0
	 **/
	public function get(string $owner, string $repo): ?array
	{
		// Build the request path.
		$path = "/repos/{$owner}/{$repo}/assignees";

		// Set the required variables to the URI.
		$uri = $this->uri->get($path);
		$uri->setVar('owner', $owner);
		$uri->setVar('repo', $repo);

		// Send the get request.
		return $this->response->get(
			$this->http->get($uri)
		);
	}

}

