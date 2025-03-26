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
class TotalSamples extends AbstractTagGroup
{
    protected string $id = 'GoPro:TotalSamples';

    protected string $name = 'TotalSamples';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Total Samples',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : GoPro::GPMF
             * line : 97767
             * type : ?
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'GoPro::GPMF.GoPro:TotalSamples',
            'desc' => [
                'en' => 'Total Samples',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 32;
}
