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
class VignettingCorrection extends AbstractTagGroup
{
    protected string $id = 'Sony:VignettingCorrection';

    protected string $name = 'VignettingCorrection';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Vignetting Correction',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Main
             * line : 247054
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:VignettingCorrection',
            'desc' => [
                'en' => 'Vignetting Correction',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
