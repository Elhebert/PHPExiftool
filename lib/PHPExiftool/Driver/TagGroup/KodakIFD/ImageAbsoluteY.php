<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageAbsoluteY extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:ImageAbsoluteY';

    protected string $name = 'ImageAbsoluteY';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Image Absolute Y',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 106151
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:ImageAbsoluteY',
            'desc' => [
                'en' => 'Image Absolute Y',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
