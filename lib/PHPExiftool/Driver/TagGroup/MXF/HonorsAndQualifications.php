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
class HonorsAndQualifications extends AbstractTagGroup
{
    protected string $id = 'MXF:HonorsAndQualifications';

    protected string $name = 'HonorsAndQualifications';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 168874
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:HonorsAndQualifications',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 170699
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:HonorsAndQualifications',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
