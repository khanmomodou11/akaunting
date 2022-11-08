<?php

namespace Composer\CustomDirectoryInstaller;

use Composer\Package\PackageInterface;
use Composer\Installer\PluginInstaller as BasePluginInstaller;

class PluginInstaller extends BasePluginInstaller
{
  public function getInstallPath(PackageInterface $package)
  {
    $path = PackageUtils::getPackageInstallPath($package, $this->composer);

    if(!empty($path)) {
        return $path;
    }

    /*
     * In case, the user didn't provide a custom path
     * use the default one, by calling the parent::getInstallPath function
     */
    return parent::getInstallPath($package);
  }
}
