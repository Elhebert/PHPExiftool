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
class PF23ShutterButtonTime extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:PF23ShutterButtonTime';

    protected string $name = 'PF23ShutterButtonTime';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'PF23 Shutter Button Time',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::PersonalFuncValues
             * line : 57011
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::PersonalFuncValues.CanonCustom:PF23ShutterButtonTime',
            'desc' => [
                'en' => 'PF23 Shutter Button Time',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
