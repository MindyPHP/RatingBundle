<?php

/*
 * This file is part of Mindy Framework.
 * (c) 2017 Maxim Falaleev
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Mindy\Bundle\RatingBundle\Rating;

interface RatingOwnerInterface
{
    /**
     * @return string
     */
    public function getObjectType();

    /**
     * @return int|string
     */
    public function getObjectId();

    /**
     * @return int
     */
    public function getRatingYes();

    /**
     * @return int
     */
    public function getRatingNo();
}
