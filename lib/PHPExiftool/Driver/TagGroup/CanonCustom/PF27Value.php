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
class PF27Value extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:PF27Value';

    protected string $name = 'PF27Value';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'PF27 Value',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::PersonalFuncValues
             * line : 57047
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::PersonalFuncValues.CanonCustom:PF27Value',
            'desc' => [
                'en' => 'PF27 Value',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
