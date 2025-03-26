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
class FrameRate extends AbstractTagGroup
{
    protected string $id = 'Red:FrameRate';

    protected string $name = 'FrameRate';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Frame Rate',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Red::RED1
             * line : 233116
             * type : rational32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Red::RED1.Red:FrameRate',
            'desc' => [
                'en' => 'Frame Rate',
            ],
        ],
        1 => [
            /**
             * table_name : Red::RED2
             * line : 233135
             * type : int16u
             * writable : false
             * count : 3
             * flags :
             */
            'id' => 'Red::RED2.Red:FrameRate',
            'desc' => [
                'en' => 'Frame Rate',
            ],
        ],
    ];

    protected int $count = 3;
}
