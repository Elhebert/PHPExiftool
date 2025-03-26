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
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : IPTC::ApplicationRecord
             * line : 150765
             * type : string
             * writable : true
             * count : 128
             * flags :
             */
            'id' => 'IPTC::ApplicationRecord.IPTC:OwnerID',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 128;

    protected int $flags = 2048;
}
