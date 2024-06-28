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
 * The Gitea Repository Notes
 * 
 * @since 3.2.0
 */
class Notes extends Api
{
	/**
	 * Get a note corresponding to a single commit from a repository.
	 *
	 * @param   string   $owner      The owner name.
	 * @param   string   $repo       The repository name.
	 * @param   string   $commitSha  The SHA hash of the commit.
	 *
	 * @return  object|null
	 * @since   3.2.0
	 **/
	public function get(
		string $owner,
		string $repo,
		string $commitSha
	): ?object
	{
		// Build the request path.
		$path = "/repos/{$owner}/{$repo}/git/notes/{$commitSha}";

		// Send the get request.
		return $this->response->get(
			$this->http->get(
				$this->uri->get($path)
			)
		);
	}

}

