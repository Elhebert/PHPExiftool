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
class SubimageColor extends AbstractTagGroup
{
    protected string $id = 'FlashPix:SubimageColor';

    protected string $name = 'SubimageColor';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Subimage Color',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FlashPix::Image
             * line : 87163
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FlashPix::Image.FlashPix:SubimageColor',
            'desc' => [
                'en' => 'Subimage Color',
            ],
        ],
    ];

    protected int $count = 0;
}
