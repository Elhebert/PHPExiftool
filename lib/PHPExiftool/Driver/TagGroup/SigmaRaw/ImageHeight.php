<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SigmaRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageHeight extends AbstractTagGroup
{
    protected string $id = 'SigmaRaw:ImageHeight';

    protected string $name = 'ImageHeight';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Image Height',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : SigmaRaw::Header
             * line : 237514
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'SigmaRaw::Header.SigmaRaw:ImageHeight',
            'desc' => [
                'en' => 'Image Height',
            ],
        ],
        1 => [
            /**
             * table_name : SigmaRaw::Header4
             * line : 237536
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'SigmaRaw::Header4.SigmaRaw:ImageHeight',
            'desc' => [
                'en' => 'Image Height',
            ],
        ],
    ];

    protected int $count = 0;
}
