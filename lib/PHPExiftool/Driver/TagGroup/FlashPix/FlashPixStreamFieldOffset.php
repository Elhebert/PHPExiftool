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
class FlashPixStreamFieldOffset extends AbstractTagGroup
{
    protected string $id = 'FlashPix:FlashPixStreamFieldOffset';

    protected string $name = 'FlashPixStreamFieldOffset';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Flash Pix Stream Field Offset',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FlashPix::Extensions
             * line : 87078
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FlashPix::Extensions.FlashPix:FlashPixStreamFieldOffset',
            'desc' => [
                'en' => 'Flash Pix Stream Field Offset',
            ],
        ],
    ];

    protected int $count = 0;
}
