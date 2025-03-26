<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ExifIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SelfTimerMode extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:SelfTimerMode';

    protected string $name = 'SelfTimerMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Self Timer Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 82598
             * type : int16u
             * writable : true
             * count :
             * flags :
             */
            'id' => 'Exif::Main.ExifIFD:SelfTimerMode',
            'desc' => [
                'en' => 'Self Timer Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
