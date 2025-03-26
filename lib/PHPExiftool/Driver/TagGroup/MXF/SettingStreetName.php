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
class SettingStreetName extends AbstractTagGroup
{
    protected string $id = 'MXF:SettingStreetName';

    protected string $name = 'SettingStreetName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Setting Street Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 114947
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:SettingStreetName',
            'desc' => [
                'en' => 'Setting Street Name',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 116757
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:SettingStreetName',
            'desc' => [
                'en' => 'Setting Street Name',
            ],
        ],
    ];

    protected int $count = 0;
}
