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
class ServiceIdentifier extends AbstractTagGroup
{
    protected string $id = 'IPTC:ServiceIdentifier';

    protected string $name = 'ServiceIdentifier';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : IPTC::EnvelopeRecord
             * line : 151154
             * type : string
             * writable : true
             * count : 10
             * flags :
             */
            'id' => 'IPTC::EnvelopeRecord.IPTC:ServiceIdentifier',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 10;

    protected int $flags = 2048;
}
