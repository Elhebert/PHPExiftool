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
class OriginalTransmissionReference extends AbstractTagGroup
{
    protected string $id = 'IPTC:OriginalTransmissionReference';

    protected string $name = 'OriginalTransmissionReference';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Original Transmission Reference',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : IPTC::ApplicationRecord
             * line : 103957
             * type : string
             * writable : true
             * count : 32
             * flags :
             */
            'id' => 'IPTC::ApplicationRecord.IPTC:OriginalTransmissionReference',
            'desc' => [
                'en' => 'Original Transmission Reference',
            ],
        ],
    ];

    protected int $count = 32;

    protected int $flags = 2048;
}
