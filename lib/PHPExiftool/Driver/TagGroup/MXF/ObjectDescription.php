<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ObjectDescription extends AbstractTagGroup
{
    protected string $id = 'MXF:ObjectDescription';

    protected string $name = 'ObjectDescription';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Object Description',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 115430
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:ObjectDescription',
            'desc' => [
                'en' => 'Object Description',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 115433
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:ObjectDescription',
            'desc' => [
                'en' => 'Object Description',
            ],
        ],
    ];

    protected int $count = 0;
}
