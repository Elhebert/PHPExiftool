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
class AlphaMask extends AbstractTagGroup
{
    protected string $id = 'File:AlphaMask';

    protected string $name = 'AlphaMask';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Alpha Mask',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : BMP::Main
             * line : 2080
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'BMP::Main.File:AlphaMask',
            'desc' => [
                'en' => 'Alpha Mask',
            ],
        ],
    ];

    protected int $count = 0;
}
