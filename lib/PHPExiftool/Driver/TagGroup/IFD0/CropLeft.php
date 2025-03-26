<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CropLeft extends AbstractTagGroup
{
    protected string $id = 'IFD0:CropLeft';

    protected string $name = 'CropLeft';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Crop Left',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PanasonicRaw::Main
             * line : 194640
             * type : int16u
             * writable : true
             * count :
             * flags :
             */
            'id' => 'PanasonicRaw::Main.IFD0:CropLeft',
            'desc' => [
                'en' => 'Crop Left',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
