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
        'en' => 'Image Width',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Red::RED1
             * line : 233110
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Red::RED1.Red:ImageWidth',
            'desc' => [
                'en' => 'Image Width',
            ],
        ],
        1 => [
            /**
             * table_name : Red::RED2
             * line : 233129
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Red::RED2.Red:ImageWidth',
            'desc' => [
                'en' => 'Image Width',
            ],
        ],
    ];

    protected int $count = 0;
}
