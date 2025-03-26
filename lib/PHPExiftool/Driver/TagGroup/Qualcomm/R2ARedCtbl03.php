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
class R2ARedCtbl03 extends AbstractTagGroup
{
    protected string $id = 'Qualcomm:R2ARedCtbl03';

    protected string $name = 'R2ARedCtbl03';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'R2 A Red Ctbl 03',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Qualcomm::Main
             * line : 214463
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Qualcomm::Main.Qualcomm:R2ARedCtbl03',
            'desc' => [
                'en' => 'R2 A Red Ctbl 03',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
