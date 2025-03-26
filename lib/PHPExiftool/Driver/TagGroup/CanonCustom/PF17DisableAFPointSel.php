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
class PF17DisableAFPointSel extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:PF17DisableAFPointSel';

    protected string $name = 'PF17DisableAFPointSel';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'PF17 Disable AF Point Sel',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::PersonalFuncs
             * line : 57099
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::PersonalFuncs.CanonCustom:PF17DisableAFPointSel',
            'desc' => [
                'en' => 'PF17 Disable AF Point Sel',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
