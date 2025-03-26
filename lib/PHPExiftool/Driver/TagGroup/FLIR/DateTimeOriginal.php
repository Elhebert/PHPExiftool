<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DateTimeOriginal extends AbstractTagGroup
{
    protected string $id = 'FLIR:DateTimeOriginal';

    protected string $name = 'DateTimeOriginal';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Date/Time Original',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FLIR::CameraInfo
             * line : 85695
             * type : undef
             * writable : false
             * count : 10
             * flags :
             */
            'id' => 'FLIR::CameraInfo.FLIR:DateTimeOriginal',
            'desc' => [
                'en' => 'Date/Time Original',
            ],
        ],
        1 => [
            /**
             * table_name : FLIR::FPF
             * line : 85871
             * type : int32u
             * writable : false
             * count : 7
             * flags :
             */
            'id' => 'FLIR::FPF.FLIR:DateTimeOriginal',
            'desc' => [
                'en' => 'Date/Time Original',
            ],
        ],
    ];
}
