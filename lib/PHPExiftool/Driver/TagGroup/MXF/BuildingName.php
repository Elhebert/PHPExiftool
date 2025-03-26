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
class BuildingName extends AbstractTagGroup
{
    protected string $id = 'MXF:BuildingName';

    protected string $name = 'BuildingName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Building Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 117808
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:BuildingName',
            'desc' => [
                'en' => 'Building Name',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 117811
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:BuildingName',
            'desc' => [
                'en' => 'Building Name',
            ],
        ],
    ];

    protected int $count = 0;
}
