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
class ShotDescription extends AbstractTagGroup
{
    protected string $id = 'MXF:ShotDescription';

    protected string $name = 'ShotDescription';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Shot Description',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 117372
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:ShotDescription',
            'desc' => [
                'en' => 'Shot Description',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 117375
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:ShotDescription',
            'desc' => [
                'en' => 'Shot Description',
            ],
        ],
    ];

    protected int $count = 0;
}
