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
class LensModel extends AbstractTagGroup
{
    protected string $id = 'Canon:LensModel';

    protected string $name = 'LensModel';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Lens Model',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo1000D
             * line : 4437
             * type : string
             * writable : true
             * count : 64
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1000D.Canon:LensModel',
            'desc' => [
                'en' => 'Lens Model',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::CameraInfo40D
             * line : 16391
             * type : string
             * writable : true
             * count : 64
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo40D.Canon:LensModel',
            'desc' => [
                'en' => 'Lens Model',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::CameraInfo450D
             * line : 18023
             * type : string
             * writable : true
             * count : 64
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo450D.Canon:LensModel',
            'desc' => [
                'en' => 'Lens Model',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::Main
             * line : 50050
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::Main.Canon:LensModel',
            'desc' => [
                'en' => 'Lens Model',
            ],
        ],
    ];

    protected int $count = 64;

    protected int $flags = 2052;
}
