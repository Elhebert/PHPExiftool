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
class FineTuneOptHighlightWeighted extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:FineTuneOptHighlightWeighted';

    protected string $name = 'FineTuneOptHighlightWeighted';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Fine Tune Opt Highlight Weighted',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 147061
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:FineTuneOptHighlightWeighted',
            'desc' => [
                'en' => 'Fine Tune Opt Highlight Weighted',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 149092
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:FineTuneOptHighlightWeighted',
            'desc' => [
                'en' => 'Fine Tune Opt Highlight Weighted',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 155543
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:FineTuneOptHighlightWeighted',
            'desc' => [
                'en' => 'Fine Tune Opt Highlight Weighted',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 156910
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:FineTuneOptHighlightWeighted',
            'desc' => [
                'en' => 'Fine Tune Opt Highlight Weighted',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 158703
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:FineTuneOptHighlightWeighted',
            'desc' => [
                'en' => 'Fine Tune Opt Highlight Weighted',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
