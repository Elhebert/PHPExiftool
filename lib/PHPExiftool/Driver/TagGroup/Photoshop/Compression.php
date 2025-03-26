<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Photoshop;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Compression extends AbstractTagGroup
{
    protected string $id = 'Photoshop:Compression';

    protected string $name = 'Compression';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Compression',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Photoshop::ImageData
             * line : 212021
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Photoshop::ImageData.Photoshop:Compression',
            'desc' => [
                'en' => 'Compression',
            ],
        ],
    ];

    protected int $count = 0;
}
