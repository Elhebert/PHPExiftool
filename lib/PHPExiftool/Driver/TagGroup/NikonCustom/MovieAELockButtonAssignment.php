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
class MovieAELockButtonAssignment extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:MovieAELockButtonAssignment';

    protected string $name = 'MovieAELockButtonAssignment';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Movie AE Lock Button Assignment',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 155391
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:MovieAELockButtonAssignment',
            'desc' => [
                'en' => 'Movie AE Lock Button Assignment',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
