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
class XResolution extends AbstractTagGroup
{
    protected string $id = 'File:XResolution';

    protected string $name = 'XResolution';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'X Resolution',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Extra
             * line : 85268
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Extra.File:XResolution',
            'desc' => [
                'en' => 'X Resolution',
            ],
        ],
        1 => [
            /**
             * table_name : PCX::Main
             * line : 182514
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PCX::Main.File:XResolution',
            'desc' => [
                'en' => 'X Resolution',
            ],
        ],
    ];

    protected int $count = 0;
}
