<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Microsoft;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ContentDistributor extends AbstractTagGroup
{
    protected string $id = 'Microsoft:ContentDistributor';

    protected string $name = 'ContentDistributor';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Content Distributor',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Microsoft::Xtra
             * line : 120500
             * type : Unicode
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'Microsoft::Xtra.Microsoft:ContentDistributor',
            'desc' => [
                'en' => 'Content Distributor',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
