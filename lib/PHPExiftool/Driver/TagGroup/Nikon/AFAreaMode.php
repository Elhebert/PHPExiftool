<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFAreaMode extends AbstractTagGroup
{
    protected string $id = 'Nikon:AFAreaMode';

    protected string $name = 'AFAreaMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Area Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::AFInfo
             * line : 127237
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo.Nikon:AFAreaMode',
            'desc' => [
                'en' => 'AF Area Mode',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::AFInfo2
             * line : 127363
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo2.Nikon:AFAreaMode',
            'desc' => [
                'en' => 'AF Area Mode',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::AFInfo2
             * line : 127452
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo2.Nikon:AFAreaMode',
            'desc' => [
                'en' => 'AF Area Mode',
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::MenuSettingsZ9
             * line : 135989
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::MenuSettingsZ9.Nikon:AFAreaMode',
            'desc' => [
                'en' => 'AF Area Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
