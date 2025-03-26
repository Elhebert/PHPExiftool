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
class ModeDialPosition extends AbstractTagGroup
{
    protected string $id = 'Sony:ModeDialPosition';

    protected string $name = 'ModeDialPosition';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Mode Dial Position',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::ExtraInfo3
             * line : 246134
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::ExtraInfo3.Sony:ModeDialPosition',
            'desc' => [
                'en' => 'Mode Dial Position',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
