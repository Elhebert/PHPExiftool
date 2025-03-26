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
class Category extends AbstractTagGroup
{
    protected string $id = 'IPTC:Category';

    protected string $name = 'Category';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Category',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : IPTC::ApplicationRecord
             * line : 103842
             * type : string
             * writable : true
             * count : 3
             * flags :
             */
            'id' => 'IPTC::ApplicationRecord.IPTC:Category',
            'desc' => [
                'en' => 'Category',
            ],
        ],
    ];

    protected int $count = 3;

    protected int $flags = 2048;
}
