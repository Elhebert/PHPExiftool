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
class TimeZoneCity extends AbstractTagGroup
{
    protected string $id = 'Canon:TimeZoneCity';

    protected string $name = 'TimeZoneCity';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::TimeInfo
             * line : 70967
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::TimeInfo.Canon:TimeZoneCity',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
