<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VignettingCorrection extends AbstractTagGroup
{
    protected string $id = 'Samsung:VignettingCorrection';

    protected string $name = 'VignettingCorrection';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Samsung::Type2
             * line : 335623
             * type : int16u
             * writable : true
             * count : 15
             * flags : permanent,unknown
             */
            'id' => 'Samsung::Type2.Samsung:VignettingCorrection',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 15;

    protected int $flags = 2084;
}
