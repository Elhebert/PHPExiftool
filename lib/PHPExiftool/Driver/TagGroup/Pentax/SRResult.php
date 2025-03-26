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
class SRResult extends AbstractTagGroup
{
    protected string $id = 'Pentax:SRResult';

    protected string $name = 'SRResult';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'SR Result',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::SRInfo
             * line : 209864
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::SRInfo.Pentax:SRResult',
            'desc' => [
                'en' => 'SR Result',
            ],
        ],
        1 => [
            /**
             * table_name : Pentax::SRInfo2
             * line : 209923
             * type : int8u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Pentax::SRInfo2.Pentax:SRResult',
            'desc' => [
                'en' => 'SR Result',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
