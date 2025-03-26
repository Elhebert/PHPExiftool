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
class MovieToneMap extends AbstractTagGroup
{
    protected string $id = 'Nikon:MovieToneMap';

    protected string $name = 'MovieToneMap';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Movie Tone Map',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::MenuSettingsZ9
             * line : 136567
             * type : int8u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Nikon::MenuSettingsZ9.Nikon:MovieToneMap',
            'desc' => [
                'en' => 'Movie Tone Map',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
