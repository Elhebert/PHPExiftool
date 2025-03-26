<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BracketIncrement extends AbstractTagGroup
{
    protected string $id = 'Nikon:BracketIncrement';

    protected string $name = 'BracketIncrement';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Bracket Increment',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::MenuSettingsZ9
             * line : 136078
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::MenuSettingsZ9.Nikon:BracketIncrement',
            'desc' => [
                'en' => 'Bracket Increment',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
