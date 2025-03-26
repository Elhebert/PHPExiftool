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
class CropHiSpeed extends AbstractTagGroup
{
    protected string $id = 'Nikon:CropHiSpeed';

    protected string $name = 'CropHiSpeed';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::Main
             * line : 196841
             * type : int16u
             * writable : true
             * count : 7
             * flags : permanent
             */
            'id' => 'Nikon::Main.Nikon:CropHiSpeed',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::NCTG
             * line : 203179
             * type : int16u
             * writable : true
             * count : 7
             * flags : permanent
             */
            'id' => 'Nikon::NCTG.Nikon:CropHiSpeed',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 7;

    protected int $flags = 2052;
}
