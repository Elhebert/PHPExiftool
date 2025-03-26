<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonCapture;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageDustOff extends AbstractTagGroup
{
    protected string $id = 'NikonCapture:ImageDustOff';

    protected string $name = 'ImageDustOff';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Image Dust Off',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCapture::Main
             * line : 141888
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCapture::Main.NikonCapture:ImageDustOff',
            'desc' => [
                'en' => 'Image Dust Off',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
