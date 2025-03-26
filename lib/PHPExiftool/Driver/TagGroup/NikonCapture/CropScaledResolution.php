<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonCapture;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CropScaledResolution extends AbstractTagGroup
{
    protected string $id = 'NikonCapture:CropScaledResolution';

    protected string $name = 'CropScaledResolution';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Crop Scaled Resolution',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCapture::CropData
             * line : 141561
             * type : double
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCapture::CropData.NikonCapture:CropScaledResolution',
            'desc' => [
                'en' => 'Crop Scaled Resolution',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
