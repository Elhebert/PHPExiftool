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
class CameraType extends AbstractTagGroup
{
    protected string $id = 'Leaf:CameraType';

    protected string $name = 'CameraType';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Leaf::CameraProfile
             * line : 161590
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Leaf::CameraProfile.Leaf:CameraType',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Leaf::CameraSetup
             * line : 161617
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Leaf::CameraSetup.Leaf:CameraType',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
