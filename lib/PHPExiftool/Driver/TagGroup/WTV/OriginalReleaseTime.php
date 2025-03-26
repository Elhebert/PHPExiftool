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
class OriginalReleaseTime extends AbstractTagGroup
{
    protected string $id = 'WTV:OriginalReleaseTime';

    protected string $name = 'OriginalReleaseTime';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Original Release Time',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : WTV::Metadata
             * line : 280490
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'WTV::Metadata.WTV:OriginalReleaseTime',
            'desc' => [
                'en' => 'Original Release Time',
            ],
        ],
    ];

    protected int $count = 0;
}
