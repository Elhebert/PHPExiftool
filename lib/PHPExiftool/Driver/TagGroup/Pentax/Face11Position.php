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
class Face11Position extends AbstractTagGroup
{
    protected string $id = 'Pentax:Face11Position';

    protected string $name = 'Face11Position';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Face 11 Position',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::FacePos
             * line : 198052
             * type : int16u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Pentax::FacePos.Pentax:Face11Position',
            'desc' => [
                'en' => 'Face 11 Position',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
