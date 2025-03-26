<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RatingPercent extends AbstractTagGroup
{
    protected string $id = 'IFD0:RatingPercent';

    protected string $name = 'RatingPercent';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Rating Percent',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 82126
             * type : int16u
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'Exif::Main.IFD0:RatingPercent',
            'desc' => [
                'en' => 'Rating Percent',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
