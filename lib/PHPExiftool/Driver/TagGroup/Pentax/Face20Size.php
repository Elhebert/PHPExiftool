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
class Face20Size extends AbstractTagGroup
{
    protected string $id = 'Pentax:Face20Size';

    protected string $name = 'Face20Size';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Face 20 Size',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::FaceSize
             * line : 198179
             * type : int16u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Pentax::FaceSize.Pentax:Face20Size',
            'desc' => [
                'en' => 'Face 20 Size',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
