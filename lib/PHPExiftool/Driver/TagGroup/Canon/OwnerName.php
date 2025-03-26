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
class OwnerName extends AbstractTagGroup
{
    protected string $id = 'Canon:OwnerName';

    protected string $name = 'OwnerName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Owner Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo450D
             * line : 18014
             * type : string
             * writable : true
             * count : 32
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo450D.Canon:OwnerName',
            'desc' => [
                'en' => 'Owner Name',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::Main
             * line : 48909
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::Main.Canon:OwnerName',
            'desc' => [
                'en' => 'Owner Name',
            ],
        ],
    ];

    protected int $count = 32;

    protected int $flags = 2052;
}
