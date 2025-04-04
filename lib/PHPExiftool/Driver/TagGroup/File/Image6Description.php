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
class Image6Description extends AbstractTagGroup
{
    protected string $id = 'File:Image6Description';

    protected string $name = 'Image6Description';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Image 6 Description',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DPX::Main
             * line : 78348
             * type : string
             * writable : false
             * count : 32
             * flags :
             */
            'id' => 'DPX::Main.File:Image6Description',
            'desc' => [
                'en' => 'Image 6 Description',
            ],
        ],
    ];

    protected int $count = 32;
}
