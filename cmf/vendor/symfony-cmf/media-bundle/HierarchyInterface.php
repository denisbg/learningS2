<?php

/*
 * This file is part of the Symfony CMF package.
 *
 * (c) 2011-2014 Symfony CMF
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Cmf\Bundle\MediaBundle;

/**
 * Interface for file and directory objects.
 *
 * For PHPCR the id is being the path.
 *
 * This is to be kept compatible with the Gaufrette adapter to be able to use a
 * filesystem with directories.
 */
interface HierarchyInterface extends MediaInterface
{
    /**
     * Get the parent node.
     *
     * @return Object|null
     */
    public function getParent();

    /**
     * Set the parent node.
     *
     * @param Object $parent
     *
     * @return boolean
     */
    public function setParent($parent);
}
