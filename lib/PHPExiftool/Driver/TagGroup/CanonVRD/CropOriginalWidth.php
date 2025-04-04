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
class CropOriginalWidth extends AbstractTagGroup
{
    protected string $id = 'CanonVRD:CropOriginalWidth';

    protected string $name = 'CropOriginalWidth';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Crop Original Width',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonVRD::CropInfo
             * line : 58528
             * type : int32s
             * writable : true
             * count :
             * flags :
             */
            'id' => 'CanonVRD::CropInfo.CanonVRD:CropOriginalWidth',
            'desc' => [
                'en' => 'Crop Original Width',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
