<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Red;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageWidth extends AbstractTagGroup
{
    protected string $id = 'Red:ImageWidth';

    protected string $name = 'ImageWidth';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Red::RED1
             * line : 331669
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Red::RED1.Red:ImageWidth',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Red::RED2
             * line : 331737
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Red::RED2.Red:ImageWidth',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
