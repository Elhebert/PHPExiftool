<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PF18EnableAutoAFPointSel extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:PF18EnableAutoAFPointSel';

    protected string $name = 'PF18EnableAutoAFPointSel';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'PF18 Enable Auto AF Point Sel',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::PersonalFuncs
             * line : 57102
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::PersonalFuncs.CanonCustom:PF18EnableAutoAFPointSel',
            'desc' => [
                'en' => 'PF18 Enable Auto AF Point Sel',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
