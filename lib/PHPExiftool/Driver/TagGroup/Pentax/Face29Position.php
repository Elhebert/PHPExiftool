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
class Face29Position extends AbstractTagGroup
{
    protected string $id = 'Pentax:Face29Position';

    protected string $name = 'Face29Position';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Face 29 Position',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::FacePos
             * line : 198106
             * type : int16u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Pentax::FacePos.Pentax:Face29Position',
            'desc' => [
                'en' => 'Face 29 Position',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
