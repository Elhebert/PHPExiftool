<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class EnhancerValues extends AbstractTagGroup
{
    protected string $id = 'Olympus:EnhancerValues';

    protected string $name = 'EnhancerValues';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Enhancer Values',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::ImageProcessing
             * line : 176203
             * type : int16u
             * writable : true
             * count : 7
             * flags : permanent
             */
            'id' => 'Olympus::ImageProcessing.Olympus:EnhancerValues',
            'desc' => [
                'en' => 'Enhancer Values',
            ],
        ],
    ];

    protected int $count = 7;

    protected int $flags = 2052;
}
