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
class AFRFaster2ExpMod extends AbstractTagGroup
{
    protected string $id = 'Qualcomm:AFRFaster2ExpMod';

    protected string $name = 'AFRFaster2ExpMod';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'AFR Faster 2 Exp Mod',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Qualcomm::Main
             * line : 213110
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Qualcomm::Main.Qualcomm:AFRFaster2ExpMod',
            'desc' => [
                'en' => 'AFR Faster 2 Exp Mod',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
