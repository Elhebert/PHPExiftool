<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RawBurstImageCount extends AbstractTagGroup
{
    protected string $id = 'Canon:RawBurstImageCount';

    protected string $name = 'RawBurstImageCount';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Raw Burst Image Count',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::RawBurstInfo
             * line : 52591
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::RawBurstInfo.Canon:RawBurstImageCount',
            'desc' => [
                'en' => 'Raw Burst Image Count',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
