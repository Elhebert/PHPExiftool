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
class LastModifier extends AbstractTagGroup
{
    protected string $id = 'FlashPix:LastModifier';

    protected string $name = 'LastModifier';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FlashPix::DataObject
             * line : 124361
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FlashPix::DataObject.FlashPix:LastModifier',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : FlashPix::GlobalInfo
             * line : 124623
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FlashPix::GlobalInfo.FlashPix:LastModifier',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : FlashPix::Transform
             * line : 127337
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FlashPix::Transform.FlashPix:LastModifier',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
