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
class InitialHorizontalFOVDegrees extends AbstractTagGroup
{
    protected string $id = 'XMP-GPano:InitialHorizontalFOVDegrees';

    protected string $name = 'InitialHorizontalFOVDegrees';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::GPano
             * line : 397123
             * type : real
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::GPano.XMP-GPano:InitialHorizontalFOVDegrees',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
