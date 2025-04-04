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
class CroppedAreaTopPixels extends AbstractTagGroup
{
    protected string $id = 'XMP-GPano:CroppedAreaTopPixels';

    protected string $name = 'CroppedAreaTopPixels';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Cropped Area Top Pixels',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::GPano
             * line : 281207
             * type : real
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::GPano.XMP-GPano:CroppedAreaTopPixels',
            'desc' => [
                'en' => 'Cropped Area Top Pixels',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
