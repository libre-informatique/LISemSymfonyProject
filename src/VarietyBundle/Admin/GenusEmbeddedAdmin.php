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

namespace VarietyBundle\Admin;

use Blast\Bundle\CoreBundle\Admin\CoreAdmin;
use Blast\Bundle\CoreBundle\Admin\Traits\EmbeddedAdmin;

class GenusEmbeddedAdmin extends CoreAdmin
{
    use EmbeddedAdmin;

    /**
     * @var string
     */
    protected $translationLabelPrefix = 'sil.variety.genus';

    protected $baseRouteName = 'admin_variety_genusembeddedadmin';
    protected $baseRoutePattern = 'sil/variety/genusembedded';

    public function getExportFields()
    {
        return [
            'name',
            'latinName',
            'alias',
            'family.name',
            'description',
            'createdAt',
            'updatedAt',
        ];
    }
}