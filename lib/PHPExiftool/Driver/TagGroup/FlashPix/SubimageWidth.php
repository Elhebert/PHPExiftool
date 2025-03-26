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
class SubimageWidth extends AbstractTagGroup
{
    protected string $id = 'FlashPix:SubimageWidth';

    protected string $name = 'SubimageWidth';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FlashPix::Image
             * line : 124715
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FlashPix::Image.FlashPix:SubimageWidth',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : FlashPix::SubimageHdr
             * line : 126613
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FlashPix::SubimageHdr.FlashPix:SubimageWidth',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
