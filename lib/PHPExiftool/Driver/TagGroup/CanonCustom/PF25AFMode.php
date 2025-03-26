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
class PF25AFMode extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:PF25AFMode';

    protected string $name = 'PF25AFMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'PF25 AF Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::PersonalFuncValues
             * line : 57029
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::PersonalFuncValues.CanonCustom:PF25AFMode',
            'desc' => [
                'en' => 'PF25 AF Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
