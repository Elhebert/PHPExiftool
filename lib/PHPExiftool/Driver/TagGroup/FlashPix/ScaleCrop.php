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
class ScaleCrop extends AbstractTagGroup
{
    protected string $id = 'FlashPix:ScaleCrop';

    protected string $name = 'ScaleCrop';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Scale Crop',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FlashPix::DocumentInfo
             * line : 86968
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FlashPix::DocumentInfo.FlashPix:ScaleCrop',
            'desc' => [
                'en' => 'Scale Crop',
            ],
        ],
    ];

    protected int $count = 0;
}
