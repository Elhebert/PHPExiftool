<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LateralChromaticAberration extends AbstractTagGroup
{
    protected string $id = 'Sony:LateralChromaticAberration';

    protected string $name = 'LateralChromaticAberration';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Lateral Chromatic Aberration',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Main
             * line : 247068
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:LateralChromaticAberration',
            'desc' => [
                'en' => 'Lateral Chromatic Aberration',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
