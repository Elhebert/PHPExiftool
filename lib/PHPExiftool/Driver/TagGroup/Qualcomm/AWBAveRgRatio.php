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
class AWBAveRgRatio extends AbstractTagGroup
{
    protected string $id = 'Qualcomm:AWBAveRgRatio';

    protected string $name = 'AWBAveRgRatio';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'AWB Ave Rg Ratio',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Qualcomm::Main
             * line : 213491
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Qualcomm::Main.Qualcomm:AWBAveRgRatio',
            'desc' => [
                'en' => 'AWB Ave Rg Ratio',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
