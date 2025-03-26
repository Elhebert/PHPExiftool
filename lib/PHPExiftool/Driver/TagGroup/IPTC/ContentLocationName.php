<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IPTC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ContentLocationName extends AbstractTagGroup
{
    protected string $id = 'IPTC:ContentLocationName';

    protected string $name = 'ContentLocationName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Content Location Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : IPTC::ApplicationRecord
             * line : 103857
             * type : string
             * writable : true
             * count : 64
             * flags : list
             */
            'id' => 'IPTC::ApplicationRecord.IPTC:ContentLocationName',
            'desc' => [
                'en' => 'Content Location Name',
            ],
        ],
    ];

    protected int $count = 64;

    protected int $flags = 2112;
}
