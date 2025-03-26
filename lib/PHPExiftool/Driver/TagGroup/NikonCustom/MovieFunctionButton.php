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
class MovieFunctionButton extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:MovieFunctionButton';

    protected string $name = 'MovieFunctionButton';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Movie Function Button',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 145015
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:MovieFunctionButton',
            'desc' => [
                'en' => 'Movie Function Button',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 155417
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:MovieFunctionButton',
            'desc' => [
                'en' => 'Movie Function Button',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
