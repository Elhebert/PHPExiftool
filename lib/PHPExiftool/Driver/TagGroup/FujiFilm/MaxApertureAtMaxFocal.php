<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FujiFilm;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MaxApertureAtMaxFocal extends AbstractTagGroup
{
    protected string $id = 'FujiFilm:MaxApertureAtMaxFocal';

    protected string $name = 'MaxApertureAtMaxFocal';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Max Aperture At Max Focal',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FujiFilm::Main
             * line : 90276
             * type : rational64s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'FujiFilm::Main.FujiFilm:MaxApertureAtMaxFocal',
            'desc' => [
                'en' => 'Max Aperture At Max Focal',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
