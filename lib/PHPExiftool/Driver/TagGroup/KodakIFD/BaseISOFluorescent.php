<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BaseISOFluorescent extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:BaseISOFluorescent';

    protected string $name = 'BaseISOFluorescent';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Base ISO Fluorescent',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 106583
             * type : rational64u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:BaseISOFluorescent',
            'desc' => [
                'en' => 'Base ISO Fluorescent',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
