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
class MovieVignetteControlSameAsPhoto extends AbstractTagGroup
{
    protected string $id = 'Nikon:MovieVignetteControlSameAsPhoto';

    protected string $name = 'MovieVignetteControlSameAsPhoto';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Movie Vignette Control Same As Photo',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::MenuSettingsZ7II
             * line : 135234
             * type : int8u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Nikon::MenuSettingsZ7II.Nikon:MovieVignetteControlSameAsPhoto',
            'desc' => [
                'en' => 'Movie Vignette Control Same As Photo',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
