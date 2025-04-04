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
class CropRotation extends AbstractTagGroup
{
    protected string $id = 'CanonVRD:CropRotation';

    protected string $name = 'CropRotation';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Crop Rotation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonVRD::CropInfo
             * line : 58525
             * type : double
             * writable : true
             * count :
             * flags :
             */
            'id' => 'CanonVRD::CropInfo.CanonVRD:CropRotation',
            'desc' => [
                'en' => 'Crop Rotation',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
