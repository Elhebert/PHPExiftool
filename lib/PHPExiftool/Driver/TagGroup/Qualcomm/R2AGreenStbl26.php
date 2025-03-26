<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Qualcomm;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class R2AGreenStbl26 extends AbstractTagGroup
{
    protected string $id = 'Qualcomm:R2AGreenStbl26';

    protected string $name = 'R2AGreenStbl26';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'R2 A Green Stbl 26',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Qualcomm::Main
             * line : 214340
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Qualcomm::Main.Qualcomm:R2AGreenStbl26',
            'desc' => [
                'en' => 'R2 A Green Stbl 26',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
