<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NITF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class StreamColor extends AbstractTagGroup
{
    protected string $id = 'NITF:StreamColor';

    protected string $name = 'StreamColor';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Stream Color',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : JPEG::NITF
             * line : 105159
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'JPEG::NITF.NITF:StreamColor',
            'desc' => [
                'en' => 'Stream Color',
            ],
        ],
    ];

    protected int $count = 0;
}
