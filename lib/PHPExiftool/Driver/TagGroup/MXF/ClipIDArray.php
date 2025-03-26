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
class ClipIDArray extends AbstractTagGroup
{
    protected string $id = 'MXF:ClipIDArray';

    protected string $name = 'ClipIDArray';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Clip ID Array',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 117844
             * type : ?
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'MXF::Main.MXF:ClipIDArray',
            'desc' => [
                'en' => 'Clip ID Array',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 32;
}
