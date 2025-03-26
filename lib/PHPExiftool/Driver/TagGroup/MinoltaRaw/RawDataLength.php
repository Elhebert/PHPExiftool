<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MinoltaRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RawDataLength extends AbstractTagGroup
{
    protected string $id = 'MinoltaRaw:RawDataLength';

    protected string $name = 'RawDataLength';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Raw Data Length',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MinoltaRaw::RIF
             * line : 127201
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'MinoltaRaw::RIF.MinoltaRaw:RawDataLength',
            'desc' => [
                'en' => 'Raw Data Length',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
