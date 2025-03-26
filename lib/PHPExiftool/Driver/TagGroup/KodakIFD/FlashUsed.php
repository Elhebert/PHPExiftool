<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FlashUsed extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:FlashUsed';

    protected string $name = 'FlashUsed';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Flash Used',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 106235
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:FlashUsed',
            'desc' => [
                'en' => 'Flash Used',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
