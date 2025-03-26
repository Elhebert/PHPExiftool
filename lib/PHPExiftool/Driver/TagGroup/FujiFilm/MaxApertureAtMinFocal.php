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
class MaxApertureAtMinFocal extends AbstractTagGroup
{
    protected string $id = 'FujiFilm:MaxApertureAtMinFocal';

    protected string $name = 'MaxApertureAtMinFocal';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Max Aperture At Min Focal',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FujiFilm::Main
             * line : 90273
             * type : rational64s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'FujiFilm::Main.FujiFilm:MaxApertureAtMinFocal',
            'desc' => [
                'en' => 'Max Aperture At Min Focal',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
