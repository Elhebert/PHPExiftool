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
class ShotPersonSets extends AbstractTagGroup
{
    protected string $id = 'MXF:ShotPersonSets';

    protected string $name = 'ShotPersonSets';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Shot Person Sets',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 117754
             * type : ?
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'MXF::Main.MXF:ShotPersonSets',
            'desc' => [
                'en' => 'Shot Person Sets',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 32;
}
