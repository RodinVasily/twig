<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Yves\Twig;

use Spryker\Yves\Kernel\AbstractFactory;
use Spryker\Yves\Twig\Model\Loader\FilesystemLoader;

/**
 * @method \Spryker\Yves\Twig\TwigConfig getConfig()
 */
class TwigFactory extends AbstractFactory
{

    /**
     * @return \Twig_LoaderInterface
     */
    public function createFilesystemLoader()
    {
        return new FilesystemLoader(
            $this->getConfig()->getTemplatePaths()
        );
    }

}
