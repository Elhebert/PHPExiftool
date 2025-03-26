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
class ContactKind extends AbstractTagGroup
{
    protected string $id = 'MXF:ContactKind';

    protected string $name = 'ContactKind';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Contact Kind',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 114171
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:ContactKind',
            'desc' => [
                'en' => 'Contact Kind',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 116370
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:ContactKind',
            'desc' => [
                'en' => 'Contact Kind',
            ],
        ],
    ];

    protected int $count = 0;
}
