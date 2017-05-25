<?php

/*
 * This file is part of Mindy Framework.
 * (c) 2017 Maxim Falaleev
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Mindy\Bundle\RatingBundle\Model;

use Mindy\Orm\Fields\BooleanField;
use Mindy\Orm\Fields\CharField;
use Mindy\Orm\Fields\IntField;
use Mindy\Orm\Fields\IpField;
use Mindy\Orm\Model;

/**
 * Class Rating
 *
 * @method static \Mindy\Bundle\RatingBundle\Model\RatingManager objects($instance = null);
 */
class Rating extends Model
{
    public static function getFields()
    {
        return [
            'object_type' => [
                'class' => CharField::class,
                'editable' => false,
            ],
            'object_id' => [
                'class' => IntField::class,
                'editable' => false,
            ],
            'vote' => [
                'class' => BooleanField::class,
                'default' => 0,
            ],
            'ip' => [
                'class' => IpField::class,
                'null' => true,
            ],
        ];
    }
}
