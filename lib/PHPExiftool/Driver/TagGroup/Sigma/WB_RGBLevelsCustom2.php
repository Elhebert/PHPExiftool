<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sigma;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_RGBLevelsCustom2 extends AbstractTagGroup
{
    protected string $id = 'Sigma:WB_RGBLevelsCustom2';

    protected string $name = 'WB_RGBLevelsCustom2';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'WB RGB Levels Custom 2',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sigma::WBSettings
             * line : 237456
             * type : float
             * writable : true
             * count : 3
             * flags : permanent
             */
            'id' => 'Sigma::WBSettings.Sigma:WB_RGBLevelsCustom2',
            'desc' => [
                'en' => 'WB RGB Levels Custom 2',
            ],
        ],
    ];

    protected int $count = 3;

    protected int $flags = 2052;
}
