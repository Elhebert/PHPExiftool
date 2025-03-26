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
class ObjectDistance extends AbstractTagGroup
{
    protected string $id = 'FLIR:ObjectDistance';

    protected string $name = 'ObjectDistance';

    protected ?string $phpType = 'float';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Object Distance',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FLIR::CameraInfo
             * line : 85578
             * type : float
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FLIR::CameraInfo.FLIR:ObjectDistance',
            'desc' => [
                'en' => 'Object Distance',
            ],
        ],
        1 => [
            /**
             * table_name : FLIR::FPF
             * line : 85844
             * type : float
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FLIR::FPF.FLIR:ObjectDistance',
            'desc' => [
                'en' => 'Object Distance',
            ],
        ],
        2 => [
            /**
             * table_name : FLIR::Params
             * line : 86384
             * type : float
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'FLIR::Params.FLIR:ObjectDistance',
            'desc' => [
                'en' => 'Object Distance',
            ],
        ],
    ];

    protected int $count = 0;
}
