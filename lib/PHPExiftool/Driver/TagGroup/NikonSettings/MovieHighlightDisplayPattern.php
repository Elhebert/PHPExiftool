<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonSettings;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MovieHighlightDisplayPattern extends AbstractTagGroup
{
    protected string $id = 'NikonSettings:MovieHighlightDisplayPattern';

    protected string $name = 'MovieHighlightDisplayPattern';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Movie Highlight Display Pattern',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonSettings::Main
             * line : 170026
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'NikonSettings::Main.NikonSettings:MovieHighlightDisplayPattern',
            'desc' => [
                'en' => 'Movie Highlight Display Pattern',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
