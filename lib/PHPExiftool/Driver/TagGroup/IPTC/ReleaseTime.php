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
class ReleaseTime extends AbstractTagGroup
{
    protected string $id = 'IPTC:ReleaseTime';

    protected string $name = 'ReleaseTime';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : IPTC::ApplicationRecord
             * line : 149969
             * type : string
             * writable : true
             * count : 11
             * flags :
             */
            'id' => 'IPTC::ApplicationRecord.IPTC:ReleaseTime',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 11;

    protected int $flags = 2048;
}
