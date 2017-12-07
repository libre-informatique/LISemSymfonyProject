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

namespace SeedBatchBundle\Entity\Association;

use SeedBatchBundle\Entity\SeedBatchInterface;

trait HasSeedBatchTrait
{
    /**
     * @var SeedBatchInterface
     */
    protected $seedBatch;

    /**
     * Get seed batch.
     *
     * @return SeedBatchInterface
     */
    public function getSeedBatch(): ?SeedBatchInterface
    {
        return $this->seedBatch;
    }

    /**
     * Set seed batch.
     *
     * @param SeedBatchInterface $seedBatch
     *
     * @return self
     */
    public function setSeedBatch(SeedBatchInterface $seedBatch)
    {
        $this->seedBatch = $seedBatch;

        return $this;
    }
}