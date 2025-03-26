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
class OwnerID extends AbstractTagGroup
{
    protected string $id = 'IPTC:OwnerID';

    protected string $name = 'OwnerID';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Owner ID',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : IPTC::ApplicationRecord
             * line : 104087
             * type : string
             * writable : true
             * count : 128
             * flags :
             */
            'id' => 'IPTC::ApplicationRecord.IPTC:OwnerID',
            'desc' => [
                'en' => 'Owner ID',
            ],
        ],
    ];

    protected int $count = 128;

    protected int $flags = 2048;
}
