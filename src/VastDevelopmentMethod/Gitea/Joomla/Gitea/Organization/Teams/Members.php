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

namespace VastDevelopmentMethod\Gitea\Joomla\Gitea\Organization\Teams;


use VastDevelopmentMethod\Gitea\Joomla\Gitea\Abstraction\Api;


/**
 * The Gitea Organization Teams Members
 * 
 * @since 3.2.0
 */
class Members extends Api
{
	/**
	 * List a team's members.
	 *
	 * @param   int   $teamId      The team ID.
	 * @param   int   $pageNumber  The page number of results to return (1-based).
	 * @param   int   $pageSize    The page size of results.
	 *
	 * @return  array|null
	 * @since   3.2.0
	 **/
	public function list(
		int $teamId,
		int $pageNumber = 1,
		int $pageSize = 10
	): ?array
	{
		// Build the request path.
		$path = "/teams/{$teamId}/members";

		// Get the URI object.
		$uri = $this->uri->get($path);

		// Add the query parameters for page number and page size.
		$uri->setVar('page', $pageNumber);
		$uri->setVar('limit', $pageSize);

		// Send the get request.
		return $this->response->get(
			$this->http->get($uri)
		);
	}

	/**
	 * List a particular member of the team.
	 *
	 * @param   int      $id       The team ID.
	 * @param   string   $username The user's username.
	 *
	 * @return  object|null
	 * @since   3.2.0
	 **/
	public function get(int $id, string $username): ?object
	{
		// Build the request path.
		$path = "/teams/{$id}/members/{$username}";

		// Send the get request.
		return $this->response->get(
			$this->http->get(
				$this->uri->get($path)
			)
		);
	}

	/**
	 * Add a team member.
	 *
	 * @param   int      $id       The team ID.
	 * @param   string   $username The user's username.
	 *
	 * @return  string
	 * @since   3.2.0
	 **/
	public function add(int $id, string $username): string
	{
		// Build the request path.
		$path = "/teams/{$id}/members/{$username}";

		// Send the put request.
		return $this->response->get(
			$this->http->put(
				$this->uri->get($path), ''
			), 204, 'success'
		);
	}

	/**
	 * Remove a team member.
	 *
	 * @param   int      $id       The team ID.
	 * @param   string   $username The user's username.
	 *
	 * @return  string
	 * @since   3.2.0
	 **/
	public function remove(int $id, string $username): string
	{
		// Build the request path.
		$path = "/teams/{$id}/members/{$username}";

		// Send the delete request.
		return $this->response->get(
			$this->http->delete(
				$this->uri->get($path)
			), 204, 'success'
		);
	}

}

