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
class ExposureCompensation extends AbstractTagGroup
{
    protected string $id = 'FujiFilm:ExposureCompensation';

    protected string $name = 'ExposureCompensation';

    protected ?string $phpType = 'float';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FujiFilm::MOV
             * line : 128811
             * type : rational64s
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'FujiFilm::MOV.FujiFilm:ExposureCompensation',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
