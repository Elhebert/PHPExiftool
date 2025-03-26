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
class CachedImageHeight extends AbstractTagGroup
{
    protected string $id = 'FlashPix:CachedImageHeight';

    protected string $name = 'CachedImageHeight';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FlashPix::DataObject
             * line : 124391
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FlashPix::DataObject.FlashPix:CachedImageHeight',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
