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
class DataEssenceCodingID extends AbstractTagGroup
{
    protected string $id = 'MXF:DataEssenceCodingID';

    protected string $name = 'DataEssenceCodingID';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Data Essence Coding ID',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 116568
             * type : ?
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'MXF::Main.MXF:DataEssenceCodingID',
            'desc' => [
                'en' => 'Data Essence Coding ID',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 32;
}
