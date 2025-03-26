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
class CameraBackType extends AbstractTagGroup
{
    protected string $id = 'Leaf:CameraBackType';

    protected string $name = 'CameraBackType';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Leaf::CameraProfile
             * line : 161583
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Leaf::CameraProfile.Leaf:CameraBackType',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
