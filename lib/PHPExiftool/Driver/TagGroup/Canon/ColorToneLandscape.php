<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorToneLandscape extends AbstractTagGroup
{
    protected string $id = 'Canon:ColorToneLandscape';

    protected string $name = 'ColorToneLandscape';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Tone Landscape',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo5D
             * line : 26575
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5D.Canon:ColorToneLandscape',
            'desc' => [
                'en' => 'Color Tone Landscape',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::PSInfo
             * line : 51017
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::PSInfo.Canon:ColorToneLandscape',
            'desc' => [
                'en' => 'Color Tone Landscape',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::PSInfo2
             * line : 51678
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::PSInfo2.Canon:ColorToneLandscape',
            'desc' => [
                'en' => 'Color Tone Landscape',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
