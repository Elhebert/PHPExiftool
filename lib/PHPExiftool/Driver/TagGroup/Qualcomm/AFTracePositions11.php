<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Qualcomm;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFTracePositions11 extends AbstractTagGroup
{
    protected string $id = 'Qualcomm:AFTracePositions11';

    protected string $name = 'AFTracePositions11';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'AF Trace Positions 11',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Qualcomm::Main
             * line : 212783
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Qualcomm::Main.Qualcomm:AFTracePositions11',
            'desc' => [
                'en' => 'AF Trace Positions 11',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
