<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SerialNumber extends AbstractTagGroup
{
    protected string $id = 'Kodak:SerialNumber';

    protected string $name = 'SerialNumber';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Serial Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::CameraInfo
             * line : 106004
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::CameraInfo.Kodak:SerialNumber',
            'desc' => [
                'en' => 'Serial Number',
            ],
        ],
        1 => [
            /**
             * table_name : Kodak::Free
             * line : 106073
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Free.Kodak:SerialNumber',
            'desc' => [
                'en' => 'Serial Number',
            ],
        ],
        2 => [
            /**
             * table_name : Kodak::SubIFD0
             * line : 109099
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::SubIFD0.Kodak:SerialNumber',
            'desc' => [
                'en' => 'Serial Number',
            ],
        ],
        3 => [
            /**
             * table_name : Kodak::TextualInfo
             * line : 109491
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::TextualInfo.Kodak:SerialNumber',
            'desc' => [
                'en' => 'Serial Number',
            ],
        ],
        4 => [
            /**
             * table_name : Kodak::Type7
             * line : 109753
             * type : string
             * writable : true
             * count : 16
             * flags : permanent
             */
            'id' => 'Kodak::Type7.Kodak:SerialNumber',
            'desc' => [
                'en' => 'Serial Number',
            ],
        ],
    ];

    protected int $count = 16;

    protected int $flags = 2052;
}
