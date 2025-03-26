<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FlashPix;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageWidth extends AbstractTagGroup
{
    protected string $id = 'FlashPix:ImageWidth';

    protected string $name = 'ImageWidth';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Image Width',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FlashPix::Image
             * line : 87128
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FlashPix::Image.FlashPix:ImageWidth',
            'desc' => [
                'en' => 'Image Width',
            ],
        ],
    ];

    protected int $count = 0;
}
