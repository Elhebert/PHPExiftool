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
class MovieISOAutoHiLimit extends AbstractTagGroup
{
    protected string $id = 'Nikon:MovieISOAutoHiLimit';

    protected string $name = 'MovieISOAutoHiLimit';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Movie ISO Auto Hi Limit',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::MenuSettingsZ9
             * line : 136180
             * type : int16u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Nikon::MenuSettingsZ9.Nikon:MovieISOAutoHiLimit',
            'desc' => [
                'en' => 'Movie ISO Auto Hi Limit',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
