<?php

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace Pimcore\Bundle\EcommerceFrameworkBundle\PricingManager;

interface ActionInterface
{
    /**
     * @param EnvironmentInterface $environment
     *
     * @return ActionInterface
     */
    public function executeOnProduct(EnvironmentInterface $environment);

    /**
     * @param EnvironmentInterface $environment
     *
     * @return ActionInterface
     */
    public function executeOnCart(EnvironmentInterface $environment);

    /**
     * @return string
     */
    public function toJSON();

    /**
     * @param string $string
     *
     * @return ActionInterface
     */
    public function fromJSON($string);
}
