<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BrightnessValue extends AbstractTagGroup
{
    protected string $id = 'Kodak:BrightnessValue';

    protected string $name = 'BrightnessValue';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Brightness Value',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::Free
             * line : 106049
             * type : int32s
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Free.Kodak:BrightnessValue',
            'desc' => [
                'en' => 'Brightness Value',
            ],
        ],
        1 => [
            /**
             * table_name : Kodak::TextualInfo
             * line : 109411
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::TextualInfo.Kodak:BrightnessValue',
            'desc' => [
                'en' => 'Brightness Value',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
