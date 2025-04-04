<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sanyo;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FacePosition extends AbstractTagGroup
{
    protected string $id = 'Sanyo:FacePosition';

    protected string $name = 'FacePosition';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Face Position',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sanyo::FaceInfo
             * line : 235561
             * type : int32u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Sanyo::FaceInfo.Sanyo:FacePosition',
            'desc' => [
                'en' => 'Face Position',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
