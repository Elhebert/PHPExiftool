<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_GPano;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CroppedAreaLeftPixels extends AbstractTagGroup
{
    protected string $id = 'XMP-GPano:CroppedAreaLeftPixels';

    protected string $name = 'CroppedAreaLeftPixels';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Cropped Area Left Pixels',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::GPano
             * line : 281204
             * type : real
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::GPano.XMP-GPano:CroppedAreaLeftPixels',
            'desc' => [
                'en' => 'Cropped Area Left Pixels',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
