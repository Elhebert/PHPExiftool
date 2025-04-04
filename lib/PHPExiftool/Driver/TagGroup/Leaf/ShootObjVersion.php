<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Leaf;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ShootObjVersion extends AbstractTagGroup
{
    protected string $id = 'Leaf:ShootObjVersion';

    protected string $name = 'ShootObjVersion';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Shoot Obj Version',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Leaf::ShootSetup
             * line : 110786
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Leaf::ShootSetup.Leaf:ShootObjVersion',
            'desc' => [
                'en' => 'Shoot Obj Version',
            ],
        ],
    ];

    protected int $count = 0;
}
