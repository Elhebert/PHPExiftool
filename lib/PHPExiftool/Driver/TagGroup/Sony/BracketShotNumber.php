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
class BracketShotNumber extends AbstractTagGroup
{
    protected string $id = 'Sony:BracketShotNumber';

    protected string $name = 'BracketShotNumber';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Bracket Shot Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::FocusInfo
             * line : 246471
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::FocusInfo.Sony:BracketShotNumber',
            'desc' => [
                'en' => 'Bracket Shot Number',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
