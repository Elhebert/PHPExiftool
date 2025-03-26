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
class ContentLocationCode extends AbstractTagGroup
{
    protected string $id = 'IPTC:ContentLocationCode';

    protected string $name = 'ContentLocationCode';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : IPTC::ApplicationRecord
             * line : 149936
             * type : string
             * writable : true
             * count : 3
             * flags : list
             */
            'id' => 'IPTC::ApplicationRecord.IPTC:ContentLocationCode',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 3;

    protected int $flags = 2112;
}
