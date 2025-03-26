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
class ObjectAttributeReference extends AbstractTagGroup
{
    protected string $id = 'IPTC:ObjectAttributeReference';

    protected string $name = 'ObjectAttributeReference';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Object Attribute Reference',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : IPTC::ApplicationRecord
             * line : 103787
             * type : string
             * writable : true
             * count : 68
             * flags : list
             */
            'id' => 'IPTC::ApplicationRecord.IPTC:ObjectAttributeReference',
            'desc' => [
                'en' => 'Object Attribute Reference',
            ],
        ],
    ];

    protected int $count = 68;

    protected int $flags = 2112;
}
