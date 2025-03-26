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
class MaxFocalLength extends AbstractTagGroup
{
    protected string $id = 'FujiFilm:MaxFocalLength';

    protected string $name = 'MaxFocalLength';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Max Focal Length',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FujiFilm::Main
             * line : 90270
             * type : rational64s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'FujiFilm::Main.FujiFilm:MaxFocalLength',
            'desc' => [
                'en' => 'Max Focal Length',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
