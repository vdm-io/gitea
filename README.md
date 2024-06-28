# Vdm Gitea (1.0.0)

VDM Gitea Library

## Details

- Packager: [OctoPower v2.0](https://git.vdm.dev/octoleo/octopower)
- Author: [Llewellyn van der Merwe](https://io.vdm.dev)
- Creation Date: June 2024

### Installation via Composer

Setup this registry in your `~/.composer/config.json` file:
```
{
	"repositories": [{
			"type": "composer",
			"url": "https://git.vdm.dev/api/packages/joomla/composer"
		}
	]
}
```

To install the package using Composer, run the following command:
```
composer require vdm/gitea:1.0.0
```

## Joomla Framework Dependencies

>We have added the following framework classes to the required list of this Composer package.

- Joomla/DI "^3.0"
  - [VastDevelopmentMethod\Gitea\Joomla\Gitea\Factory](src/VastDevelopmentMethod/Gitea/Joomla/Gitea/Factory.php)
  - [VastDevelopmentMethod\Gitea\Joomla\Abstraction\Factory](src/VastDevelopmentMethod/Gitea/Joomla/Abstraction/Factory.php)
  - [VastDevelopmentMethod\Gitea\Joomla\Interfaces\FactoryInterface](src/VastDevelopmentMethod/Gitea/Joomla/Interfaces/FactoryInterface.php)
  - [VastDevelopmentMethod\Gitea\Joomla\Gitea\Service\Utilities](src/VastDevelopmentMethod/Gitea/Joomla/Gitea/Service/Utilities.php)
  - [VastDevelopmentMethod\Gitea\Joomla\Gitea\Service\Jcb](src/VastDevelopmentMethod/Gitea/Joomla/Gitea/Service/Jcb.php)
  - [VastDevelopmentMethod\Gitea\Joomla\Gitea\Service\Settings](src/VastDevelopmentMethod/Gitea/Joomla/Gitea/Service/Settings.php)
  - [VastDevelopmentMethod\Gitea\Joomla\Gitea\Settings\Api](src/VastDevelopmentMethod/Gitea/Joomla/Gitea/Settings/Api.php)
  - [VastDevelopmentMethod\Gitea\Joomla\Gitea\Abstraction\Api](src/VastDevelopmentMethod/Gitea/Joomla/Gitea/Abstraction/Api.php)
  - [VastDevelopmentMethod\Gitea\Joomla\Gitea\Service\Organization](src/VastDevelopmentMethod/Gitea/Joomla/Gitea/Service/Organization.php)
  - [VastDevelopmentMethod\Gitea\Joomla\Gitea\Organization](src/VastDevelopmentMethod/Gitea/Joomla/Gitea/Organization.php)
  - [VastDevelopmentMethod\Gitea\Joomla\Gitea\Service\User](src/VastDevelopmentMethod/Gitea/Joomla/Gitea/Service/User.php)
  - [VastDevelopmentMethod\Gitea\Joomla\Gitea\User](src/VastDevelopmentMethod/Gitea/Joomla/Gitea/User.php)
  - [VastDevelopmentMethod\Gitea\Joomla\Gitea\Service\Repository](src/VastDevelopmentMethod/Gitea/Joomla/Gitea/Service/Repository.php)
  - [VastDevelopmentMethod\Gitea\Joomla\Gitea\Repository](src/VastDevelopmentMethod/Gitea/Joomla/Gitea/Repository.php)
  - [VastDevelopmentMethod\Gitea\Joomla\Gitea\Service\Package](src/VastDevelopmentMethod/Gitea/Joomla/Gitea/Service/Package.php)
  - [VastDevelopmentMethod\Gitea\Joomla\Gitea\Package](src/VastDevelopmentMethod/Gitea/Joomla/Gitea/Package.php)
  - [VastDevelopmentMethod\Gitea\Joomla\Gitea\Service\Issue](src/VastDevelopmentMethod/Gitea/Joomla/Gitea/Service/Issue.php)
  - [VastDevelopmentMethod\Gitea\Joomla\Gitea\Issue](src/VastDevelopmentMethod/Gitea/Joomla/Gitea/Issue.php)
  - [VastDevelopmentMethod\Gitea\Joomla\Gitea\Service\Notifications](src/VastDevelopmentMethod/Gitea/Joomla/Gitea/Service/Notifications.php)
  - [VastDevelopmentMethod\Gitea\Joomla\Gitea\Notifications](src/VastDevelopmentMethod/Gitea/Joomla/Gitea/Notifications.php)
  - [VastDevelopmentMethod\Gitea\Joomla\Gitea\Service\Miscellaneous](src/VastDevelopmentMethod/Gitea/Joomla/Gitea/Service/Miscellaneous.php)
  - [VastDevelopmentMethod\Gitea\Joomla\Gitea\Miscellaneous\Activitypub](src/VastDevelopmentMethod/Gitea/Joomla/Gitea/Miscellaneous/Activitypub.php)
  - [VastDevelopmentMethod\Gitea\Joomla\Gitea\Service\Admin](src/VastDevelopmentMethod/Gitea/Joomla/Gitea/Service/Admin.php)
  - [VastDevelopmentMethod\Gitea\Joomla\Gitea\Admin\Cron](src/VastDevelopmentMethod/Gitea/Joomla/Gitea/Admin/Cron.php)
- Joomla/Filter "^3.0"
  - [VastDevelopmentMethod\Gitea\Joomla\Utilities\StringHelper](src/VastDevelopmentMethod/Gitea/Joomla/Utilities/StringHelper.php)
- Joomla/Input "^3.0"
  - [VastDevelopmentMethod\Gitea\Joomla\Utilities\Component\Helper](src/VastDevelopmentMethod/Gitea/Joomla/Utilities/Component/Helper.php)
  - [VastDevelopmentMethod\Gitea\Joomla\Utilities\String\NamespaceHelper](src/VastDevelopmentMethod/Gitea/Joomla/Utilities/String/NamespaceHelper.php)
- Joomla/Registry "^3.0"
  - [VastDevelopmentMethod\Gitea\Joomla\Utilities\Component\Helper](src/VastDevelopmentMethod/Gitea/Joomla/Utilities/Component/Helper.php)
  - [VastDevelopmentMethod\Gitea\Joomla\Utilities\String\NamespaceHelper](src/VastDevelopmentMethod/Gitea/Joomla/Utilities/String/NamespaceHelper.php)
  - [VastDevelopmentMethod\Gitea\Joomla\Gitea\Utilities\Http](src/VastDevelopmentMethod/Gitea/Joomla/Gitea/Utilities/Http.php)
- Joomla/Uri "^3.0"
  - [VastDevelopmentMethod\Gitea\Joomla\Gitea\Utilities\Uri](src/VastDevelopmentMethod/Gitea/Joomla/Gitea/Utilities/Uri.php)


## Joomla CMS Dependencies

- Joomla\CMS\Component\ComponentHelper
  - [VastDevelopmentMethod\Gitea\Joomla\Utilities\Component\Helper](src/VastDevelopmentMethod/Gitea/Joomla/Utilities/Component/Helper.php)
  - [VastDevelopmentMethod\Gitea\Joomla\Utilities\String\NamespaceHelper](src/VastDevelopmentMethod/Gitea/Joomla/Utilities/String/NamespaceHelper.php)
- Joomla\CMS\Factory
  - [VastDevelopmentMethod\Gitea\Joomla\Utilities\Component\Helper](src/VastDevelopmentMethod/Gitea/Joomla/Utilities/Component/Helper.php)
  - [VastDevelopmentMethod\Gitea\Joomla\Utilities\String\NamespaceHelper](src/VastDevelopmentMethod/Gitea/Joomla/Utilities/String/NamespaceHelper.php)
  - [VastDevelopmentMethod\Gitea\Joomla\Utilities\GetHelper](src/VastDevelopmentMethod/Gitea/Joomla/Utilities/GetHelper.php)
- Joomla\CMS\Http\Http
  - [VastDevelopmentMethod\Gitea\Joomla\Gitea\Utilities\Http](src/VastDevelopmentMethod/Gitea/Joomla/Gitea/Utilities/Http.php)
- Joomla\CMS\Http\Response
  - [VastDevelopmentMethod\Gitea\Joomla\Gitea\Utilities\Response](src/VastDevelopmentMethod/Gitea/Joomla/Gitea/Utilities/Response.php)
  - [VastDevelopmentMethod\Gitea\Joomla\Utilities\JsonHelper](src/VastDevelopmentMethod/Gitea/Joomla/Utilities/JsonHelper.php)
- Joomla\CMS\Language\Language
  - [VastDevelopmentMethod\Gitea\Joomla\Utilities\StringHelper](src/VastDevelopmentMethod/Gitea/Joomla/Utilities/StringHelper.php)


### License
> GNU General Public License version 2 or later

