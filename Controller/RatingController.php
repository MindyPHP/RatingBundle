<?php

/*
 * This file is part of Mindy Framework.
 * (c) 2017 Maxim Falaleev
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Mindy\Bundle\RatingBundle\Controller;

use Mindy\Bundle\MindyBundle\Controller\Controller;
use Mindy\Bundle\RatingBundle\Model\Rating;
use Symfony\Component\HttpFoundation\Request;

class RatingController extends Controller
{
    public function voteAction(Request $request, $type, $id, $vote)
    {
        $qs = Rating::objects()
            ->forObject($type, $id)
            ->filter(['ip' => $request->getClientIp()]);

        if ($qs->count() > 0) {
            return $this->json([
                'status' => false
            ]);
        }

        $rating = new Rating([
            'object_type' => $type,
            'object_id' => $id,
            'ip' => $request->getClientIp(),
            'vote' => $vote
        ]);
        if ($rating->isValid()) {
            if (false === $rating->save()) {
                throw new \RuntimeException('Can not save rating');
            }

            return $this->json([
                'status' => true
            ]);
        }

        return $this->json([
            'status' => false
        ]);
    }
}