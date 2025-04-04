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
class AssignMovieSubselector extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:AssignMovieSubselector';

    protected string $name = 'AssignMovieSubselector';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Assign Movie Subselector',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 147622
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:AssignMovieSubselector',
            'desc' => [
                'en' => 'Assign Movie Subselector',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 149664
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:AssignMovieSubselector',
            'desc' => [
                'en' => 'Assign Movie Subselector',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 157495
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:AssignMovieSubselector',
            'desc' => [
                'en' => 'Assign Movie Subselector',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
