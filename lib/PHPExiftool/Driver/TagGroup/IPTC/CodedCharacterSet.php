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
class CodedCharacterSet extends AbstractTagGroup
{
    protected string $id = 'IPTC:CodedCharacterSet';

    protected string $name = 'CodedCharacterSet';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : IPTC::EnvelopeRecord
             * line : 151297
             * type : string
             * writable : true
             * count : 32
             * flags : unsafe
             */
            'id' => 'IPTC::EnvelopeRecord.IPTC:CodedCharacterSet',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 32;

    protected int $flags = 2064;
}
