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
class Image2Description extends AbstractTagGroup
{
    protected string $id = 'File:Image2Description';

    protected string $name = 'Image2Description';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DPX::Main
             * line : 105842
             * type : string
             * writable : false
             * count : 32
             * flags :
             */
            'id' => 'DPX::Main.File:Image2Description',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 32;
}
