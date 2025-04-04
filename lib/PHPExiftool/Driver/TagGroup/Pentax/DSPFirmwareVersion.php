<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DSPFirmwareVersion extends AbstractTagGroup
{
    protected string $id = 'Pentax:DSPFirmwareVersion';

    protected string $name = 'DSPFirmwareVersion';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'DSP Firmware Version',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::Main
             * line : 208443
             * type : undef
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::Main.Pentax:DSPFirmwareVersion',
            'desc' => [
                'en' => 'DSP Firmware Version',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
