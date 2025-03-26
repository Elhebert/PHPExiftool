<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PSP;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Artist extends AbstractTagGroup
{
    protected string $id = 'PSP:Artist';

    protected string $name = 'Artist';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Artist',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PSP::Creator
             * line : 190607
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PSP::Creator.PSP:Artist',
            'desc' => [
                'en' => 'Artist',
            ],
        ],
    ];

    protected int $count = 0;
}
