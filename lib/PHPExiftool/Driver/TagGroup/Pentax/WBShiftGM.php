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
class WBShiftGM extends AbstractTagGroup
{
    protected string $id = 'Pentax:WBShiftGM';

    protected string $name = 'WBShiftGM';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'WB Shift GM',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::ColorInfo
             * line : 197979
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::ColorInfo.Pentax:WBShiftGM',
            'desc' => [
                'en' => 'WB Shift GM',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
