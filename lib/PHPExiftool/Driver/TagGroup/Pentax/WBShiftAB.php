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
class WBShiftAB extends AbstractTagGroup
{
    protected string $id = 'Pentax:WBShiftAB';

    protected string $name = 'WBShiftAB';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'WB Shift AB',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::ColorInfo
             * line : 197976
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::ColorInfo.Pentax:WBShiftAB',
            'desc' => [
                'en' => 'WB Shift AB',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
