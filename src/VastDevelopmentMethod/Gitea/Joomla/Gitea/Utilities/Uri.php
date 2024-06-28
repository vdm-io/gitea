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


use Joomla\Uri\Uri as JoomlaUri;


/**
 * The Gitea Uri
 * 
 * @since 3.2.0
 */
final class Uri
{
	/**
	 * The api endpoint
	 *
	 * @var      string
	 * @since 3.2.0
	 */
	private string $endpoint;

	/**
	 * The api version
	 *
	 * @var      string
	 * @since 3.2.0
	 */
	private string $version;

	/**
	 * The api URL
	 *
	 * @var      string
	 * @since 3.2.0
	 */
	private string $url;

	/**
	 * Constructor
	 *
	 * @param   string   $url        URL to the gitea system
	 *                                  example: https://git.vdm.dev
	 * @param   string   $endpoint   Endpoint to the gitea system
	 * @param   string   $version    Version to the gitea system
	 *
	 * @since   3.2.0
	 **/
	public function __construct(
		string $url = 'https://git.vdm.dev',
		string $endpoint =  'api',
		string $version  =  'v1')
	{
		// set the API details
		$this->setUrl($url);
		$this->setEndpoint($endpoint);
		$this->setVersion($version);
	}

	/**
	 * Method to build and return a full request URL for the request.  This method will
	 * add appropriate pagination details if necessary and also prepend the API url
	 * to have a complete URL for the request.
	 *
	 * @param   string   $path   URL to inflect
	 *
	 * @return  JoomlaUri
	 * @since   3.2.0
	 **/
	public function get(string $path): JoomlaUri
	{
		// Get a new Uri object focusing the api url and given path.
		$uri = new JoomlaUri($this->api() . $path);

		return $uri;
	}

	/**
	 * Get the full API URL
	 *
	 * @return  string
	 * @since   3.2.0
	 **/
	public function api(): string
	{
		return $this->url . '/' . $this->endpoint . '/' . $this->version;
	}

	/**
	 * Set the URL of the API
	 *
	 * @param   string   $url   URL to your gitea system
	 *                              example: https://git.vdm.dev
	 *
	 * @return  void
	 * @since   3.2.0
	 **/
	public function setUrl(string $url)
	{
		$this->url = $url;
	}

	/**
	 * Get the URL of the API
	 *
	 * @return  string|null
	 * @since   3.2.0
	 **/
	public function getUrl(): ?string
	{
		return $this->url ?? null;
	}

	/**
	 * Set the endpoint of the API
	 *
	 * @param   string   $endpoint   endpoint to your gitea API
	 *
	 * @return  void
	 * @since   3.2.0
	 **/
	private function setEndpoint(string $endpoint)
	{
		$this->endpoint = $endpoint;
	}

	/**
	 * Set the version of the API
	 *
	 * @param   string   $version   version to your gitea API
	 *
	 * @return  void
	 * @since   3.2.0
	 **/
	private function setVersion($version)
	{
		$this->version = $version;
	}
}

