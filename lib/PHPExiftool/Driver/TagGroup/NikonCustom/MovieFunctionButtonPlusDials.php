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
class MovieFunctionButtonPlusDials extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:MovieFunctionButtonPlusDials';

    protected string $name = 'MovieFunctionButtonPlusDials';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Movie Function Button Plus Dials',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 145507
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:MovieFunctionButtonPlusDials',
            'desc' => [
                'en' => 'Movie Function Button Plus Dials',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
