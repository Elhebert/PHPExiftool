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
class People extends AbstractTagGroup
{
    protected string $id = 'FlashPix:People';

    protected string $name = 'People';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'People',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FlashPix::ImageInfo
             * line : 87341
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FlashPix::ImageInfo.FlashPix:People',
            'desc' => [
                'en' => 'People',
            ],
        ],
    ];

    protected int $count = 0;
}
