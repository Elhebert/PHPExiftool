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
class DescriptionKind extends AbstractTagGroup
{
    protected string $id = 'MXF:DescriptionKind';

    protected string $name = 'DescriptionKind';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Description Kind',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 116493
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:DescriptionKind',
            'desc' => [
                'en' => 'Description Kind',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 116496
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:DescriptionKind',
            'desc' => [
                'en' => 'Description Kind',
            ],
        ],
    ];

    protected int $count = 0;
}
