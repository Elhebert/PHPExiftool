<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Composite;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LensID extends AbstractTagGroup
{
    protected string $id = 'Composite:LensID';

    protected string $name = 'LensID';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Lens ID',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Composite
             * line : 65176
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Composite.Composite:LensID',
            'desc' => [
                'en' => 'Lens ID',
            ],
        ],
        1 => [
            /**
             * table_name : Composite
             * line : 65179
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Composite.Composite:LensID',
            'desc' => [
                'en' => 'Lens ID',
            ],
        ],
        2 => [
            /**
             * table_name : Composite
             * line : 65354
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Composite.Composite:LensID',
            'desc' => [
                'en' => 'Lens ID',
            ],
        ],
        3 => [
            /**
             * table_name : Composite
             * line : 67863
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Composite.Composite:LensID',
            'desc' => [
                'en' => 'Lens ID',
            ],
        ],
        4 => [
            /**
             * table_name : Composite
             * line : 68052
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Composite.Composite:LensID',
            'desc' => [
                'en' => 'Lens ID',
            ],
        ],
    ];

    protected int $count = 0;
}
