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
class AssignMB_D18FuncButtonPlusDials extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:AssignMB-D18FuncButtonPlusDials';

    protected string $name = 'AssignMB-D18FuncButtonPlusDials';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Assign MB-D18 Func Button Plus Dials',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 157227
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:AssignMB-D18FuncButtonPlusDials',
            'desc' => [
                'en' => 'Assign MB-D18 Func Button Plus Dials',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
