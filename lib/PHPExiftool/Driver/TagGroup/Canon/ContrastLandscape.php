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
class ContrastLandscape extends AbstractTagGroup
{
    protected string $id = 'Canon:ContrastLandscape';

    protected string $name = 'ContrastLandscape';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Contrast Landscape',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo5D
             * line : 26474
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5D.Canon:ContrastLandscape',
            'desc' => [
                'en' => 'Contrast Landscape',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::PSInfo
             * line : 50993
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::PSInfo.Canon:ContrastLandscape',
            'desc' => [
                'en' => 'Contrast Landscape',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::PSInfo2
             * line : 51654
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::PSInfo2.Canon:ContrastLandscape',
            'desc' => [
                'en' => 'Contrast Landscape',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
