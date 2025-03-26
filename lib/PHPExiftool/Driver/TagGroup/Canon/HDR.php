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
class HDR extends AbstractTagGroup
{
    protected string $id = 'Canon:HDR';

    protected string $name = 'HDR';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'HDR',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::HDRInfo
             * line : 48693
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::HDRInfo.Canon:HDR',
            'desc' => [
                'en' => 'HDR',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
