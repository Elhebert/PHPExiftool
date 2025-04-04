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
class ScreenNail extends AbstractTagGroup
{
    protected string $id = 'FlashPix:ScreenNail';

    protected string $name = 'ScreenNail';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Screen Nail',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FlashPix::Main
             * line : 87754
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FlashPix::Main.FlashPix:ScreenNail',
            'desc' => [
                'en' => 'Screen Nail',
            ],
        ],
    ];

    protected int $count = 0;
}
