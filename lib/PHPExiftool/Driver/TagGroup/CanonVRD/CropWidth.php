<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonVRD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CropWidth extends AbstractTagGroup
{
    protected string $id = 'CanonVRD:CropWidth';

    protected string $name = 'CropWidth';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Crop Width',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonVRD::CropInfo
             * line : 58519
             * type : int32s
             * writable : true
             * count :
             * flags :
             */
            'id' => 'CanonVRD::CropInfo.CanonVRD:CropWidth',
            'desc' => [
                'en' => 'Crop Width',
            ],
        ],
        1 => [
            /**
             * table_name : CanonVRD::Ver1
             * line : 60435
             * type : int16u
             * writable : true
             * count :
             * flags :
             */
            'id' => 'CanonVRD::Ver1.CanonVRD:CropWidth',
            'desc' => [
                'en' => 'Crop Width',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
