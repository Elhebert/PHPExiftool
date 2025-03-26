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
class BeginAnchor extends AbstractTagGroup
{
    protected string $id = 'MXF:BeginAnchor';

    protected string $name = 'BeginAnchor';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Begin Anchor',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 115824
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:BeginAnchor',
            'desc' => [
                'en' => 'Begin Anchor',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 115827
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:BeginAnchor',
            'desc' => [
                'en' => 'Begin Anchor',
            ],
        ],
    ];

    protected int $count = 0;
}
