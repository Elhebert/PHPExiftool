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
class Filtering extends AbstractTagGroup
{
    protected string $id = 'FlashPix:Filtering';

    protected string $name = 'Filtering';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Filtering',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FlashPix::Transform
             * line : 88405
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FlashPix::Transform.FlashPix:Filtering',
            'desc' => [
                'en' => 'Filtering',
            ],
        ],
    ];

    protected int $count = 0;
}
