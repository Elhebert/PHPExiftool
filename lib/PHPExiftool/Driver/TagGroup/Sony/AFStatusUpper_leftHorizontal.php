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
class AFStatusUpper_leftHorizontal extends AbstractTagGroup
{
    protected string $id = 'Sony:AFStatusUpper-leftHorizontal';

    protected string $name = 'AFStatusUpper-leftHorizontal';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Status Upper-left Horizontal',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::AFStatus19
             * line : 240536
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::AFStatus19.Sony:AFStatusUpper-leftHorizontal',
            'desc' => [
                'en' => 'AF Status Upper-left Horizontal',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
