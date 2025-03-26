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
class AFRSlower1Trigger extends AbstractTagGroup
{
    protected string $id = 'Qualcomm:AFRSlower1Trigger';

    protected string $name = 'AFRSlower1Trigger';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'AFR Slower 1 Trigger',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Qualcomm::Main
             * line : 213140
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Qualcomm::Main.Qualcomm:AFRSlower1Trigger',
            'desc' => [
                'en' => 'AFR Slower 1 Trigger',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
