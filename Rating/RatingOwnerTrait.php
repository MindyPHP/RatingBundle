<?php
/*
 * This file is part of Mindy Framework.
 * (c) 2017 Maxim Falaleev
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Mindy\Bundle\RatingBundle\Rating;

use Mindy\Bundle\RatingBundle\Model\Rating;
use Mindy\Bundle\RatingBundle\Model\RatingManager;

trait RatingOwnerTrait
{
    /**
     * @return RatingManager
     */
    protected function getRating()
    {
        return Rating::objects()
            ->forObject($this->getObjectType(), $this->getObjectId());
    }

    public function getRatingYes()
    {
        return $this->getRating()->filter(['vote' => true])->count();
    }

    public function getRatingNo()
    {
        return $this->getRating()->filter(['vote' => false])->count();
    }
}