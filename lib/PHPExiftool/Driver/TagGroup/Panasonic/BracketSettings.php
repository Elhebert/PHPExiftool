<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Panasonic;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BracketSettings extends AbstractTagGroup
{
    protected string $id = 'Panasonic:BracketSettings';

    protected string $name = 'BracketSettings';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Bracket Settings',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Panasonic::Main
             * line : 192804
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::Main.Panasonic:BracketSettings',
            'desc' => [
                'en' => 'Bracket Settings',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
