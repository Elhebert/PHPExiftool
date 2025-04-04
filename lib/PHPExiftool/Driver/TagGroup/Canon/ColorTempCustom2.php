<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorTempCustom2 extends AbstractTagGroup
{
    protected string $id = 'Canon:ColorTempCustom2';

    protected string $name = 'ColorTempCustom2';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Temp Custom 2',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorData1
             * line : 46203
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData1.Canon:ColorTempCustom2',
            'desc' => [
                'en' => 'Color Temp Custom 2',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
