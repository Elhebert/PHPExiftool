<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class EmbeddedImageByteOrder extends AbstractTagGroup
{
    protected string $id = 'FLIR:EmbeddedImageByteOrder';

    protected string $name = 'EmbeddedImageByteOrder';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FLIR::EmbeddedImage
             * line : 122405
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FLIR::EmbeddedImage.FLIR:EmbeddedImageByteOrder',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
