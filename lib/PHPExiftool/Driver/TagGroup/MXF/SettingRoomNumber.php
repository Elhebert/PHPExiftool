<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SettingRoomNumber extends AbstractTagGroup
{
    protected string $id = 'MXF:SettingRoomNumber';

    protected string $name = 'SettingRoomNumber';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Setting Room Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 114941
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:SettingRoomNumber',
            'desc' => [
                'en' => 'Setting Room Number',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 116751
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:SettingRoomNumber',
            'desc' => [
                'en' => 'Setting Room Number',
            ],
        ],
    ];

    protected int $count = 0;
}
