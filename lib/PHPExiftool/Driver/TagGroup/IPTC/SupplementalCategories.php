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
class SupplementalCategories extends AbstractTagGroup
{
    protected string $id = 'IPTC:SupplementalCategories';

    protected string $name = 'SupplementalCategories';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Supplemental Categories',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : IPTC::ApplicationRecord
             * line : 103845
             * type : string
             * writable : true
             * count : 32
             * flags : list
             */
            'id' => 'IPTC::ApplicationRecord.IPTC:SupplementalCategories',
            'desc' => [
                'en' => 'Supplemental Categories',
            ],
        ],
    ];

    protected int $count = 32;

    protected int $flags = 2112;
}
