<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Real_MDPR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PhysicalStreamNumbers extends AbstractTagGroup
{
    protected string $id = 'Real-MDPR:PhysicalStreamNumbers';

    protected string $name = 'PhysicalStreamNumbers';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Physical Stream Numbers',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Real::MediaProps
             * line : 232514
             * type : int16u
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'Real::MediaProps.Real-MDPR:PhysicalStreamNumbers',
            'desc' => [
                'en' => 'Physical Stream Numbers',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 32;
}
