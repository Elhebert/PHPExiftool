<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFStatus_54_E6_Center extends AbstractTagGroup
{
    protected string $id = 'Sony:AFStatus_54_E6_Center';

    protected string $name = 'AFStatus_54_E6_Center';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Status 54 E6 Center',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::AFStatus79
             * line : 241453
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::AFStatus79.Sony:AFStatus_54_E6_Center',
            'desc' => [
                'en' => 'AF Status 54 E6 Center',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
