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
class AutoFlashISOSensitivity extends AbstractTagGroup
{
    protected string $id = 'NikonSettings:AutoFlashISOSensitivity';

    protected string $name = 'AutoFlashISOSensitivity';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Auto Flash ISO Sensitivity',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonSettings::Main
             * line : 167225
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'NikonSettings::Main.NikonSettings:AutoFlashISOSensitivity',
            'desc' => [
                'en' => 'Auto Flash ISO Sensitivity',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
