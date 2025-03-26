<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonSettings;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VerticalFuncButton extends AbstractTagGroup
{
    protected string $id = 'NikonSettings:VerticalFuncButton';

    protected string $name = 'VerticalFuncButton';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Vertical Func Button',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonSettings::Main
             * line : 170779
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'NikonSettings::Main.NikonSettings:VerticalFuncButton',
            'desc' => [
                'en' => 'Vertical Func Button',
            ],
        ],
        1 => [
            /**
             * table_name : NikonSettings::Main
             * line : 171320
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'NikonSettings::Main.NikonSettings:VerticalFuncButton',
            'desc' => [
                'en' => 'Vertical Func Button',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
