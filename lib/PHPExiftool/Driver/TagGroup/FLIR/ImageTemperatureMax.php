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
class ImageTemperatureMax extends AbstractTagGroup
{
    protected string $id = 'FLIR:ImageTemperatureMax';

    protected string $name = 'ImageTemperatureMax';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Image Temperature Max',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FLIR::Main
             * line : 86035
             * type : rational64u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'FLIR::Main.FLIR:ImageTemperatureMax',
            'desc' => [
                'en' => 'Image Temperature Max',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
