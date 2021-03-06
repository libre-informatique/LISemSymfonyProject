<?php

/*
 * This file is part of the Lisem Project.
 *
 * Copyright (C) 2015-2017 Libre Informatique
 *
 * This file is licenced under the GNU GPL v3.
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace AppBundle\Entity\OuterExtension\LibrinfoCRMBundle;

use Librinfo\SonataSyliusUserBundle\Entity\Traits\Traceable;
use Librinfo\SonataSyliusUserBundle\Entity\Traits\Ownable;
use Librinfo\SonataSyliusUserBundle\Entity\Traits\OuterExtension\HasUsers;
use Symfony\Component\Security\Core\User\UserInterface;

trait CircleExtension
{
    use Traceable,
//        Ownable,
        HasUsers;

    /**
     * @param UserInterface $user
     *
     * @return bool
     */
    public function isAccessibleBy(UserInterface $user)
    {
        // no owner and no users : everybody has access to the circle
        if (!$this->getOwner() && $this->getUsers()->isEmpty()) {
            return true;
        }

        // current user is the circle owner
        if ($this->getOwner() && $user->getId() === $this->getOwner()->getId()) {
            return true;
        }

        // current user belongs to the circle users
        foreach ($this->getUsers() as $u) {
            if ($user->getId() === $u->getId()) {
                return true;
            }
        }

        return false;
    }
}
