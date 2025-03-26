<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OKButton extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:OKButton';

    protected string $name = 'OKButton';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD7000
             * line : 227057
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD7000.NikonCustom:OKButton',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD90
             * line : 234559
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD90.NikonCustom:OKButton',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
