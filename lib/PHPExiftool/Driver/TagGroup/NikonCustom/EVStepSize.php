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
class EVStepSize extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:EVStepSize';

    protected string $name = 'EVStepSize';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'EV Step Size',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD5000
             * line : 150003
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5000.NikonCustom:EVStepSize',
            'desc' => [
                'en' => 'EV Step Size',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD5100
             * line : 150333
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5100.NikonCustom:EVStepSize',
            'desc' => [
                'en' => 'EV Step Size',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD5200
             * line : 150691
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5200.NikonCustom:EVStepSize',
            'desc' => [
                'en' => 'EV Step Size',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD80
             * line : 153471
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD80.NikonCustom:EVStepSize',
            'desc' => [
                'en' => 'EV Step Size',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
