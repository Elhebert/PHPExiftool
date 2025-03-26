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
class FlashSyncSpeed extends AbstractTagGroup
{
    protected string $id = 'NikonSettings:FlashSyncSpeed';

    protected string $name = 'FlashSyncSpeed';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Flash Sync Speed',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonSettings::Main
             * line : 167130
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'NikonSettings::Main.NikonSettings:FlashSyncSpeed',
            'desc' => [
                'en' => 'Flash Sync Speed',
            ],
        ],
        1 => [
            /**
             * table_name : NikonSettings::Main
             * line : 167159
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'NikonSettings::Main.NikonSettings:FlashSyncSpeed',
            'desc' => [
                'en' => 'Flash Sync Speed',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
