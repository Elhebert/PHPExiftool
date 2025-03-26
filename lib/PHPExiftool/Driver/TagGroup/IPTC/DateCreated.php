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
class DateCreated extends AbstractTagGroup
{
    protected string $id = 'IPTC:DateCreated';

    protected string $name = 'DateCreated';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : IPTC::ApplicationRecord
             * line : 150097
             * type : digits
             * writable : true
             * count : 8
             * flags :
             */
            'id' => 'IPTC::ApplicationRecord.IPTC:DateCreated',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 8;

    protected int $flags = 2048;
}
