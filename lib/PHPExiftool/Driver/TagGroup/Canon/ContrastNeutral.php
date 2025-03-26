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
class ContrastNeutral extends AbstractTagGroup
{
    protected string $id = 'Canon:ContrastNeutral';

    protected string $name = 'ContrastNeutral';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Contrast Neutral',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo5D
             * line : 26477
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5D.Canon:ContrastNeutral',
            'desc' => [
                'en' => 'Contrast Neutral',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::PSInfo
             * line : 51041
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::PSInfo.Canon:ContrastNeutral',
            'desc' => [
                'en' => 'Contrast Neutral',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::PSInfo2
             * line : 51702
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::PSInfo2.Canon:ContrastNeutral',
            'desc' => [
                'en' => 'Contrast Neutral',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
