<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLAC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TotalSamples extends AbstractTagGroup
{
    protected string $id = 'FLAC:TotalSamples';

    protected string $name = 'TotalSamples';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Total Samples',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FLAC::StreamInfo
             * line : 85460
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FLAC::StreamInfo.FLAC:TotalSamples',
            'desc' => [
                'en' => 'Total Samples',
            ],
        ],
    ];

    protected int $count = 0;
}
