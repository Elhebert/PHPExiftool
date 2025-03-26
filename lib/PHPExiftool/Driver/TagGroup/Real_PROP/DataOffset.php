<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Real_PROP;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DataOffset extends AbstractTagGroup
{
    protected string $id = 'Real-PROP:DataOffset';

    protected string $name = 'DataOffset';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Data Offset',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Real::Properties
             * line : 232583
             * type : int32u
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'Real::Properties.Real-PROP:DataOffset',
            'desc' => [
                'en' => 'Data Offset',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 32;
}
