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
class SubimageTileHeight extends AbstractTagGroup
{
    protected string $id = 'FlashPix:SubimageTileHeight';

    protected string $name = 'SubimageTileHeight';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Subimage Tile Height',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FlashPix::SubimageHdr
             * line : 87805
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FlashPix::SubimageHdr.FlashPix:SubimageTileHeight',
            'desc' => [
                'en' => 'Subimage Tile Height',
            ],
        ],
    ];

    protected int $count = 0;
}
