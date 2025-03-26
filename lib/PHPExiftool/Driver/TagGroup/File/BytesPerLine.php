<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BytesPerLine extends AbstractTagGroup
{
    protected string $id = 'File:BytesPerLine';

    protected string $name = 'BytesPerLine';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Bytes Per Line',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PCX::Main
             * line : 182523
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PCX::Main.File:BytesPerLine',
            'desc' => [
                'en' => 'Bytes Per Line',
            ],
        ],
    ];

    protected int $count = 0;
}
