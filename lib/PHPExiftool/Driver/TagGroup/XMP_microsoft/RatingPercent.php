<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_microsoft;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RatingPercent extends AbstractTagGroup
{
    protected string $id = 'XMP-microsoft:RatingPercent';

    protected string $name = 'RatingPercent';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Rating Percent',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Microsoft::XMP
             * line : 120100
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'Microsoft::XMP.XMP-microsoft:RatingPercent',
            'desc' => [
                'en' => 'Rating Percent',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
