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
class MovieFocusMode extends AbstractTagGroup
{
    protected string $id = 'Nikon:MovieFocusMode';

    protected string $name = 'MovieFocusMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Movie Focus Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::MenuSettingsZ7II
             * line : 135267
             * type : int8u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Nikon::MenuSettingsZ7II.Nikon:MovieFocusMode',
            'desc' => [
                'en' => 'Movie Focus Mode',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::MenuSettingsZ9
             * line : 136455
             * type : int8u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Nikon::MenuSettingsZ9.Nikon:MovieFocusMode',
            'desc' => [
                'en' => 'Movie Focus Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
