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
class FileVersion extends AbstractTagGroup
{
    protected string $id = 'SigmaRaw:FileVersion';

    protected string $name = 'FileVersion';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'File Version',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : SigmaRaw::Header
             * line : 237500
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'SigmaRaw::Header.SigmaRaw:FileVersion',
            'desc' => [
                'en' => 'File Version',
            ],
        ],
        1 => [
            /**
             * table_name : SigmaRaw::Header4
             * line : 237530
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'SigmaRaw::Header4.SigmaRaw:FileVersion',
            'desc' => [
                'en' => 'File Version',
            ],
        ],
    ];

    protected int $count = 0;
}
