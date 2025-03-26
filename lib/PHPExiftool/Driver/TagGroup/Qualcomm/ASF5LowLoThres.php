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
class ASF5LowLoThres extends AbstractTagGroup
{
    protected string $id = 'Qualcomm:ASF5LowLoThres';

    protected string $name = 'ASF5LowLoThres';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'ASF5 Low Lo Thres',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Qualcomm::Main
             * line : 213413
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Qualcomm::Main.Qualcomm:ASF5LowLoThres',
            'desc' => [
                'en' => 'ASF5 Low Lo Thres',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
