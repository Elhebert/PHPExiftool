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
class LimitAFAreaModeSelD49 extends AbstractTagGroup
{
    protected string $id = 'NikonSettings:LimitAFAreaModeSelD49';

    protected string $name = 'LimitAFAreaModeSelD49';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Limit AF Area Mode Sel D49',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonSettings::Main
             * line : 170462
             * type : ?
             * writable : false
             * count :
             * flags : permanent,unknown
             */
            'id' => 'NikonSettings::Main.NikonSettings:LimitAFAreaModeSelD49',
            'desc' => [
                'en' => 'Limit AF Area Mode Sel D49',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 36;
}
