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
class FlashMode extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:FlashMode';

    protected string $name = 'FlashMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Flash Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 106116
             * type : int16u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Kodak::IFD.KodakIFD:FlashMode',
            'desc' => [
                'en' => 'Flash Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
