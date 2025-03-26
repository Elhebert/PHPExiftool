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
class ShotComment extends AbstractTagGroup
{
    protected string $id = 'MXF:ShotComment';

    protected string $name = 'ShotComment';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Shot Comment',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 115445
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:ShotComment',
            'desc' => [
                'en' => 'Shot Comment',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 117937
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:ShotComment',
            'desc' => [
                'en' => 'Shot Comment',
            ],
        ],
    ];

    protected int $count = 0;
}
