<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GoPro;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPRI_Unknown8 extends AbstractTagGroup
{
    protected string $id = 'GoPro:GPRI_Unknown8';

    protected string $name = 'GPRI_Unknown8';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'GPRI Unknown 8',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : GoPro::GPRI
             * line : 97833
             * type : ?
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'GoPro::GPRI.GoPro:GPRI_Unknown8',
            'desc' => [
                'en' => 'GPRI Unknown 8',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 32;
}
