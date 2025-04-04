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
class LimitSelectableImageArea16To9 extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:LimitSelectableImageArea16To9';

    protected string $name = 'LimitSelectableImageArea16To9';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Limit Selectable Image Area 16 To 9',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 158936
             * type : int8u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:LimitSelectableImageArea16To9',
            'desc' => [
                'en' => 'Limit Selectable Image Area 16 To 9',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
