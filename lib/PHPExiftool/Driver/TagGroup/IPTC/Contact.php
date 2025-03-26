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
class Contact extends AbstractTagGroup
{
    protected string $id = 'IPTC:Contact';

    protected string $name = 'Contact';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : IPTC::ApplicationRecord
             * line : 150400
             * type : string
             * writable : true
             * count : 128
             * flags : list
             */
            'id' => 'IPTC::ApplicationRecord.IPTC:Contact',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 128;

    protected int $flags = 2112;
}
