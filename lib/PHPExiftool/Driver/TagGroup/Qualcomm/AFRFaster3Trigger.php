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
class AFRFaster3Trigger extends AbstractTagGroup
{
    protected string $id = 'Qualcomm:AFRFaster3Trigger';

    protected string $name = 'AFRFaster3Trigger';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'AFR Faster 3 Trigger',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Qualcomm::Main
             * line : 213119
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Qualcomm::Main.Qualcomm:AFRFaster3Trigger',
            'desc' => [
                'en' => 'AFR Faster 3 Trigger',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
