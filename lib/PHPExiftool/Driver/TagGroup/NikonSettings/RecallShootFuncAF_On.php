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
class RecallShootFuncAF_On extends AbstractTagGroup
{
    protected string $id = 'NikonSettings:RecallShootFuncAF-On';

    protected string $name = 'RecallShootFuncAF-On';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Recall Shoot Func AF-On',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonSettings::Main
             * line : 170768
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'NikonSettings::Main.NikonSettings:RecallShootFuncAF-On',
            'desc' => [
                'en' => 'Recall Shoot Func AF-On',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
