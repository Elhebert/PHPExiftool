<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PF5ApertureMin extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:PF5ApertureMin';

    protected string $name = 'PF5ApertureMin';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'PF5 Aperture Min',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::PersonalFuncValues
             * line : 56993
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::PersonalFuncValues.CanonCustom:PF5ApertureMin',
            'desc' => [
                'en' => 'PF5 Aperture Min',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
