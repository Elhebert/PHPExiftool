<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FisheyeFilter extends AbstractTagGroup
{
    protected string $id = 'Canon:FisheyeFilter';

    protected string $name = 'FisheyeFilter';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Fisheye Filter',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::FilterInfo
             * line : 48621
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Canon::FilterInfo.Canon:FisheyeFilter',
            'desc' => [
                'en' => 'Fisheye Filter',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
