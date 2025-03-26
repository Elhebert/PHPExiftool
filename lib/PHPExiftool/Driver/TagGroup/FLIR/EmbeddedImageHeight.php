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
class EmbeddedImageHeight extends AbstractTagGroup
{
    protected string $id = 'FLIR:EmbeddedImageHeight';

    protected string $name = 'EmbeddedImageHeight';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Embedded Image Height',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FLIR::EmbeddedImage
             * line : 85736
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FLIR::EmbeddedImage.FLIR:EmbeddedImageHeight',
            'desc' => [
                'en' => 'Embedded Image Height',
            ],
        ],
    ];

    protected int $count = 0;
}
