<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Face13Position extends AbstractTagGroup
{
    protected string $id = 'Pentax:Face13Position';

    protected string $name = 'Face13Position';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Face 13 Position',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::FacePos
             * line : 198058
             * type : int16u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Pentax::FacePos.Pentax:Face13Position',
            'desc' => [
                'en' => 'Face 13 Position',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
