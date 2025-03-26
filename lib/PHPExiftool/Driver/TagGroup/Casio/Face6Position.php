<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Casio;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Face6Position extends AbstractTagGroup
{
    protected string $id = 'Casio:Face6Position';

    protected string $name = 'Face6Position';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Face 6 Position',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Casio::FaceInfo1
             * line : 61509
             * type : int16u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Casio::FaceInfo1.Casio:Face6Position',
            'desc' => [
                'en' => 'Face 6 Position',
            ],
        ],
        1 => [
            /**
             * table_name : Casio::FaceInfo2
             * line : 61566
             * type : int16u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Casio::FaceInfo2.Casio:Face6Position',
            'desc' => [
                'en' => 'Face 6 Position',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
