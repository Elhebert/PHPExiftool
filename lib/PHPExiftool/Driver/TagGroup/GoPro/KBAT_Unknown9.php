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
class KBAT_Unknown9 extends AbstractTagGroup
{
    protected string $id = 'GoPro:KBAT_Unknown9';

    protected string $name = 'KBAT_Unknown9';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'KBAT Unknown 9',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : GoPro::KBAT
             * line : 97889
             * type : ?
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'GoPro::KBAT.GoPro:KBAT_Unknown9',
            'desc' => [
                'en' => 'KBAT Unknown 9',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 32;
}
