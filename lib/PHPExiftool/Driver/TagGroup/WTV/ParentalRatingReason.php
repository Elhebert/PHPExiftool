<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\WTV;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ParentalRatingReason extends AbstractTagGroup
{
    protected string $id = 'WTV:ParentalRatingReason';

    protected string $name = 'ParentalRatingReason';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Parental Rating Reason',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : WTV::Metadata
             * line : 280496
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'WTV::Metadata.WTV:ParentalRatingReason',
            'desc' => [
                'en' => 'Parental Rating Reason',
            ],
        ],
    ];

    protected int $count = 0;
}
