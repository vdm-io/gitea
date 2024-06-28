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

namespace VastDevelopmentMethod\Gitea\Joomla\Gitea;


use Joomla\DI\Container;
use VastDevelopmentMethod\Gitea\Joomla\Gitea\Service\Utilities;
use VastDevelopmentMethod\Gitea\Joomla\Gitea\Service\Jcb;
use VastDevelopmentMethod\Gitea\Joomla\Gitea\Service\Settings;
use VastDevelopmentMethod\Gitea\Joomla\Gitea\Service\Organization;
use VastDevelopmentMethod\Gitea\Joomla\Gitea\Service\User;
use VastDevelopmentMethod\Gitea\Joomla\Gitea\Service\Repository;
use VastDevelopmentMethod\Gitea\Joomla\Gitea\Service\Package;
use VastDevelopmentMethod\Gitea\Joomla\Gitea\Service\Issue;
use VastDevelopmentMethod\Gitea\Joomla\Gitea\Service\Notifications;
use VastDevelopmentMethod\Gitea\Joomla\Gitea\Service\Miscellaneous;
use VastDevelopmentMethod\Gitea\Joomla\Gitea\Service\Admin;
use VastDevelopmentMethod\Gitea\Joomla\Interfaces\FactoryInterface;
use VastDevelopmentMethod\Gitea\Joomla\Abstraction\Factory as ExtendingFactory;


/**
 * Gitea Factory
 * 
 * @since 3.2.0
 */
abstract class Factory extends ExtendingFactory implements FactoryInterface
{
	/**
	 * Create a container object
	 *
	 * @return  Container
	 * @since 3.2.0
	 */
	protected static function createContainer(): Container
	{
		return (new Container())
			->registerServiceProvider(new Utilities())
			->registerServiceProvider(new Jcb())
			->registerServiceProvider(new Settings())
			->registerServiceProvider(new Organization())
			->registerServiceProvider(new User())
			->registerServiceProvider(new Repository())
			->registerServiceProvider(new Package())
			->registerServiceProvider(new Issue())
			->registerServiceProvider(new Notifications())
			->registerServiceProvider(new Miscellaneous())
			->registerServiceProvider(new Admin());
	}

}

