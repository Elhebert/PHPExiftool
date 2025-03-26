<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_tiff;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PlanarConfiguration extends AbstractTagGroup
{
    protected string $id = 'XMP-tiff:PlanarConfiguration';

    protected string $name = 'PlanarConfiguration';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::tiff
             * line : 412164
             * type : integer
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::tiff.XMP-tiff:PlanarConfiguration',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
