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
class ColorMatrixAdobeRGB extends AbstractTagGroup
{
    protected string $id = 'Samsung:ColorMatrixAdobeRGB';

    protected string $name = 'ColorMatrixAdobeRGB';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Samsung::Type2
             * line : 335578
             * type : int32s
             * writable : true
             * count : 9
             * flags : permanent
             */
            'id' => 'Samsung::Type2.Samsung:ColorMatrixAdobeRGB',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 9;

    protected int $flags = 2052;
}
