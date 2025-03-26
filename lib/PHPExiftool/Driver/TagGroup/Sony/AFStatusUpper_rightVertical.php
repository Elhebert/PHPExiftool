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
class AFStatusUpper_rightVertical extends AbstractTagGroup
{
    protected string $id = 'Sony:AFStatusUpper-rightVertical';

    protected string $name = 'AFStatusUpper-rightVertical';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Status Upper-right Vertical',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::AFStatus19
             * line : 240822
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::AFStatus19.Sony:AFStatusUpper-rightVertical',
            'desc' => [
                'en' => 'AF Status Upper-right Vertical',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
