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
class FocalType extends AbstractTagGroup
{
    protected string $id = 'Canon:FocalType';

    protected string $name = 'FocalType';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Focal Type',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo1DmkII
             * line : 9477
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkII.Canon:FocalType',
            'desc' => [
                'en' => 'Focal Type',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::FocalLength
             * line : 48663
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::FocalLength.Canon:FocalType',
            'desc' => [
                'en' => 'Focal Type',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
