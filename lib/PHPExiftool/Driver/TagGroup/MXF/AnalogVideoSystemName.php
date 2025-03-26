<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AnalogVideoSystemName extends AbstractTagGroup
{
    protected string $id = 'MXF:AnalogVideoSystemName';

    protected string $name = 'AnalogVideoSystemName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Analog Video System Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 114389
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:AnalogVideoSystemName',
            'desc' => [
                'en' => 'Analog Video System Name',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 115493
             * type : ?
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'MXF::Main.MXF:AnalogVideoSystemName',
            'desc' => [
                'en' => 'Analog Video System Name',
            ],
        ],
    ];

    protected int $count = 0;
}
