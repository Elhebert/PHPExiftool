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
class LensFunc2Button extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:LensFunc2Button';

    protected string $name = 'LensFunc2Button';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Lens Func 2 Button',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 160234
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:LensFunc2Button',
            'desc' => [
                'en' => 'Lens Func 2 Button',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
