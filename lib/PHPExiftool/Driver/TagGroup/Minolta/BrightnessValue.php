<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BrightnessValue extends AbstractTagGroup
{
    protected string $id = 'Minolta:BrightnessValue';

    protected string $name = 'BrightnessValue';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Brightness Value',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::WBInfoA100
             * line : 125937
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::WBInfoA100.Minolta:BrightnessValue',
            'desc' => [
                'en' => 'Brightness Value',
            ],
        ],
        1 => [
            /**
             * table_name : Minolta::WBInfoA100
             * line : 126859
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::WBInfoA100.Minolta:BrightnessValue',
            'desc' => [
                'en' => 'Brightness Value',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
