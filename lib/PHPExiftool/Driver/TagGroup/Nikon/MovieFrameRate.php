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
class MovieFrameRate extends AbstractTagGroup
{
    protected string $id = 'Nikon:MovieFrameRate';

    protected string $name = 'MovieFrameRate';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::MenuSettingsZ7II
             * line : 200067
             * type : int8u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Nikon::MenuSettingsZ7II.Nikon:MovieFrameRate',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::MenuSettingsZ9
             * line : 201701
             * type : int8u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Nikon::MenuSettingsZ9.Nikon:MovieFrameRate',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
