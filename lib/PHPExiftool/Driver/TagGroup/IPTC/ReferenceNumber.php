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
class ReferenceNumber extends AbstractTagGroup
{
    protected string $id = 'IPTC:ReferenceNumber';

    protected string $name = 'ReferenceNumber';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Reference Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : IPTC::ApplicationRecord
             * line : 103901
             * type : digits
             * writable : true
             * count : 8
             * flags : list
             */
            'id' => 'IPTC::ApplicationRecord.IPTC:ReferenceNumber',
            'desc' => [
                'en' => 'Reference Number',
            ],
        ],
    ];

    protected int $count = 8;

    protected int $flags = 2112;
}
