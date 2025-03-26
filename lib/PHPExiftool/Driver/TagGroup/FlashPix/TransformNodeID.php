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
class TransformNodeID extends AbstractTagGroup
{
    protected string $id = 'FlashPix:TransformNodeID';

    protected string $name = 'TransformNodeID';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Transform Node ID',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FlashPix::Transform
             * line : 88363
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FlashPix::Transform.FlashPix:TransformNodeID',
            'desc' => [
                'en' => 'Transform Node ID',
            ],
        ],
    ];

    protected int $count = 0;
}
