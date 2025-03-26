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
class TimerFunctionButton extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:TimerFunctionButton';

    protected string $name = 'TimerFunctionButton';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Timer Function Button',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD40
             * line : 145869
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD40.NikonCustom:TimerFunctionButton',
            'desc' => [
                'en' => 'Timer Function Button',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD5000
             * line : 150039
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5000.NikonCustom:TimerFunctionButton',
            'desc' => [
                'en' => 'Timer Function Button',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD5100
             * line : 150369
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5100.NikonCustom:TimerFunctionButton',
            'desc' => [
                'en' => 'Timer Function Button',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
