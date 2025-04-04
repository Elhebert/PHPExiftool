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
class CenterFocusPoint extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:CenterFocusPoint';

    protected string $name = 'CenterFocusPoint';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Center Focus Point',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD90
             * line : 157760
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD90.NikonCustom:CenterFocusPoint',
            'desc' => [
                'en' => 'Center Focus Point',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
