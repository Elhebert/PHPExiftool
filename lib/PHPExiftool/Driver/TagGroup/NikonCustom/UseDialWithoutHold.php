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
class UseDialWithoutHold extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:UseDialWithoutHold';

    protected string $name = 'UseDialWithoutHold';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Use Dial Without Hold',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 160847
             * type : int8u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:UseDialWithoutHold',
            'desc' => [
                'en' => 'Use Dial Without Hold',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
