<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class HDRSmoothing extends AbstractTagGroup
{
    protected string $id = 'Nikon:HDRSmoothing';

    protected string $name = 'HDRSmoothing';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'HDR Smoothing',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::HDRInfo
             * line : 132288
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::HDRInfo.Nikon:HDRSmoothing',
            'desc' => [
                'en' => 'HDR Smoothing',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
