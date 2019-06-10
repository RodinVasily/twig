<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\Twig;

use Spryker\Yves\Kernel\AbstractBundleConfig;

/**
 * @method \Spryker\Shared\Twig\TwigConfig getSharedConfig()
 */
class TwigConfig extends AbstractBundleConfig
{
    /**
     * @return string
     */
    public function getYvesThemeName(): string
    {
        return $this->getSharedConfig()->getYvesThemeName();
    }

    /**
     * @return string
     */
    public function getYvesThemeNameDefault(): string
    {
        return $this->getSharedConfig()->getYvesThemeNameDefault();
    }
}
